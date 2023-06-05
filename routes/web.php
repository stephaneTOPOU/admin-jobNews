<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\Slider1Controller;
use App\Http\Controllers\Slider2Controller;
use App\Http\Controllers\OffreController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', HomeController::class)->name('home');
Route::resource('/banner', BannerController::class);
Route::resource('/slider1', Slider1Controller::class);
Route::resource('/slider2', Slider2Controller::class);
Route::resource('/offre', OffreController::class);