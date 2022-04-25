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
Route::post('feedback_page', 'App\Http\Controllers\ContactController@feedBackFormPage')->name('contactFormPage');


Route::get('/download/{locale}', function ($locale){
   if($locale == 'es'){
       return response()->download(storage_path("app/public/download/Presentation_es.pdf"));
   } else{
       return response()->download(storage_path("app/public/download/Presentation_ru.pdf"));
   }
})->name('download.lang');

Route::get('/', function () {App::setLocale('es'); return view('home');})->name('index');

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

Route::get('/{locale}/smm', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('smm');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('smm');

   }
})->name('smm.lang');

Route::get('/{locale}/design', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('design');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('design');

   }
})->name('design.lang');

Route::get('/{locale}/uv_printing', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('uvPrinting');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('uvPrinting');

   }
})->name('uvPrinting.lang');

Route::get('/{locale}/website_development', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('website_development');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('website_development');

   }
})->name('webDevelopment.lang');

Route::get('/{locale}/portfolio', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('portfolio');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('portfolio');

   }
})->name('portfolio.lang');

Route::get('/{locale}/printing_on_clothes', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('printing');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('printing');

   }
})->name('printing.lang');

Route::get('/{locale}/polygraphy', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('polygraphy');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('polygraphy');

   }
})->name('polygraphy.lang');

Route::get('/{locale}/about_us', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('about');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('about');

   }
})->name('about.lang');

Route::get('/{locale}/cookies_policy', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('cookies');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('cookies');

   }
})->name('cookies.lang');

Route::get('/{locale}/privacy_policy', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('privacy');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('privacy');

   }
})->name('privacy.lang');

Route::get('/{locale}/contacts', function ($locale) {
   
   if (! in_array($locale, ['ru', 'es'])) {

      abort(404);

   } else if ($locale == 'ru') {

      App::setLocale('ru');
      return view('contacts');

   } else if ($locale == 'es') {

      App::setLocale('es');
      return view('contacts');

   }
})->name('contacts.lang');
