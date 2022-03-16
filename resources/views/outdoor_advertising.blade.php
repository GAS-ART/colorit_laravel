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
            class="links__current">@lang('services.outdoor_advertising')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/outdoor_advertising/main.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/outdoor_advertising/main_small.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('services.outdoor_advertising')</h1>
   </div>
</section>
<section class="outdor-advertising-about">
   <div class="outdor-advertising-about__container">
      <div class="outdor-advertising-about__body">
         @lang('outdorAdvertising.outdor_advertising_about')
      </div>
   </div>
   <h3 class="outdor-advertising-about__tittle">Colorit agency</h3>
</section>
<section class="outdor-advertising">
   <div class="outdor-advertising__container">
      <h2 class="outdor-advertising__tittle">@lang('services.outdoor_advertising')</h2>
      <div class="outdor-advertising__row">
         <div class="outdor-advertising__item description-outdor-advertising">
            <div class="description-outdor-advertising__tittle">
               @lang('outdorAdvertising.outdor_advertising.outdoor_signage_tittle')
            </div>
            <div class="description-outdor-advertising__text">
               @lang('outdorAdvertising.outdor_advertising.outdoor_signage_text')
            </div>
         </div>
         <div class="outdor-advertising__item description-outdor-advertising">
            <div class="description-outdor-advertising__tittle">
               Сроки изготовления
            </div>
            <div class="description-outdor-advertising__text">
               В зависимости от сложности работ сроки могут составлять 5 – 25 дней
            </div>
         </div>
         <div class="outdor-advertising__item description-outdor-advertising">
            <div class="description-outdor-advertising__tittle">
               Используемые материалы
            </div>
            <div class="description-outdor-advertising__text">
               Алюминий (композит), метакрилат, пвх, дерево, винил.
            </div>
         </div>
      </div>
   </div>
</section>
@endsection