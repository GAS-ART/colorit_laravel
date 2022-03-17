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
      <h2 class="outdor-advertising__tittle tittle">@lang('services.outdoor_advertising')</h2>
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
               @lang('outdorAdvertising.outdor_advertising.production_time_tittle')
            </div>
            <div class="description-outdor-advertising__text">
               @lang('outdorAdvertising.outdor_advertising.production_time_text')
            </div>
         </div>
         <div class="outdor-advertising__item description-outdor-advertising">
            <div class="description-outdor-advertising__tittle">
               @lang('outdorAdvertising.outdor_advertising.materials_used_tittle')
            </div>
            <div class="description-outdor-advertising__text">
               @lang('outdorAdvertising.outdor_advertising.materials_used_text')
            </div>
         </div>
      </div>
   </div>
</section>
<section class="outdor-advertising-products">
   <div class="outdor-advertising-products__container">
      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/outdoor_advertising/letters.jpg')}}" alt="">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('outdorAdvertising.products.letters.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('outdorAdvertising.products.letters.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('outdorAdvertising.products.letters.text_more')
                  </div>
                  <div class="description-product__type">@lang('outdorAdvertising.products.types')</div>
                  <ul class="description-product__list">
                     <li class="description-product__item">@lang('outdorAdvertising.products.letters.item')</li>
                     <li class="description-product__item">@lang('outdorAdvertising.products.letters.item1')</li>
                     <li class="description-product__item">@lang('outdorAdvertising.products.letters.item2')</li>
                     <li class="description-product__item">@lang('outdorAdvertising.products.letters.item3')</li>
                  </ul>
                  <div class="description-product__details">
                     @lang('outdorAdvertising.products.letters.details')
                  </div>
               </div>
               <button class="description-product__read-less-btn">@lang('outdorAdvertising.products.read_less')</button>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle"> @lang('outdorAdvertising.products.neon.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('outdorAdvertising.products.neon.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('outdorAdvertising.products.neon.text_more')
                  </div>
                  <div class="description-product__details">
                     @lang('outdorAdvertising.products.neon.details')
                  </div>
               </div>
               <button class="description-product__read-less-btn">@lang('outdorAdvertising.products.read_less')</button>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/outdoor_advertising/neon_signs.jpg')}}" alt="">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/outdoor_advertising/led_screen.jpg')}}" alt="">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('outdorAdvertising.products.led.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('outdorAdvertising.products.led.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('outdorAdvertising.products.led.text_more')
                  </div>
                  <div class="description-product__details">
                     @lang('outdorAdvertising.products.led.details')
                  </div>
               </div>
               <button class="description-product__read-less-btn">@lang('outdorAdvertising.products.read_less')</button>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle"> @lang('outdorAdvertising.products.lightboxes.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('outdorAdvertising.products.lightboxes.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('outdorAdvertising.products.lightboxes.text_more')
                  </div>
                  <div class="description-product__type">@lang('outdorAdvertising.products.types')</div>
                  <ul class="description-product__list">
                     <li class="description-product__item">@lang('outdorAdvertising.products.lightboxes.item')</li>
                     <li class="description-product__item">@lang('outdorAdvertising.products.lightboxes.item1')</li>
                     <li class="description-product__item">@lang('outdorAdvertising.products.lightboxes.item2')</li>
                     <li class="description-product__item">@lang('outdorAdvertising.products.lightboxes.item3')</li>
                     <li class="description-product__item">@lang('outdorAdvertising.products.lightboxes.item4')</li>
                     <li class="description-product__item">@lang('outdorAdvertising.products.lightboxes.item5')</li>
                  </ul>
                  <div class="description-product__details">
                     @lang('outdorAdvertising.products.lightboxes.details')
                  </div>
               </div>
               <button class="description-product__read-less-btn">@lang('outdorAdvertising.products.read_less')</button>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/outdoor_advertising/lightboxes.jpg')}}" alt="">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/outdoor_advertising/oracal.jpg')}}" alt="">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('outdorAdvertising.products.oracal.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('outdorAdvertising.products.oracal.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('outdorAdvertising.products.oracal.text_more')
                  </div>
                  <div class="description-product__details">
                     @lang('outdorAdvertising.products.oracal.details')
                  </div>
               </div>
               <button class="description-product__read-less-btn">@lang('outdorAdvertising.products.read_less')</button>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle"> @lang('outdorAdvertising.products.baner.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('outdorAdvertising.products.baner.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('outdorAdvertising.products.baner.text_more')
                  </div>
                  <div class="description-product__details">
                     @lang('outdorAdvertising.products.baner.details')
                  </div>
               </div>
               <button class="description-product__read-less-btn">@lang('outdorAdvertising.products.read_less')</button>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/outdoor_advertising/baner.jpg')}}" alt="">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>


   </div>
</section>
@endsection