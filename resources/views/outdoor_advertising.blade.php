@extends('layout')
@section('title', __('tittles.outdorAdvertising.title'))
@section('description', __('tittles.outdorAdvertising.description'))
@section('ogTitle', __('tittles.outdorAdvertising.ogTitle'))
@section('ogDescription', __('tittles.outdorAdvertising.ogDescription'))
@section('ogUrl', __('tittles.outdorAdvertising.ogUrl'))


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
<section class="outdor-advertising-portfolio">
   <img class="outdor-advertising-portfolio__desktop" src="{{asset('img/outdoor_advertising/cases.jpg')}}" alt="">
   <img class="outdor-advertising-portfolio__mobile" src="{{asset('img/outdoor_advertising/cases_small.jpg')}}" alt="">
   <div class="outdor-advertising-portfolio__body">
      <div class="outdor-advertising-portfolio__tittle">@lang('outdorAdvertising.portfolio.tittle')</div>
      <a href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}" class="outdor-advertising-portfolio__btn">@lang('outdorAdvertising.portfolio.btn')</a>
   </div>
</section>
<section class="outdor-advertising-advantages">
   <div class="outdor-advertising-advantages__container">
      <h3 class="outdor-advertising-advantages__tittle tittle">@lang('outdorAdvertising.advantages.tittle')</h3>
      <div class="outdor-advertising-advantages__body ">
         <div class="outdor-advertising-advantages__item outdor-advertising-advantages-item">
            <div class="outdor-advertising-advantages-item__tittle">@lang('outdorAdvertising.advantages.terms_tittle')
            </div>
            <div class="outdor-advertising-advantages-item__text">@lang('outdorAdvertising.advantages.terms_text')</div>
         </div>
         <div class="outdor-advertising-advantages__item outdor-advertising-advantages-item">
            <div class="outdor-advertising-advantages-item__tittle">
               @lang('outdorAdvertising.advantages.convenient_tittle')</div>
            <div class="outdor-advertising-advantages-item__text">@lang('outdorAdvertising.advantages.convenient_text')
            </div>
         </div>
         <div class="outdor-advertising-advantages__item outdor-advertising-advantages-item">
            <div class="outdor-advertising-advantages-item__tittle">@lang('outdorAdvertising.advantages.support_tittle')
            </div>
            <div class="outdor-advertising-advantages-item__text">@lang('outdorAdvertising.advantages.support_text')
            </div>
         </div>
         <div class="outdor-advertising-advantages__item outdor-advertising-advantages-item">
            <div class="outdor-advertising-advantages-item__tittle">@lang('outdorAdvertising.advantages.price_tittle')
            </div>
            <div class="outdor-advertising-advantages-item__text">@lang('outdorAdvertising.advantages.price_text_1')</div>
         </div>
         <div class="outdor-advertising-advantages__item outdor-advertising-advantages-item">
            <div class="outdor-advertising-advantages-item__tittle">
               @lang('outdorAdvertising.advantages.creative_tittle')</div>
            <div class="outdor-advertising-advantages-item__text">@lang('outdorAdvertising.advantages.creative_text')
            </div>
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
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/consulado.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>

                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/consulado.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/moonsters.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>

                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/moonsters.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/1.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/1.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/marista.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/marista.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/2.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/2.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/3.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/3.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/4.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/4.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/5.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/5_black.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/6.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/6_black.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/7.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/7.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/8.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/8_black.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/10.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/10.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/11.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/11.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/12.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/12_black.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
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
<section class="help">
   <div class="help__container">
      <div class="help__row">
         <div class="help__item">
            <h3 class="help__item-tittle tittle">@lang('form.page_form.outdorAdvertising')</h3>
            <div class="help__item-text">@lang('form.page_form.text')</div>
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
@endsection