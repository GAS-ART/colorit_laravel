@extends('layout')
@section('title', __('tittles.uv_printing.title'))
@section('description', __('tittles.uv_printing.description'))
@section('ogTitle', __('tittles.uv_printing.ogTitle'))
@section('ogDescription', __('tittles.uv_printing.ogDescription'))
@section('ogUrl', __('tittles.uv_printing.ogUrl'))

@section('content')
<section class="links">
   <div class="links__container">
      <div class="links__body">
         <a href="{{ route('home.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__previous">@lang('services.main_link')</a>
         <a href="{{ route('uvPrinting.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__current">@lang('services.uv_printing')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/service/uv/uv_1820_650s.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/service/uv/uv_310_350.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('services.uv_printing')</h1>
   </div>
</section>
<section class="outdor-advertising-about">
   <div class="outdor-advertising-about__container">
      <div class="outdor-advertising-about__body">
         @lang('uvPrinting.about')
      </div>
   </div>
   <h3 class="outdor-advertising-about__tittle">Colorit agency</h3>
</section>
<section class="outdor-advertising-products">
   <div class="outdor-advertising-products__container">
      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/uv_print/polygraphy.jpg')}}" alt="">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('uvPrinting.products.polygraphy.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('uvPrinting.products.polygraphy.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('uvPrinting.products.polygraphy.text_more')
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
            <h2 class="description-product__tittle"> @lang('uvPrinting.products.plates.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('uvPrinting.products.plates.text')
               </div>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/uv_print/plates.jpg')}}" alt="">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/uv_print/stends.jpg')}}" alt="">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('uvPrinting.products.stands.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('uvPrinting.products.stands.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('uvPrinting.products.stands.text_more')
                  </div>
                  <div class="description-product__details">
                     @lang('uvPrinting.products.stands.details')
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
            <h2 class="description-product__tittle"> @lang('uvPrinting.products.decor.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('uvPrinting.products.decor.text')
               </div>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/uv_print/decor.jpg')}}" alt="">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/uv_print/foto_print.jpg')}}" alt="">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('uvPrinting.products.photo.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('uvPrinting.products.photo.text')
               </div>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('uvPrinting.products.photo.text_more')
                  </div>
                  <div class="description-product__details">
                     @lang('uvPrinting.products.photo.details')
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
<section class="why-smm">
   <div class="why-smm__container">
      <div class="why-smm__body">
         <h3 class="why-smm__tittle tittle">@lang('uvPrinting.advantages.tittle')</h3>
         <ul class="why-smm__list">
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('uvPrinting.advantages.item')</div>
               <div class="why-smm__count">01</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('uvPrinting.advantages.item1')</div>
               <div class="why-smm__count">02</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('uvPrinting.advantages.item2')</div>
               <div class="why-smm__count">03</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('uvPrinting.advantages.item3')</div>
               <div class="why-smm__count">04</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('uvPrinting.advantages.item4')</div>
               <div class="why-smm__count">05</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('uvPrinting.advantages.item5')</div>
               <div class="why-smm__count">06</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('uvPrinting.advantages.item6')</div>
               <div class="why-smm__count">07</div>
            </li>
         </ul>
      </div>
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
            <div class="outdor-advertising-advantages-item__text">@lang('outdorAdvertising.advantages.price_text')</div>
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
<section class="outdor-advertising-portfolio">
   <img class="outdor-advertising-portfolio__desktop" src="{{asset('img/outdoor_advertising/cases.jpg')}}" alt="">
   <img class="outdor-advertising-portfolio__mobile" src="{{asset('img/outdoor_advertising/cases_small.jpg')}}" alt="">
   <div class="outdor-advertising-portfolio__body">
      <div class="outdor-advertising-portfolio__tittle">@lang('outdorAdvertising.portfolio.tittle')</div>
      <a href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}" class="outdor-advertising-portfolio__btn">@lang('outdorAdvertising.portfolio.btn')</a>
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
<section class="help">
   <div class="help__container">
      <div class="help__row">
         <div class="help__item">
            <h3 class="help__item-tittle tittle">@lang('form.page_form.polygraphy')</h3>
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