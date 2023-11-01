<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\DomDocument;
use Illuminate\Support\DomXPath;

class ApiController extends Controller
{
    public function next()
    {
        $url = 'https://www.fussball.de/ajax.team.next.games/-/mode/PAGE/team-id/02M4JAKEJ0000000VS5489B1VVVHS1D7';

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
                $data[] = [
                    'Date' => $date,
                    'Time' => $time,
                    'League' => $element[2],
                    'TeamHome' => $element[5],
                    'TeamAway' => $element[7]
                ];
            }

            return response()->json(['data' => $data]);
        } else {
            return response()->json(['error' => "Table not found with class: $tableClassName"], 404);
        }
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