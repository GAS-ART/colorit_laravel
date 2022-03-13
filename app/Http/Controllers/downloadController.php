<?php

namespace App\Http\Controllers;



class downloadController extends Controller
{
    public function downloadPresentation(){

         return response()->download(storage_path("app/public/download/Presentation.pdf"));
    }
}
