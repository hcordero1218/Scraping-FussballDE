<?php

namespace App\Http\Controllers;
use App\Http\Controllers\P7MatchesController;
use App\Http\Controllers\P7LastMatchController;
use App\Http\Controllers\P11MatchesController;
use App\Http\Controllers\P11LastMatchController;
use App\Http\Controllers\PFEMMatchesController;
use App\Http\Controllers\PFEMLastMatchController;
use App\Http\Controllers\ScrapingController;
use App\Http\Controllers\TableP11Controller;
use App\Http\Controllers\TableFemController;

use Goutte\Client;

use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function __invoke(){
    $client = new Client();

        // P7 //
    $matchesController = new P7MatchesController();
    $lastmatchController = new P7LastMatchController();
    $scrapingController = new ScrapingController();

    $datanextmatch = $matchesController->next();
    $datalastmatch = $lastmatchController->lastmatch();    
    $mydata = $scrapingController->scrap($client);

    // P11 //
    $matchesControllerp11 = new P11MatchesController();
    $lastmatchControllerp11 = new P11LastMatchController();
    $tablep11Controller = new TableP11Controller();

    $datanextmatchp11 = $matchesControllerp11->next();
    $datalastmatchp11 = $lastmatchControllerp11->lastmatch();
    $mydata11 = $tablep11Controller->tablep11($client);
    //dd($mydata11);

    // PFEM //
    $matchesControllerpfem = new PFEMMatchesController();
    $lastmatchControllerpfem = new PFEMLastMatchController();
    $tablefemController = new TableFemController();

    
    $datanextmatchpfem = $matchesControllerpfem->next();
    $datalastmatchpfem = $lastmatchControllerpfem->lastmatch();
    $mydatafem = $tablefemController->tablefem($client);

    return view('home', compact( 'datanextmatch','datalastmatch', 'datanextmatchp11', 'datalastmatchp11', 'datanextmatchpfem', 'datalastmatchpfem', 'mydata', 'mydata11', 'mydatafem'));
    }
         
    
}