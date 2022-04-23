@extends('layout')
@section('title', __('tittles.web.title'))
@section('description', __('tittles.web.description'))
@section('ogTitle', __('tittles.web.ogTitle'))
@section('ogDescription', __('tittles.web.ogDescription'))
@section('ogUrl', __('tittles.web.ogUrl'))


@section('content')
<section class="links">
   <div class="links__container">
      <div class="links__body">
         <a href="{{ route('home.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__previous">@lang('services.main_link')</a>
         <a href="{{ route('webDevelopment.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__current">@lang('services.website_development')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/service/site/site_1820_650s.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/service/site/site_310_350.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('services.website_development')</h1>
   </div>
</section>
<section class="outdor-advertising-about">
   <div class="outdor-advertising-about__container">
      <div class="outdor-advertising-about__body">
         @lang('webDevelopment.about')
      </div>
   </div>
   <h3 class="outdor-advertising-about__tittle">Colorit agency</h3>
</section>
<section class="smm-price">
   <div class="smm-price__container">
      <div class="smm-price__tittle tittle web-price-tittle">@lang('smm.price.tittle')</div>
      <div class="smm-price__body price-body-website">

         <div class="smm-price__item item-price-smm item-price-web">
            <div class="item-price-smm__tittle price-details">@lang('webDevelopment.price.landing.tittle')</div>
            <div class="price-details-text">
               <div class="price-details-text__item">
                  @lang('webDevelopment.price.landing.details')
               </div>
               <div class="price-details-text__item">
                  @lang('webDevelopment.price.landing.details_1')
               </div>
            </div>
            <ul class="item-price-smm__list">
               <li class="item-price-smm__item">@lang('webDevelopment.price.landing.1')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.landing.2')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.landing.3')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.landing.4')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.landing.5')</li>
            </ul>
            <button class="item-price-smm__price popup-btn">@lang('smm.price.price')</buttontn>
         </div>

         <div class="smm-price__item item-price-smm item-price-web @lang('main.current_lang_class')">
            <div class="item-price-smm__tittle price-details">@lang('webDevelopment.price.card.tittle')</div>
            <div class="price-details-text">
               <div class="price-details-text__item">
                  @lang('webDevelopment.price.card.details')
               </div>
               <div class="price-details-text__item">
                  @lang('webDevelopment.price.card.details_1')
               </div>
            </div>
            <ul class="item-price-smm__list">
               <li class="item-price-smm__item">@lang('webDevelopment.price.card.1')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.card.2')
               </li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.card.3')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.card.4')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.card.5')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.card.6')</li>
            </ul>
            <button class="item-price-smm__price popup-btn">@lang('smm.price.price')</buttontn>
         </div>

         <div class="smm-price__item item-price-smm item-price-web @lang('main.current_lang_class')">
            <div class="item-price-smm__tittle price-details">
               @lang('webDevelopment.price.сorporate.tittle')</div>
            <div class="price-details-text">
               <div class="price-details-text__item">
                  @lang('webDevelopment.price.сorporate.details')
               </div>
               <div class="price-details-text__item">
                  @lang('webDevelopment.price.сorporate.details_1')
               </div>
            </div>
            <ul class="item-price-smm__list">
               <li class="item-price-smm__item">@lang('webDevelopment.price.сorporate.1')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.сorporate.2')
               </li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.сorporate.3')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.сorporate.4')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.сorporate.5')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.сorporate.6')</li>
            </ul>
            <button class="item-price-smm__price popup-btn">@lang('smm.price.price')</buttontn>
         </div>

         <div class="smm-price__item item-price-smm item-price-web">
            <div class="item-price-smm__tittle price-details">@lang('webDevelopment.price.shop.tittle')</div>
            <div class="price-details-text">
               <div class="price-details-text__item">
                  @lang('webDevelopment.price.shop.details')
               </div>
               <div class="price-details-text__item">
                  @lang('webDevelopment.price.shop.details_1')
               </div>
            </div>
            <ul class="item-price-smm__list">
               <li class="item-price-smm__item">@lang('webDevelopment.price.shop.1')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.shop.2')
               </li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.shop.3')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.shop.4')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.shop.5')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.shop.6')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.shop.7')</li>
               <li class="item-price-smm__item">@lang('webDevelopment.price.shop.8')</li>
            </ul>
            <button class="item-price-smm__price popup-btn">@lang('smm.price.price')</buttontn>
         </div>

      </div>
   </div>
</section>
<section class="why-smm">
   <div class="why-smm__container">
      <div class="why-smm__body">
         <h3 class="why-smm__tittle tittle why-web-tittle">@lang('webDevelopment.why.tittle')</h3>
         <ul class="why-smm__list">
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('webDevelopment.why.1')</div>
               <div class="why-smm__count">01</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('webDevelopment.why.2')</div>
               <div class="why-smm__count">02</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('webDevelopment.why.3')</div>
               <div class="why-smm__count">03</div>
            </li>
         </ul>
      </div>
   </div>
</section>
<section class="smm-numbers">
   <div class="smm-numbers__container">
      <div class="smm-numbers__tittle tittle">@lang('webDevelopment.numbers.tittle')</div>
      <div class="smm-numbers__body">
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number numder-web">@lang('webDevelopment.numbers.ads.tittle')</div>
            <div class="item-smm-number__text">@lang('webDevelopment.numbers.ads.text')</div>
         </div>
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number numder-web">@lang('webDevelopment.numbers.seo.tittle')</div>
            <div class="item-smm-number__text">@lang('webDevelopment.numbers.seo.text')</div>
         </div>
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number numder-web">@lang('webDevelopment.numbers.bot.tittle')</div>
            <div class="item-smm-number__text">@lang('webDevelopment.numbers.bot.text')</div>
         </div>
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number numder-web">@lang('webDevelopment.numbers.support.tittle')</div>
            <div class="item-smm-number__text">@lang('webDevelopment.numbers.support.text')</div>
         </div>
      </div>
   </div>
</section>
<section class="slider">
   <div class="slider__container">
      <div class="swiper">
         <!-- Additional required wrapper -->
         <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/consulado.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">


               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/moonsters.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/1.png')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/marista.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/2.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/3.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/4.png')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/5_black.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/6_black.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/7.png')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/8_black.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/10.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/11.png')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/12_black.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
         </div>
         <!--pagination -->
         <div class="swiper-pagination"></div>

         <!--navigation buttons -->
         <div class="swiper-button-prev"></div>
         <div class="swiper-button-next"></div>
      </div>
   </div>
</section>
<section class="smm-portfolio">
   <div class="smm-portfolio__body">
      <div class="smm-portfolio__img">
         <img src="{{asset('img/smm/portfolio.jpg')}}" alt="">
      </div>
      <div class="smm-portfolio__content">
         <div class="smm-portfolio__tittle tittle">@lang('smm.portfolio.tittle')</div>
         <a class=" smm-portfolio__link"
            href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}">@lang('smm.portfolio.btn')</a>
      </div>
   </div>
</section>
@endsection