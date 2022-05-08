@extends('layout')
@section('title', __('tittles.home.title'))
@section('description', __('tittles.home.description'))
@section('ogTitle', __('tittles.home.ogTitle'))
@section('ogDescription', __('tittles.home.ogDescription'))
@section('ogUrl', __('tittles.home.ogUrl'))


@section('content')
   <section class="service-menu">
      <div class="service-menu__shadow-text">@lang('services.outdoor_advertising')</div>
      <div class="service-menu__container">
         <div class="service-menu__body">
            <div class="service-menu__menu menu-service">
               <nav class="menu-service__list">
                  <ul class="menu-service__items">
                     <li class="menu-service__item"><a href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}" class="menu-service__item-link"
                           data-img="outdoorAdvertising" data-link="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}">@lang('services.outdoor_advertising')</a></li>
                     <li class="menu-service__item"><a href="{{ route('polygraphy.lang', ['locale' => __('main.set_lang')]) }}" class="menu-service__item-link" data-img="polygraphy"
                           data-link="{{ route('polygraphy.lang', ['locale' => __('main.set_lang')]) }}">@lang('services.polygraphy')</a></li>
                     <li class="menu-service__item"><a href="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}" class="menu-service__item-link" data-img="identity"
                           data-link="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}">@lang('services.identity')</a></li>
                     <li class="menu-service__item"><a href="{{ route('smm.lang', ['locale' => __('main.set_lang')]) }}" class="menu-service__item-link" data-img="smm"
                           data-link="{{ route('smm.lang', ['locale' => __('main.set_lang')]) }}">@lang('services.smm')</a>
                     </li>
                     <li class="menu-service__item"><a href="{{ route('webDevelopment.lang', ['locale' => __('main.set_lang')]) }}" class="menu-service__item-link"
                           data-img="websiteDevelopment" data-link="{{ route('webDevelopment.lang', ['locale' => __('main.set_lang')]) }}">@lang('services.website_development')</a></li>
                     <li class="menu-service__item"><a href="{{ route('uvPrinting.lang', ['locale' => __('main.set_lang')]) }}" class="menu-service__item-link" data-img="uvPrinting"
                           data-link="{{ route('uvPrinting.lang', ['locale' => __('main.set_lang')]) }}">@lang('services.uv_printing')</a></li>
                     <li class="menu-service__item"><a href="{{ route('printing.lang', ['locale' => __('main.set_lang')]) }}" class="menu-service__item-link"
                           data-img="printingOnClothes" data-link="{{ route('printing.lang', ['locale' => __('main.set_lang')]) }}">@lang('services.printing_on_clothes')</a></li>
                  </ul>
               </nav>
               <div class="service-menu__social">
                  <a href="https://www.facebook.com/colorit.agency" target="_blank" class="social-burger__meta _icon-facebook">
                  </a>
                  <a href="https://www.instagram.com/colorit.agency/#" target="_blank" class="social-burger__instagram _icon-instagram">
                  </a>
               </div>
            </div>

            <div class="service-menu__images">
               <div class="service-menu__shadow-text-mobile">@lang('services.outdoor_advertising')</div>
               <img class="service-menu__img active" src="{{asset('img/header/Outdoor_advertising.jpg')}}"
                  alt="@lang('altTag.home.main-baner.outdoorAdvertasing')" data-img="outdoorAdvertising">
               <img class="service-menu__img" src="{{asset('img/header/polygraphy.jpg')}}" alt="@lang('altTag.home.main-baner.polygraphy')"
                  data-img="polygraphy">
               <img class="service-menu__img" src="{{asset('img/service/identity/identity_1155_470s.jpg')}}" alt="@lang('altTag.home.main-baner.identity')"
                  data-img="identity">
               <img class="service-menu__img" src="{{asset('img/header/smm.jpg')}}" alt="@lang('altTag.home.main-baner.smm')" data-img="smm">
               <img class="service-menu__img" src="{{asset('img/service/site/site_1155_470s.jpg')}}"
                  alt="@lang('altTag.home.main-baner.site')" data-img="websiteDevelopment">
               <img class="service-menu__img" src="{{asset('img/service/uv/uv_1155_470sq.jpg')}}" alt="@lang('altTag.home.main-baner.uv-printing')"
                  data-img="uvPrinting">
               <img class="service-menu__img" src="{{asset('img/service/print/print_1155_470sq.jpg')}}"
                  alt="@lang('altTag.home.main-baner.printing-on-clothes')" data-img="printingOnClothes">
               <a href="#" class="service-menu__img-link" >@lang('home.more')</a>
            </div>
         </div>
      </div>
   </section>
   <section class="baner">
      <span class="baner__start">@lang('home.ticker')</span>
   </section>
   <section class="about">
      <div class="about__container">
         <div class="about__body">
            <div class="about__about">@lang('home.who_we_are')</div>
            <div class="about__text">
               <p>@lang('home.who_we_are_text_1')</p>
               <p>@lang('home.who_we_are_text_2')</p>
            </div>
         </div>
      </div>
   </section>
   <section class="service">
      <div class="service__container">
         <div class="service__tittle tittle">@lang('services.our_services')</div>
         <div class="service__body">
            <div class="service__row">
               <div class="service__vertical vertical-content">
                  <div class="vertical-content__img">
                     <a href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}"><img src="{{asset('img/service/Outdoor_advertising.jpg')}}"
                           alt="@lang('altTag.home.services.outdoorAdvertasing')"></a>
                  </div>
                  <div class="vertical-content__link">
                     <a href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}" class="">@lang('services.outdoor_advertising')</a>
                  </div>
               </div>
               <div class="service__horizontal horizontal-content">
                  <div class="horizontal-content__img">
                     <a href="{{ route('polygraphy.lang', ['locale' => __('main.set_lang')]) }}"><img src="{{asset('img/service/polygraphy.jpg')}}" alt="@lang('altTag.home.services.polygraphy')"></a>
                  </div>
                  <div class="horizontal-content__link">
                     <div class="horizontal-content__link"><a href="{{ route('polygraphy.lang', ['locale' => __('main.set_lang')]) }}" class="">@lang('services.polygraphy')</a></div>
                  </div>
               </div>
            </div>

            <div class="service__row">
               <div class="service__horizontal horizontal-content">
                  <div class="horizontal-content__img">
                     <a href="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}"><img src="{{asset('img/service/identity.jpg')}}" alt="@lang('altTag.home.services.identity')"></a>
                  </div>
                  <div class="horizontal-content__link">
                     <a href="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}" class="">@lang('services.identity')</a>
                  </div>
               </div>
               <div class="service__vertical vertical-content">
                  <div class="vertical-content__img">
                     <a href="{{ route('smm.lang', ['locale' => __('main.set_lang')]) }}"><img src="{{asset('img/service/smm.jpg')}}" alt="@lang('altTag.home.services.smm')"></a>
                  </div>
                  <div class="vertical-content__link">
                     <a href="{{ route('smm.lang', ['locale' => __('main.set_lang')]) }}" class="">@lang('services.smm')</a>
                  </div>
               </div>
            </div>

            <div class="service__row">
               <div class="service__vertical vertical-content">
                  <div class="vertical-content__img">
                     <a href="{{ route('webDevelopment.lang', ['locale' => __('main.set_lang')]) }}"><img src="{{asset('img/service/site/site_310_350.jpg')}}"
                           alt="@lang('altTag.home.services.site')"></a>
                  </div>
                  <div class="vertical-content__link">
                     <a href="{{ route('webDevelopment.lang', ['locale' => __('main.set_lang')]) }}" class="">@lang('services.website_development')</a>
                  </div>
               </div>
               <div class="service__horizontal horizontal-content">
                  <div class="horizontal-content__img">
                     <a href="{{ route('uvPrinting.lang', ['locale' => __('main.set_lang')]) }}"><img src="{{asset('img/service/uv/uv_1155_470sq.jpg')}}" alt="@lang('altTag.home.services.uv-printing')"></a>
                  </div>
                  <div class="horizontal-content__link">
                     <a href="{{ route('uvPrinting.lang', ['locale' => __('main.set_lang')]) }}" class="">@lang('services.uv_printing')</a>
                  </div>
               </div>
            </div>

            <div class="service__row">
               <div class="service__horizontal horizontal-content">
                  <div class="horizontal-content__img">
                     <a href="{{ route('printing.lang', ['locale' => __('main.set_lang')]) }}"><img src="{{asset('img/service/print/print_1155_470sq.jpg')}}"
                           alt="@lang('altTag.home.services.printing-on-clothes')"></a>
                  </div>
                  <div class="horizontal-content__link">
                     <a href="{{ route('printing.lang', ['locale' => __('main.set_lang')]) }}" class="">@lang('services.printing_on_clothes')</a>
                  </div>
               </div>
               <div class="service__vertical vertical-content">
                  <div class="vertical-content__img">
                     <a href="#"><img src="" alt=""></a>
                  </div>
                  <div class="vertical-content__link">
                     <a href="#" class=""></a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
   <section class="cases">
      <div class="cases__container">
         <div class="cases__titile tittle">@lang('home.our_cases')</div>
      </div>
      <div class="cases__images">
         <div class="cases__row">
            <div class="cases__body">
               <picture>
                  <source srcset="{{asset('img/cases/keys12.jpg')}}" sizes="(max-width: 767.98px)">
                  <img src="{{asset('img/cases/keys12.jpg')}}" alt="@lang('altTag.home.cases.alianca')">
               </picture>
               <div class="cases__info info-cases">
                  <div class="info-cases__body">
                     <div data-id="alianca" class="info-cases__tittle">@lang('home.cases.alianca')</div>
                  </div>
               </div>
            </div>
            <div class="cases__body">
               <picture>
                  <source srcset="{{asset('img/cases/keys2.jpg')}}" sizes="(max-width: 767.98px)">
                  <img src="{{asset('img/cases/keys2.jpg')}}" alt="@lang('altTag.home.cases.costa-maresme')">
               </picture>
               <div class="cases__info info-cases">
                  <div class="info-cases__body">
                     <div data-id="costaMaresme" class="info-cases__tittle">@lang('home.cases.costa_maresme')</div>
                  </div>
               </div>
            </div>
         </div>
         <div class="cases__row">
            <div class="cases__body">
               <picture>
                  <source srcset="{{asset('img/cases/keys3.jpg')}}" sizes="(max-width: 767.98px)">
                  <img src="{{asset('img/cases/keys3.jpg')}}" alt="@lang('altTag.home.cases.moonsters-jump')">
               </picture>
               <div class="cases__info info-cases">
                  <div class="info-cases__body">
                     <div data-id="moonstersJump" class="info-cases__tittle">@lang('home.cases.moonsters_jump')</div>
                  </div>
               </div>
            </div>
            <div class="cases__body">
               <picture>
                  <source srcset="{{asset('img/cases/keys4.png')}}" sizes="(max-width: 767.98px)">
                  <img src="{{asset('img/cases/keys4.png')}}" alt="@lang('altTag.home.cases.floaretelie')">
               </picture>
               <div class="cases__info info-cases">
                  <div class="info-cases__body">
                     <div data-id="floaretelie" class="info-cases__tittle">@lang('home.cases.floaretelie')</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   @include('inc.slider')
   <section class="experience">
      <div class="experience__container">
         <div class="experience__body">
            <div class="experience__text">
               <p>@lang('home.experience')</p>

            </div>
            <div class="experience__callback callback">
               <div class="callback__text">
                  <p>@lang('home.experience_lead')</p>
               </div>
               <div class="callback__btn popup-btn"><button class="popup-btn" type="button">@lang('home.experience_lead_btn')</button></div>
            </div>
         </div>

      </div>
   </section>
@endsection