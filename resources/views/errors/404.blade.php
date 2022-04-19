@if(Str::contains(url()->current(), '/es'))
{{app()->setLocale('es')}}
@endif
@if(Str::contains(url()->current(), '/ru'))
{{app()->setLocale('ru')}}
@endif
@if(!Str::contains(url()->current(), ['/es','/ru']))
<script>window.location = "<?php echo Str::of(url()->current())->substrReplace('es/',22,0) ?>";</script>
{{app()->setLocale('es')}}
@endif
@extends('layout')
@section('title', __('tittles.contacts.title'))
@section('description', __('tittles.contacts.description'))
@section('ogTitle', __('tittles.contacts.ogTitle'))
@section('ogDescription', __('tittles.contacts.ogDescription'))
@section('ogUrl', __('tittles.contacts.ogUrl'))


@section('content')
<section class="page-404">
   <div class="page-404__container">
      <div class="page-404__body">
         <h1 class="page-404__tittle">404</h1>
         <div class="page-404__text">
            <p>Похоже, что такой страницы нет...</p>
         </div>
         <div class="page-404__button">
            <a href="{{ route('home.lang', ['locale' => __('main.set_lang')]) }}" class="button button-404">&#8656
               Вернуться на сайт</a>
         </div>
      </div>
   </div>
</section>
@endsection