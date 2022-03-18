<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactRequestPage;

class ContactController extends Controller
{
   
   public function feedBackForm (ContactRequest $req){

      /*ЗАГРУЖАЕМ ФАЙЛ НА СЕРВЕР*/
      if ($req->isMethod('post') && $req->file('filename')) {
         $file = $req->file('filename');
         $upload_folder = 'public/mail_files/';
         $fileName = $file->getClientOriginalName(); // image.jpg
         Storage::putFileAs($upload_folder, $file, $fileName);
         

      /*ДАННЫЕ ИЗ ФОРМЫ*/
      $name = $req->input('name');
      $email = $req->input('email');
      $phone = $req->input('phone');
      $service = $req->input('service');
      $text = $req->input('text');
      $page = $req->input('page');

      $pathToFile = storage_path('app/public/mail_files/' . $fileName); // АДРЕС ГДЕ ХРАНИТСЯ ФАЙЛ

      /*ОТПРАВКА ДАННЫХ ИЗ ФОРМЫ И ФАЙЛА НА ПОЧТУ*/
      mail::send(['html' => 'mail'], ['name' => $name, 'service' => $service, 'text' => $text, 'email' => $email, 'phone' => $phone, 'page' => $page, ], function($message) use ($pathToFile){
         $message->to('temoha1386@gmail.com')->subject('ЗАЯВКА ИЗ ФОРМЫ ОБРАТНОЙ СВЯЗИ')->attach($pathToFile);
         });

      /*УДАЛЯЕМ ЗАГРУЖЕННЫЙ ФАЙЛ*/
      unlink($pathToFile);
   } else {
      /*ДАННЫЕ ИЗ ФОРМЫ*/
      $name = $req->input('name');
      $email = $req->input('email');
      $phone = $req->input('phone');
      $service = $req->input('service');
      $text = $req->input('text');
      $page = $req->input('page');

      mail::send(['html' => 'mail'], ['name' => $name, 'service' => $service, 'text' => $text, 'email' => $email, 'phone' => $phone, 'page' => $page, ], function($message){
         $message->to('temoha1386@gmail.com')->subject('ЗАЯВКА ИЗ ФОРМЫ ОБРАТНОЙ СВЯЗИ');
         });
   }

      return view('send');
 }

 public function feedBackFormPage (ContactRequestPage $req){
    /*ДАННЫЕ ИЗ ФОРМЫ*/
    $name = $req->input('name');
    $email = $req->input('email');
    $phone = $req->input('phone');
    $page = $req->input('page');
    
    mail::send(['html' => 'mail_page_form'], ['name' => $name, 'email' => $email, 'phone' => $phone, 'page' => $page, ], function($message){
      $message->to('temoha1386@gmail.com')->subject('ЗАЯВКА ИЗ ФОРМЫ ОБРАТНОЙ СВЯЗИ');
      });
 }
   
}