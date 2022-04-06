@extends('layout')
@section('title', __('tittles.smm.title'))
@section('description', __('tittles.smm.description'))
@section('ogTitle', __('tittles.smm.ogTitle'))
@section('ogDescription', __('tittles.smm.ogDescription'))
@section('ogUrl', __('tittles.smm.ogUrl'))


@section('content')
<section class="links">
   <div class="links__container">
      <div class="links__body">
         <a href="{{ route('home.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__previous">@lang('services.main_link')</a>
         <a href="{{ route('smm.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__current">@lang('services.smm')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/smm/main.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/smm/main_small.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('services.smm')</h1>
   </div>
</section>
<section class="outdor-advertising-about">
   <div class="outdor-advertising-about__container">
      <div class="outdor-advertising-about__body">
         @lang('smm.about')
      </div>
   </div>
   <h3 class="outdor-advertising-about__tittle">Colorit agency</h3>
</section>
<section class="why-smm">
   <div class="why-smm__container">
      <div class="why-smm__body">
         <h3 class="why-smm__tittle tittle">@lang('smm.why.tittle')</h3>
         <ul class="why-smm__list">
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.1')</div>
               <div class="why-smm__count">01</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.2')</div>
               <div class="why-smm__count">02</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.3')</div>
               <div class="why-smm__count">03</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.4')</div>
               <div class="why-smm__count">04</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.5')</div>
               <div class="why-smm__count">05</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.why.6')</div>
               <div class="why-smm__count">06</div>
            </li>
         </ul>
      </div>
   </div>
</section>
<section class="smm-numbers">
   <div class="smm-numbers__container">
      <div class="smm-numbers__tittle tittle">@lang('smm.numbers.tittle')</div>
      <div class="smm-numbers__body">
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number">91%</div>
            <div class="item-smm-number__text">@lang('smm.numbers.91')</div>
         </div>
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number">2.5</div>
            <div class="item-smm-number__text">@lang('smm.numbers.25')</div>
         </div>
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number">37%</div>
            <div class="item-smm-number__text">@lang('smm.numbers.37')</div>
         </div>
         <div class="smm-numbers__item item-smm-number">
            <div class="item-smm-number__number">9</div>
            <div class="item-smm-number__text">@lang('smm.numbers.9')</div>
         </div>
      </div>
   </div>
</section>
<section class="promotion-smm">
   <div class="promotion-smm__container">
      <div class="promotion-smm__row">
         <h2 class="promotion-smm__tittle tittle">@lang('smm.promotion.tittle')</h2>
         <div class="promotion-smm__text">@lang('smm.promotion.text')</div>
      </div>
   </div>
</section>
<section class="smm-price">
   <div class="smm-price__container">
      <div class="smm-price__tittle tittle">@lang('smm.price.tittle')</div>
      <div class="smm-price__body">
         <div class="smm-price__item item-price-smm">
            <div class="item-price-smm__tittle">@lang('smm.price.light.tittle')</div>
            <ul class="item-price-smm__list">
               <li class="item-price-smm__item">@lang('smm.price.light.1')</li>
               <li class="item-price-smm__item">@lang('smm.price.light.2')</li>
               <li class="item-price-smm__item">@lang('smm.price.light.3')</li>
               <li class="item-price-smm__item">@lang('smm.price.light.4')</li>
               <li class="item-price-smm__item">@lang('smm.price.light.5')</li>
            </ul>
            <button class="item-price-smm__price popup-btn">@lang('smm.price.price')</buttontn>
         </div>
         <div class="smm-price__item item-price-smm">
            <div class="item-price-smm__tittle">@lang('smm.price.medio.tittle')</div>
            <ul class="item-price-smm__list">
               <li class="item-price-smm__item">@lang('smm.price.medio.1')</li>
               <li class="item-price-smm__item">@lang('smm.price.medio.2')
               </li>
               <li class="item-price-smm__item">@lang('smm.price.medio.3')</li>
               <li class="item-price-smm__item">@lang('smm.price.medio.4')</li>
               <li class="item-price-smm__item">@lang('smm.price.medio.5')</li>
               <li class="item-price-smm__item">@lang('smm.price.medio.6')</li>
               <li class="item-price-smm__item">@lang('smm.price.medio.7')</li>
            </ul>
            <button class="item-price-smm__price popup-btn">@lang('smm.price.price')</buttontn>
         </div>
         <div class="smm-price__item item-price-smm">
            <div class="item-price-smm__tittle">@lang('smm.price.zoom.tittle')</div>
            <ul class="item-price-smm__list">
               <li class="item-price-smm__item">@lang('smm.price.zoom.1')</li>
               <li class="item-price-smm__item">@lang('smm.price.zoom.2')
               </li>
               <li class="item-price-smm__item">@lang('smm.price.zoom.3')</li>
               <li class="item-price-smm__item">@lang('smm.price.zoom.4')</li>
               <li class="item-price-smm__item">@lang('smm.price.zoom.5')</li>
               <li class="item-price-smm__item">@lang('smm.price.zoom.6')</li>
               <li class="item-price-smm__item">@lang('smm.price.zoom.7')</li>
               <li class="item-price-smm__item">@lang('smm.price.zoom.8')</li>
               <li class="item-price-smm__item">@lang('smm.price.zoom.9')</li>
               <li class="item-price-smm__item">@lang('smm.price.zoom.10')</li>
            </ul>
            <button class="item-price-smm__price popup-btn">@lang('smm.price.price')</buttontn>
         </div>
      </div>
   </div>
</section>
<section class="why-smm">
   <div class="why-smm__container">
      <div class="why-smm__body">
         <h3 class="why-smm__tittle tittle">@lang('smm.additional_sercices.tittle')</h3>
         <ul class="why-smm__list">
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.additional_sercices.1')</div>
               <div class="why-smm__count">01</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.additional_sercices.2')</div>
               <div class="why-smm__count">02</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.additional_sercices.3')</div>
               <div class="why-smm__count">03</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.additional_sercices.4')</div>
               <div class="why-smm__count">04</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('smm.additional_sercices.5')</div>
               <div class="why-smm__count">05</div>
            </li>
         </ul>
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
         <a class=" smm-portfolio__link" href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}">@lang('smm.portfolio.btn')</a>
      </div>
   </div>
</section>
<section class="smm-to-top">
   <div class="smm-to-top__container">
      <div class="smm-to-top__tittle tittle">@lang('smm.top.tittle')</div>
      <div class="smm-to-top__item">
      @lang('smm.top.1')
      </div>
      <div class="smm-to-top__item">
      @lang('smm.top.2')
      </div>
      <div class="smm-to-top__item">
      @lang('smm.top.3')
      </div>
      <div class="smm-to-top__item">
      @lang('smm.top.4')
      </div>
      <div class="smm-to-top__item smm-to-top__item-no-line">
      @lang('smm.top.5')
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
<section class="help smm-help">
   <div class="help__container">
      <div class="help__row">
         <div class="help__item">
            <h3 class="help__item-tittle tittle">@lang('form.page_form.smm')</h3>
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