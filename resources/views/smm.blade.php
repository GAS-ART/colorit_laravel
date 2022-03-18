@extends('layout')
@section('title','Заголовок страницы')
@section('description', 'Описание страницы')
@section('ogTitle','Заголовок страницы для месенджеров')
@section('ogDescription','Описание страницы для месенджеров')
@section('ogUrl','https://colorit.com')


@section('content')
<section class="links">
   <div class="links__container">
      <div class="links__body">
         <a href="{{ route('home.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__previous">@lang('services.main_link')</a>
         <a href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__current">@lang('services.smm')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/smm/main.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/smm/main_small.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('services.smm')</h1>
   </div>
</section>
<section class="outdor-advertising-about">
   <div class="outdor-advertising-about__container">
      <div class="outdor-advertising-about__body">
         @lang('smm.about')
      </div>
   </div>
   <h3 class="outdor-advertising-about__tittle">Colorit agency</h3>
</section>
<section class="why-smm">
   <div class="why-smm__container">
      <div class="why-smm__body">
         <h3 class="why-smm__tittle tittle">@lang('smm.why.tittle')</h3>
         <ul class="why-smm__list">
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.1')</div>
               <div class="why-smm__count">01</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.2')</div>
               <div class="why-smm__count">02</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.3')</div>
               <div class="why-smm__count">03</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.4')</div>
               <div class="why-smm__count">04</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.5')</div>
               <div class="why-smm__count">05</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.6')</div>
               <div class="why-smm__count">06</div>
            </li>
         </ul>
      </div>
   </div>
</section>
<section class="smm-numbers">
   <div class="smm-numbers__container">
      <div class="smm-numbers__tittle tittle">@lang('smm.numbers.tittle')</div>
      <div class="smm-numbers__body">
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number">91%</div>
            <div class="item-smm-number__text">@lang('smm.numbers.91')</div>
         </div>
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number">2.5</div>
            <div class="item-smm-number__text">@lang('smm.numbers.25')</div>
         </div>
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number">37%</div>
            <div class="item-smm-number__text">@lang('smm.numbers.37')</div>
         </div>
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number">9</div>
            <div class="item-smm-number__text">@lang('smm.numbers.9')</div>
         </div>
      </div>
   </div>
</section>
<section class="promotion-smm">
   <div class="promotion-smm__container">
      <div class="promotion-smm__row">
         <h2 class="promotion-smm__tittle tittle">@lang('smm.promotion.tittle')</h2>
         <div class="promotion-smm__text">@lang('smm.promotion.text')</div>
      </div>
   </div>
</section>

@endsection