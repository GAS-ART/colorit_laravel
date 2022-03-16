<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


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
Route::get('/locale/{locale}',  'App\Http\Controllers\LanguagesController@changeLocale')->name('locale');
Route::post('feedback', 'App\Http\Controllers\ContactController@feedBackForm')->name('contactForm');
Route::get('/download', 'App\Http\Controllers\downloadController@downloadPresentation')->name('download');


Route::get('/', function () {App::setLocale('ru'); return view('home');})->name('index');

Route::get('/{locale}', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) { 

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('home');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('home');

   }
})->name('index.lang');


Route::get('/{locale}/home', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('home');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('home');

   }
})->name('home.lang');

Route::get('/{locale}/outdoor_advertising', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('outdoor_advertising');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('outdoor_advertising');

   }
})->name('outdoor_advertising.lang');

