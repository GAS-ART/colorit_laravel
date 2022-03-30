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
         <a href="{{ route('smm.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__current">@lang('services.polygraphy')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/smm/main.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/smm/main_small.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('services.polygraphy')</h1>
   </div>
</section>
<section class="outdor-advertising-about">
   <div class="outdor-advertising-about__container">
      <div class="outdor-advertising-about__body">
         @lang('polygraphy.about')
      </div>
   </div>
   <h3 class="outdor-advertising-about__tittle">Colorit agency</h3>
</section>
<section class="smm-to-top">
   <div class="smm-to-top__container">
      <div class="smm-to-top__tittle tittle">@lang('polygraphy.relevance.tittle')</div>
      <div class="smm-to-top__item">
         @lang('polygraphy.relevance.1')
      </div>
      <div class="smm-to-top__item">
         @lang('polygraphy.relevance.2')
      </div>
      <div class="smm-to-top__item">
         @lang('polygraphy.relevance.3')
      </div>
      <div class="smm-to-top__item">
         @lang('polygraphy.relevance.4')
      </div>
   </div>
</section>

@endsection