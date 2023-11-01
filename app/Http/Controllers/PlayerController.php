<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;

class PlayerController extends Controller
{
    public function player(Client $client)
    {
        $client = new Client();
        $crawler = $client->request('GET', 'https://www.fussball.de/mannschaft/ht-pichanga-fc-7-bsv-huertuerkel-fz-berlin/-/saison/2223/team-id/02ETPGRQKC000000VS5489B2VVP292BR#!/');
        $inlineContactStyles = 'table table-striped table-full-width';
        $mydata = [];
        $contact = $crawler->filter("[class='$inlineContactStyles']")->first();
        dd($contact->html());
        $crawler->filter("[class='$inlineContactStyles']")->each(function (Crawler $contactNode) use (&$mydata) {

            $divs = $contactNode->children()->filter('td');
            $sectionInfo = $divs->eq(0);
            dd($divs->html());
            $teamhome = $sectionInfo->filter("[class='player-name']")->first()->text('');
            dd($teamhome);
            $teamaway = $sectionInfo->filter("[class='team-away']")->first()->text('');
            $matchdate = $sectionInfo->filter("[class='match-meta']")->first()->text('');


            return $mydata;
        });

        //var_dump($mydata);
        return view('players', compact('mydata'));
    }

}
