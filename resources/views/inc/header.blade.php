@section('header')
<header class="header">
   <div class="header__wraper">
      <div class="header__container">
         <div class="header__body">
            <div class="header__logo">
               <a href=""><img src="{{asset('img/logo1.png')}}" alt="colorit logo" title="colorit logo"></a>
            </div>
            <nav class="header__menu menu-header">
               <ul class="menu-header__list">
                  <li class="menu-header__item"><a class="menu-header__item-link" href="#">@lang('header.cases')</a></li>
                  <li class="menu-header__item"><a class="menu-header__item-link" href="#">@lang('header.contacts')</a></li>
                  <li class="menu-header__item"><a class="menu-header__item-link" href="#">@lang('header.presentation')</a></li>
               </ul>
            </nav>
            <div class="header__language language-btn">
               <div class="language-btn__select">
               <a class="language-btn__link" href="{{ LaravelLocalization::getLocalizedURL(__('main.set_lang')) }}">
                  <div class="language-btn__text">@lang('main.current_lang')</div>
                  <div class="language-btn__icon @lang('main.current_lang_class')"></div>
</a>
               </div>
               <div class="language-btn__select">
               <a class="language-btn__link" href="{{ LaravelLocalization::getLocalizedURL(__('main.change_lang_link')) }}"> 
                  <div class="language-btn__text">@lang('main.another_lang')</div>
                  <div class="language-btn__icon @lang('main.change_lang_class')"></div>
                  </a>
               </div>
            </div>
            <a href="#" class="header__request popup-btn">@lang('header.lead')</a>
            <div class="header__icon-menu"><span></span></div>
         </div>
      </div>
      <div class="header__burger burger">
         <div class="burger__body">
            <nav class="burger__menu menu-burger">
               <ul class="menu-burger__list">
                  <li class="menu-burger__item"><a href="{{LaravelLocalization::getLocalizedURL(__('main.set_lang'), 'home')}}" class="menu-burger__item-link">о нас</a></li>
                  <li class="menu-burger__item"><a href="#" class="menu-burger__item-link">отзывы</a></li>
                  <li class="menu-burger__item"><a href="#" class="menu-burger__item-link burger-service-menu">услуги<span></span></a>
                  <ul class="burger-service-menu__list">
                           <li class="burger-service-menu__item"><a href="" class="burger-service-menu__item-link">Наружная реклама</a></li>
                           <li class="burger-service-menu__item"><a href="" class="burger-service-menu__item-link">Полиграфия</a></li>
                           <li class="burger-service-menu__item"><a href="" class="burger-service-menu__item-link">Айдентика</a></li>
                           <li class="burger-service-menu__item"><a href="" class="burger-service-menu__item-link">СММ</a></li>
                           <li class="burger-service-menu__item"><a href="" class="burger-service-menu__item-link">Создание сайтов</a></li>
                           <li class="burger-service-menu__item"><a href="" class="burger-service-menu__item-link">УФ печать</a></li>
                           <li class="burger-service-menu__item"><a href="" class="burger-service-menu__item-link">Печать на одежде</a></li>
                        </ul>
               </li>
                  <li class="menu-burger__item"><a href="#" class="menu-burger__item-link">портфолио</a></li>
               </ul>
            </nav>
            <div class="burger__contacts contacts-burger">
               <div class="contacts-burger__tittle">Контакты</div>
               <div class="contacts-burger__contacts">
                  <div class="contacts-burger__address">
                     <p>Адрес</p>
                     <p>Барселона, Испания</p>
                  </div>
                  <div class="contacts-burger__phone">
                     <p>Телефон</p>
                     <a href="tel:%2B34691820317">+34 691 820 317</a>
                  </div>
                  <div class="contacts-burger__email">
                     <p>E-mail</p>
                     <a href="mailto:colorit.bcn@gmail.com">colorit.bcn@gmail.com</a>
                  </div>
                  <div class="contacts-burger__social social-burger">
                     <a href="#" class="social-burger__meta _icon-facebook">
                     </a>
                     <a href="#" class="social-burger__instagram _icon-instagram">
                     </a>
                  </div>
               </div>
            </div>
            <div class="burger__presentation">
               <a href="{{route('download')}}">Скачать презентацию</a>
            </div>
         </div>
      </div>
   </div>
</header>