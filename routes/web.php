<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BannerSearchController;
use App\Http\Controllers\Slider1Controller;
use App\Http\Controllers\Slider2Controller;
use App\Http\Controllers\Slider_search1Controller;
use App\Http\Controllers\Slider_search2Controller;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\OffreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ParametreController;
use App\Http\Controllers\AboutController;

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


Route::get('/', HomeController::class)->name('home')->middleware('auth');

Route::middleware(['auth'])->group(function () {
Route::resource('/banner', BannerController::class);
Route::resource('/banner-search', BannerSearchController::class);
Route::resource('/slider1', Slider1Controller::class);
Route::resource('/slider2', Slider2Controller::class);
Route::resource('/sliderSearch1', Slider_search1Controller::class);
Route::resource('/sliderSearch2', Slider_search2Controller::class);
Route::resource('/categorie', CategorieController::class);
Route::resource('/offre', OffreController::class);
Route::get('/offre-non-valide', OffreController::class)->name('non.valide');
Route::resource('/user', UserController::class);
Route::resource('/parametre', ParametreController::class);
Route::resource('/about', AboutController::class);

});

Route::get('login',[App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::get('logout',[App\Http\Controllers\AuthController::class,'logout'])->name('logout');
Route::post('authenticate', [App\Http\Controllers\AuthController::class, 'authenticate'])->name('authenticate');
Route::post('register', [App\Http\Controllers\AuthController::class, 'register'])->name('register');
Route::get('register', [App\Http\Controllers\AuthController::class, 'index'])->name('register.index');