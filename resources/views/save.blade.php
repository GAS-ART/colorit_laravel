<nav class="header__menu menu-header">
               <ul class="menu-header__list">
                  <li class="menu-header__item"><a class="menu-header__item-link" href="#">@lang('header.cases')</a></li>
                  <li class="menu-header__item"><a class="menu-header__item-link" href="#">@lang('header.contacts')</a></li>
                  <li class="menu-header__item"><a class="menu-header__item-link" href="#">@lang('header.presentation')</a></li>
               </ul>
            </nav>
            <div class="header__language language-btn">
               <div class="language-btn__select">
               <a class="language-btn__link" href="{{ route('locale', __('main.set_lang')) }}">
                  <div class="language-btn__text">@lang('main.current_lang')</div>
                  <div class="language-btn__icon @lang('main.current_lang_class')"></div>
</a>
               </div>
               <div class="language-btn__select">
               <a class="language-btn__link" href="{{ LaravelLocalization::getLocalizedURL(__('main.change_lang_link')) }}"> 
                  <div class="language-btn__text">@lang('main.another_lang')</div>
                  <div class="language-btn__icon @lang('main.change_lang_class')"></div>
                  </a>


/*Route::get('/{lang}', function ($lang) {
   if($lang == 'es' || $lang == 'ru'){
      App::setlocale($lang);
      return view('home'); 
   } elseif ($lang = 'home') {
      return view('home');
   }
   else {
      return abort('404');
   }
})->name('index');


Route::get('/{lang}/home', function ($lang) {
   if($lang == 'es' || $lang == 'ru'){
      App::setlocale($lang);
      return view('home'); 
   }
    else {
   return abort('404');
   }
})->name('home');*/