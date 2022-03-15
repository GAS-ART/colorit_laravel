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
         <a href="{{ route('home.lang', ['locale' => __('main.set_lang')]) }}" class="links__previous">Главная</a>
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
@endsection