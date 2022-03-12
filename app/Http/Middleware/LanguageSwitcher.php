<?php

namespace App\Http\Middleware;

use Closure;

class LanguageSwitcher
{
    public function handle($request, Closure $next)
    {


       \App::setlocale(session ('locale'));
////       \App::getLocale(session('locale') or 'ukr');



        return $next($request);
    }
}
