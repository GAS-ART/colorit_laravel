@section('header')
<header class="header">
   <div class="header__wraper">
      <div class="header__container">
         <div class="header__body">
            <div class="header__logo">
               <a href="{{ route('index.lang', ['locale' => __('main.set_lang')]) }}"><img
                     src="{{asset('img/logo1.png')}}" alt="colorit logo" title="colorit logo"></a>
            </div>
            <nav class="header__menu menu-header">
               <ul class="menu-header__list">
                  <li class="menu-header__item"><a class="menu-header__item-link send-analytics"
                        data-event-name="Загрузка презентации @lang('main.set_lang') (header)" data-first-click="true"
                        href="{{ route('download.lang', ['locale' => __('main.set_lang')]) }}">@lang('header.presentation')</a>
                  </li>
                  <li class="menu-header__item"><a class="menu-header__item-link"
                        href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}">@lang('burger.portfolio')</a>
                  </li>
                  <li class="menu-header__item"><a class="menu-header__item-link"
                        href="{{ route('contacts.lang', ['locale' => __('main.set_lang')]) }}">@lang('header.contacts')</a>
                  </li>
               </ul>
            </nav>
            <div class="header__language language-btn">
               <div class="language-btn__select">
                  <a class="language-btn__link send-analytics" data-event-name="Выбран язык @lang('main.current_lang')"
                     data-first-click="true" href="{{ route('locale', __('main.set_lang')) }}">
                     <div class="language-btn__text">@lang('main.current_lang')</div>
                     <div class="language-btn__icon @lang('main.current_lang_class')"></div>
                  </a>
               </div>
               <div class="language-btn__select">
                  <a class="language-btn__link send-analytics" data-event-name="Выбран язык @lang('main.another_lang')"
                     data-first-click="true" href="{{ route('locale', __('main.change_lang_link')) }}">
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
                  <li class="menu-burger__item"><a href="{{ route('about.lang', ['locale' => __('main.set_lang')]) }}"
                        class="menu-burger__item-link">@lang('burger.about_us')</a></li>
                  <!--<li class="menu-burger__item"><a href="#" class="menu-burger__item-link">@lang('burger.recall')</a> 
                  </li> -->
                  <li class="menu-burger__item"><a href="#"
                        class="menu-burger__item-link burger-service-menu @lang('main.current_lang_class')">@lang('burger.services')<span></span></a>
                     <ul class="burger-service-menu__list">
                        <li class="burger-service-menu__item"><a
                              href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}"
                              class="burger-service-menu__item-link">@lang('services.outdoor_advertising')</a></li>
                        <li class="burger-service-menu__item"><a
                              href="{{ route('polygraphy.lang', ['locale' => __('main.set_lang')]) }}"
                              class="burger-service-menu__item-link">@lang('services.polygraphy')</a></li>
                        <li class="burger-service-menu__item"><a
                              href="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}"
                              class="burger-service-menu__item-link">@lang('services.identity')</a></li>
                        <li class="burger-service-menu__item"><a
                              href="{{ route('smm.lang', ['locale' => __('main.set_lang')]) }}"
                              class="burger-service-menu__item-link">@lang('services.smm')</a></li>
                        <li class="burger-service-menu__item"><a
                              href="{{ route('webDevelopment.lang', ['locale' => __('main.set_lang')]) }}"
                              class="burger-service-menu__item-link">@lang('services.website_development')</a></li>
                        <li class="burger-service-menu__item"><a
                              href="{{ route('uvPrinting.lang', ['locale' => __('main.set_lang')]) }}"
                              class="burger-service-menu__item-link">@lang('services.uv_printing')</a></li>
                        <li class="burger-service-menu__item"><a
                              href="{{ route('printing.lang', ['locale' => __('main.set_lang')]) }}"
                              class="burger-service-menu__item-link">@lang('services.printing_on_clothes')</a></li>
                     </ul>
                  </li>
                  <li class="menu-burger__item"><a
                        href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}"
                        class="menu-burger__item-link">@lang('burger.portfolio')</a>
                  </li>
                  <li class="menu-burger__item"><a
                        href="{{ route('contacts.lang', ['locale' => __('main.set_lang')]) }}"
                        class="menu-burger__item-link">@lang('header.contacts')</a>
                  </li>
               </ul>
            </nav>
            <div class="burger__contacts contacts-burger">
               <div class="contacts-burger__tittle">@lang('contacts.contacts')</div>
               <div class="contacts-burger__contacts">
                  <div class="contacts-burger__address">
                     <p>@lang('contacts.address')</p>
                     <p>@lang('contacts.address_name')</p>
                  </div>
                  <div class="contacts-burger__phone">
                     <p>@lang('contacts.phone')</p>
                     <a class="send-analytics" data-event-name="Клик на телефон (borger)" data-first-click="true"
                        href="tel:%2B34691820317">+34 691 820 317</a>
                  </div>
                  <div class="contacts-burger__email">
                     <p>E-mail</p>
                     <a class="send-analytics" data-event-name="Клик на email (borger)" data-first-click="true"
                        href="mailto:colorit.bcn@gmail.com">colorit.bcn@gmail.com</a>
                  </div>
                  <div class="contacts-burger__social social-burger">
                     <a href="https://www.facebook.com/colorit.agency" data-event-name="Переход в facebook (borger)"
                        data-first-click="true" target="_blank"
                        class="social-burger__meta _icon-facebook send-analytics">
                     </a>
                     <a href="https://www.instagram.com/colorit.agency/" data-event-name="Переход в instagram (borger)"
                        data-first-click="true" target="_blank"
                        class="social-burger__instagram _icon-instagram send-analytics">
                     </a>
                  </div>
               </div>
            </div>
            <div class="burger__presentation">
               <a class="send-analytics" data-event-name="Загрузка презентации @lang('main.set_lang') (borger)"
                  data-first-click="true"
                  href="{{ route('download.lang', ['locale' => __('main.set_lang')]) }}">@lang('contacts.presentation')</a>
            </div>
         </div>
      </div>
   </div>
</header>