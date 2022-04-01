<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use mysql_xdevapi\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class languagesController extends Controller
{

    public function changeLocale($locale) {

        session(['locale'=>$locale]);

        App::setLocale('$locale');

        $url = URL::previous();

        if(Str::contains($url, '/ru') && $locale == 'es'){

            $url =   Str::replaceFirst('ru', 'es', $url);
            return redirect($url);

        } else if (Str::contains($url, '/es') && $locale == 'ru') {

            $url =   Str::replaceFirst('es','ru', $url);
            return redirect($url);

        } else if (!Str::contains($url, ['es','ru']) && $locale == 'ru') {

            return redirect($url . 'ru');
            
        } else {
            return redirect($url);
        }
        
    }

}
