<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ScrapingController;
use App\Http\Controllers\P7MatchesController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\GoalsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\P7LastMatchController;

Route::get('/', HomeController::class);
//Route::get('/p7', [ScrapingController::class, 'scrap']);
Route::get('/nextmatch', [P7MatchesController::class, 'next']);
Route::get('/lastmatch', [P7LastMatchController::class, 'lastmatch']);

Route::get('/player', [PlayerController::class, 'player']);
Route::get('/goals', [GoalsController::class, 'catalog']);