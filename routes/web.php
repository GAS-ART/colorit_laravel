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

Route::group(
   ['prefix' => LaravelLocalization::setLocale()],
   function(){}
);

Route::get('/', function () { return view('home');})->name('index');
Route::get('/es', function () {App::setlocale('es'); return view('home');})->name('indexES');
Route::get('/ru', function () {App::setlocale('ru'); return view('home');})->name('indexRU');

Route::get('/home', function () {return view('home');})->name('home');
Route::get('/es/home', function () {App::setlocale('es'); return view('home');})->name('homeES');
Route::get('/ru/home', function () {App::setlocale('ru'); return view('home');})->name('homeRU');

      
      
      
