@extends('layout')
@section('title', __('tittles.design.title'))
@section('description', __('tittles.design.description'))
@section('ogTitle', __('tittles.design.ogTitle'))
@section('ogDescription', __('tittles.design.ogDescription'))
@section('ogUrl', __('tittles.design.ogUrl'))


@section('content')
<section class="links">
   <div class="links__container">
      <div class="links__body">
         <a href="{{ route('home.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__previous">@lang('services.main_link')</a>
         <a href="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__current">@lang('services.identity')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/service/identity/identity_1820_650s.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/service/identity/identity_310_350.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('services.identity')</h1>
   </div>
</section>
<section class="outdor-advertising-about">
   <div class="outdor-advertising-about__container">
      <div class="outdor-advertising-about__body">
         @lang('design.about')
      </div>
   </div>
   <h3 class="outdor-advertising-about__tittle">Colorit agency</h3>
</section>
<section class="why-smm">
   <div class="why-smm__container">
      <div class="why-smm__body">
         <h3 class="why-smm__tittle tittle why-smm-identity">@lang('design.why.tittle')</h3>
         <ul class="why-smm__list">
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('design.why.1')</div>
               <div class="why-smm__count">01</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('design.why.2')</div>
               <div class="why-smm__count">02</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('design.why.3')</div>
               <div class="why-smm__count">03</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('design.why.4')</div>
               <div class="why-smm__count">04</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('design.why.5')</div>
               <div class="why-smm__count">05</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('design.why.6')</div>
               <div class="why-smm__count">06</div>
            </li>
         </ul>
      </div>
   </div>
</section>
<section class="outdor-advertising-products">
   <div class="outdor-advertising-products__container">
      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/design/1.jpg')}}" alt="">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('design.products.graphic_design.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('design.products.graphic_design.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('design.products.graphic_design.text_more')
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
            <h2 class="description-product__tittle"> @lang('design.products.polygraphic_design.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('design.products.polygraphic_design.text')
               </div>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/design/3_poligraphy.jpg')}}" alt="">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/design/logo.jpg')}}" alt="">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('design.products.logo.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('design.products.logo.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('design.products.logo.text_more')
                  </div>
                  <ul class="description-product__list">
                     <li class="description-product__item">@lang('design.products.logo.item')</li>
                     <li class="description-product__item">@lang('design.products.logo.item1')</li>
                     <li class="description-product__item">@lang('design.products.logo.item2')</li>
                  </ul>
                  <div class="description-product__details">
                     @lang('design.products.logo.details')
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
            <h2 class="description-product__tittle"> @lang('design.products.style.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('design.products.style.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('design.products.style.text_more')
                  </div>
                  <ul class="description-product__list">
                     <li class="description-product__item">@lang('design.products.style.item')</li>
                     <li class="description-product__item">@lang('design.products.style.item1')</li>
                     <li class="description-product__item">@lang('design.products.style.item2')</li>
                  </ul>
                  <div class="description-product__details">
                     @lang('design.products.style.details')
                  </div>
               </div>
               <button class="description-product__read-less-btn">@lang('outdorAdvertising.products.read_less')</button>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/design/2_fir_style.jpg')}}" alt="">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/design/2_web_design.jpg')}}" alt="">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('design.products.web_design.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('design.products.web_design.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('design.products.web_design.text_more')
                  </div>
               </div>
               <button class="description-product__read-less-btn">@lang('outdorAdvertising.products.read_less')</button>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

   </div>
</section>
<section class="promotion-smm">
   <div class="promotion-smm__container">
      <div class="promotion-smm__row">
         <h2 class="promotion-smm__tittle tittle">@lang('design.promotion.tittle')</h2>
         <div class="promotion-smm__text">@lang('design.promotion.text')</div>
      </div>
   </div>
</section>
<section class="smm-to-top">
   <div class="smm-to-top__container">
      <div class="smm-to-top__tittle tittle">@lang('design.top.tittle')</div>
      <div class="smm-to-top__item">
         @lang('design.top.1')
      </div>
      <div class="smm-to-top__item">
         @lang('design.top.2')
      </div>
      <div class="smm-to-top__item">
         @lang('design.top.3')
      </div>
      <div class="smm-to-top__item">
         @lang('design.top.4')
      </div>
      <div class="smm-to-top__tittle to-top__tittle tittle ">@lang('design.top.tittle_end')</div>
   </div>
</section>
<section class="smm-portfolio">
   <div class="smm-portfolio__body">
      <div class="smm-portfolio__img">
         <img src="{{asset('img/smm/portfolio.jpg')}}" alt="">
      </div>
      <div class="smm-portfolio__content">
         <div class="smm-portfolio__tittle tittle">@lang('smm.portfolio.tittle')</div>
         <a class=" smm-portfolio__link" href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}">@lang('smm.portfolio.btn')</a>
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
               <div class="black-image">
                  <img src="{{asset('img/clients/black/consulado.png')}}" alt="Our clients">
               </div>

               <div class="color-image">
                  <img src="{{asset('img/clients/color/consulado.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/moonsters.jpg')}}" alt="Our clients">
               </div>

               <div class="color-image">
                  <img src="{{asset('img/clients/color/moonsters.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/1.png')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/1.png')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/marista.png')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/marista.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/2.jpg')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/2.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/3.jpg')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/3.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/4.png')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/4.png')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/5.jpg')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/5_black.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/6.jpg')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/6_black.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/7.png')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/7.png')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/8.jpg')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/8_black.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/10.jpg')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/10.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/11.png')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/11.png')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">
               <div class="black-image">
                  <img src="{{asset('img/clients/black/12.jpg')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/12_black.jpg')}}" alt="Our clients">
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
@endsection