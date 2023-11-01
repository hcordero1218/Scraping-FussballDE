<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class P7LastMatchController extends Controller
{

    public function lastmatch()
    {
        $url = 'https://www.fussball.de/ajax.team.prev.games/-/mode/PAGE/team-id/02M4JAKEJ0000000VS5489B1VVVHS1D7';
    
        $dom = new \DOMDocument();
    
        @$dom->loadHTMLFile($url);
    
        $xpath = new \DOMXPath($dom);
    
        $tableClassName = 'table table-striped table-full-width';
    
        $tables = $xpath->query("//table[contains(@class, '$tableClassName')]");
    
        if ($tables->length > 0) {
            $table = $tables->item(0);
    
            $data = [];
            $rows = $table->getElementsByTagName('tr');
    
            for ($i = 1; $i < count($rows); $i += 3) {
                $element = [];
    
                for ($j = 0; $j < 3; $j++) {
                    $rowIndex = $i + $j;
                    if ($rowIndex < count($rows)) {
                        $row = $rows[$rowIndex];
                        $cells = $row->getElementsByTagName('td');
                        foreach ($cells as $cell) {                            
                            $element[] = $cell->textContent;                            
                        }
    
                    }
                }
                $matchdate = $element[0];
                $dates = $this->formateDate($matchdate);
                $date = $dates['date-complet'];
                $time = $dates['time'];

                $cleanedTextHome = preg_replace('/\s+/', ' ', $element[5]);
                $cleanedTextHome = trim($cleanedTextHome);
                $cleanedTextHome = str_replace(" - KF", "", $cleanedTextHome);
                $cleanedTextHome = mb_convert_encoding($cleanedTextHome, 'ISO-8859-1');                 

                $cleanedTextAway = preg_replace('/\s+/', ' ', $element[7]);
                $cleanedTextAway = trim($cleanedTextAway);
                $cleanedTextAway = str_replace(" - KF", "", $cleanedTextAway);
                $cleanedTextAway = mb_convert_encoding($cleanedTextAway, 'ISO-8859-1');  

                $cleanedTextLeague = preg_replace('/\s+/', ' ', $element[2]);
                $cleanedTextLeague = trim($cleanedTextLeague);

                

                $data[] = [
                    'Date' => $date,
                    'Time' => $time,
                    'League' => $cleanedTextLeague,
                    'TeamHome' => $cleanedTextHome,
                    'ScoreHome' => null,
                    'IMGHome' => null,
                    'TeamAway' => $cleanedTextAway,
                    'ScoreAway' => null,                    
                    'IMGAway' => null
                ];
            }
            $data = $this->searchimg($data);
            $datalastmatch = $this->score($data);            
        }
        return $datalastmatch;
    }
    
    public function searchimg($data)
    {
        $url = sprintf('https://sheets.googleapis.com/v4/spreadsheets/1eY9kNyUT_oVltgkYIKOS9i7ITFq_uaPryzPm4RzyeVs/values/logos?key=AIzaSyB6mKKKpBVPvEH-EobM0eBD_Cd2J6fMKBo');
        $json = json_decode(file_get_contents($url));
        $values = $json->values;
    
        $keys = $values[0];
        unset($values[0]);
        $registros = array_map(function ($values) use ($keys) {
            return array_combine($keys, $values);
        }, array_values($values));
    
        foreach ($data as &$item) {
            $teamHome = $item['TeamHome'];
            $teamAway = $item['TeamAway'];
    
            foreach ($registros as $registro) {
                if ($registro['Team'] == $teamHome) {
                    $item['IMGHome'] = $registro['Link'];
                }
    
                if ($registro['Team'] == $teamAway) {
                    $item['IMGAway'] = $registro['Link'];
                }
            }
        }   
        return $data;
    }
    
    public function score($data)
    {
        $url = sprintf('https://sheets.googleapis.com/v4/spreadsheets/1eY9kNyUT_oVltgkYIKOS9i7ITFq_uaPryzPm4RzyeVs/values/score?key=AIzaSyB6mKKKpBVPvEH-EobM0eBD_Cd2J6fMKBo');
        $json = json_decode(file_get_contents($url));
        $values = $json->values;
    
        $keys = $values[0];
        unset($values[0]);
        $registros = array_map(function ($values) use ($keys) {
            return array_combine($keys, $values);
        }, array_values($values));
    
        foreach ($data as &$item) { 
    
            foreach ($registros as $registro) {
                if($registro['Team'] == 'Pichanga7'){
                    $item['ScoreHome'] = $registro['Home'];               
    
                    $item['ScoreAway'] = $registro['Away'];
                } 
            }
        }
        return $data;
    }
    private function formateDate($matchdate)
    {
        $dates = [];
        $parts = explode(' - ', $matchdate);
        $dates['date-complet'] = $parts[0];
        $parts = explode(' | ', $parts[1]);
        $dates['time'] = $parts[0];
        return $dates;
    }

}