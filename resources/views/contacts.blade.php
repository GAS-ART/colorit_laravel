@extends('layout')
@section('title', __('tittles.contacts.title'))
@section('description', __('tittles.contacts.description'))
@section('ogTitle', __('tittles.contacts.ogTitle'))
@section('ogDescription', __('tittles.contacts.ogDescription'))
@section('ogUrl', __('tittles.contacts.ogUrl'))


@section('content')
<section class="links">
   <div class="links__container">
      <div class="links__body">
         <a href="{{ route('home.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__previous">@lang('services.main_link')</a>
         <a href="{{ route('smm.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__current">@lang('services.contacts')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/contacts/contacts.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/contacts/contacts_small.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('services.contacts')</h1>
   </div>
</section>
<section class="help">
   <div class="help__container">
      <div class="help__row">
         <div class="help__item">
            <h3 class="help__item-tittle tittle contacts-help-tittle">@lang('form.page_form.contacts')</h3>
            <div class="help__item-text help-item-contact-text ">@lang('form.page_form.contacts_text')</div>
            <div class="help-contacts-text">
               <p><a href="mailto:colorit.bcn@gmail.com">colorit.bcn@gmail.com</a></p>
               <p><a href="tel:%2B34691820317">+34 691 820 317</a></p>
               <p><a href="https://www.facebook.com/colorit.agency" target="_blank" class="rights__meta _icon-facebook">
                  </a><a href="https://www.instagram.com/colorit.agency/" target="_blank"
                     class="rights__instagram _icon-instagram">
                  </a></p>
               <p>@lang('contacts.address_name')</p>
            </div>
         </div>
         <div class="help__item">
            <div class="help__item-form">
               <form action="#" id="pageForm" class="form @lang('main.current_lang_class')" name="outdorAdvertising">
                  @csrf
                  <input type="hidden" name="page" value="{{__(Request::url())}}">
                  <div class="contacts-form__item data popup-data">
                     <input class="data__text-field" type="text" name="name" placeholder="@lang('form.name')">
                     <p class="name-error error"></p>
                  </div>
                  <div class="contacts-form__item data popup-phone">
                     <input class="phone" type="text" name="phone" placeholder="@lang('form.phone')">
                     <p class="phone-error error"></p>
                  </div>
                  <div class="contacts-form__item data popup-email">
                     <input class="email" type="text" name="email" placeholder="@lang('form.email')">
                     <p class="email-error error"></p>
                  </div>
                  <div class="popup__button-form">
                     <button class="submit" type="submit">@lang('form.button')</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="map">
   <div class="map__container">
      <div class="map__body"><img src="{{asset('img/contacts/map_es1.jpg')}}" alt=""></div>
   </div>
</section>
@endsection