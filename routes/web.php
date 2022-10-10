<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalcatController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsController;

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

/*Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', [FrontendController::class,'index'])->name('index'); 

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resources([
    'logo' => LogoController::class,
    'slider' =>  SliderController::class,
    'message' =>  MessageController::class,
    'data' =>  DataController::class,
    'event' => EventController::class,
  'news'=> NewsController::class,
  'galcat' => GalcatController::class,
  'gallery' => GalleryController::class,
]);
});