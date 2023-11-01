<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;


class TableFemController extends Controller
{
    public function tablefem(Client $client)
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.fussball.de/ajax.team.table/-/saison/2324/staffel/02M5HR4LM800000OVS5489B4VSAUO6GA-G/team-id/02M4JASNS0000000VS5489B1VVVHS1D7');
        $inlineContactStyles = 'table table-striped table-full-width';
        //$contact = $crawler->filter("[class='$inlineContactStyles']");
        $mydatafem = [];

        $crawler->filter("[class='$inlineContactStyles']")->each(function (Crawler $contactNode) use (&$mydatafem) {
            $tds = $contactNode->children()->filter('tr');
            for ($i = 1; $i <= 10; $i++) {
                $sectionInfo = $tds->eq($i);
                $position = $sectionInfo->filter("[class='column-rank']")->first()->text('');
                $title = $sectionInfo->filter("[class='club-name']")->first()->text('');
                $img = $sectionInfo->filter("[class='club-logo table-image'] > img")->attr('src');
                $points = $sectionInfo->filter("[class='column-points']")->first()->text('');
                $dif = $sectionInfo->filter("[class='no-wrap']")->first()->text('');
                $goles = $this->calcularGoles($dif);

                $pj = $sectionInfo->filter('td')->eq(3)->text('');
                $pwon = $sectionInfo->filter('td')->eq(4)->text('');
                $pdraw = $sectionInfo->filter('td')->eq(5)->text('');
                $plost = $sectionInfo->filter('td')->eq(6)->text('');

                $totalgoals =  $goles['dif2'];
                $goalsAF = $goles['afav'];
                $goalsEN = $goles['enc'];

                $mydatafem[] = [
                    'position'       => $position,
                    'img'       => $img,
                    'title'     => $title,
                    'points'     => $points,
                    'pj'        => $pj,
                    'pwon'      => $pwon,
                    'pdraw'     => $pdraw,
                    'plost'     => $plost,
                    'dif'       => $totalgoals,
                    'goalsAF'       => $goalsAF,
                    'goalsEN'       => $goalsEN
                ];
            }
        });
        return $mydatafem;
    }

    public function calcularGoles($dif){
        $goles= [];
        $parts = explode(' : ', $dif);
        $goles['afav'] = $parts[0];
        $goles['enc'] = $parts[1];
        $goles['dif2'] = (int)$goles['afav'] - (int)$goles['enc'];

        return $goles;
    }
}