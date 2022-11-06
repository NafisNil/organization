<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CredentialController;
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
use App\Http\Controllers\TestimonialController;

use App\Models\Credential;

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
Route::get('/about-us', [FrontendController::class,'about'])->name('about.us'); 
Route::get('/contact-us', [FrontendController::class,'contact'])->name('contact.us'); 
Route::get('/event-all', [FrontendController::class,'event'])->name('event.all'); 
Route::get('/news-all', [FrontendController::class,'news'])->name('news.all'); 
Route::get('/team-all', [FrontendController::class,'team'])->name('team.all'); 
Route::get('/gallery-cat', [FrontendController::class,'galleryCat'])->name('gallery.cat'); 
Route::get('/gallery-all/{id}', [FrontendController::class,'gallery'])->name('gallery.all'); 
Route::get('/event-single/{id}', [FrontendController::class,'event_single'])->name('event.single'); 
Route::get('/news-single/{id}', [FrontendController::class,'news_single'])->name('news.single'); 
Route::get('/event-by-tag/{id}', [FrontendController::class,'eventByTag'])->name('event.tag'); 
Route::get('/news-by-tag/{id}', [FrontendController::class,'newsByTag'])->name('news.tag'); 
Auth::routes();
//Route::get('create')
Route::group(['prefix' => 'application','as'=>'application.'], function () {
        Route::get('create',[ApplicationController::class,'create'])->name('create');
        
        Route::post('/',[ApplicationController::class,'store'])->name('store');
  });
Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/applications',[ApplicationController::class,'index'])->name('application.list');
Route::delete('/applications/{application}',[ApplicationController::class,'destroy'])->name('application.destroy');
Route::get('/applications/{application}',[ApplicationController::class,'show'])->name('application.show');


Route::resources([
    'logo' => LogoController::class,
    'slider' =>  SliderController::class,
    'message' =>  MessageController::class,
    'data' =>  DataController::class,
    'event' => EventController::class,
  'news'=> NewsController::class,
  'galcat' => GalcatController::class,
  'gallery' => GalleryController::class,
  'testimonial' => TestimonialController::class,
  'contact' => ContactController::class,
  'credential' => CredentialController::class,
  'about' => AboutController::class
]);
});