@extends('layout')
@section('title', __('tittles.poligraphy.title'))
@section('description', __('tittles.poligraphy.description'))
@section('ogTitle', __('tittles.poligraphy.ogTitle'))
@section('ogDescription', __('tittles.poligraphy.ogDescription'))
@section('ogUrl', __('tittles.poligraphy.ogUrl'))


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
      <img class="main-baner-top__lage" src="{{asset('img/polygraphy/baner.jpg')}}" alt="@lang('altTag.polygraphy.baner')">
      <img class="main-baner-top__small" src="{{asset('img/polygraphy/baner_small.jpg')}}" alt="@lang('altTag.polygraphy.baner')">
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
<section class="smm-to-top polygraphy-to-top">
   <div class="smm-to-top__container">
      <div class="smm-to-top__item smm-to-top__item-no-line">
         @lang('polygraphy.relevance.1')
      </div>
   </div>
</section>
<section class="outdor-advertising-products">
   <div class="outdor-advertising-products__container">
      <div class="polygraphy-products-tittle tittle">
         @lang('polygraphy.products.tittle')
      </div>
   </div>
   <div class="outdor-advertising-products__container">

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/polygraphy/cards.jpg')}}" alt="@lang('altTag.polygraphy.services.card')">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('polygraphy.products.business_cards.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('polygraphy.products.business_cards.text')
               </div>
               <div class="description-product__type">@lang('polygraphy.products.business_cards.types')</div>
               <ul class="description-product__list products-list-read-more">
                  <li class="description-product__item">@lang('polygraphy.products.business_cards.item')</li>
                  <li class="description-product__item">@lang('polygraphy.products.business_cards.item1')</li>
                  <li class="description-product__item">@lang('polygraphy.products.business_cards.item2')</li>
                  <li class="description-product__item description-product__text-more">
                     @lang('polygraphy.products.business_cards.item3')</li>
                  <li class="description-product__item description-product__text-more">
                     @lang('polygraphy.products.business_cards.item4')</li>
                  <li class="description-product__item description-product__text-more">
                     @lang('polygraphy.products.business_cards.item5')</li>
                  <li class="description-product__item description-product__text-more">
                     @lang('polygraphy.products.business_cards.item6')</li>
                  <li class="description-product__item description-product__text-more">
                     @lang('polygraphy.products.business_cards.item7')</li>
                  <li class="description-product__item description-product__text-more">
                     @lang('polygraphy.products.business_cards.item8')</li>
               </ul>
               <button class="description-product__read-more-btn">@lang('outdorAdvertising.products.read_more')</button>
               <div class="description-product__read-more">
                  <div class="description-product__text-more-mobile">
                     @lang('polygraphy.products.business_cards.text_more')
                  </div>
                  <div class="description-product__details">
                     @lang('polygraphy.products.business_cards.details')
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
            <h2 class="description-product__tittle"> @lang('polygraphy.products.flyers.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('polygraphy.products.flyers.text')
               </div>
               <div class="description-product__details details-no-text">
                  @lang('polygraphy.products.flyers.details')
               </div>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/polygraphy/flyers.jpg')}}" alt="@lang('altTag.polygraphy.services.flyer')">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/polygraphy/booklet.jpg')}}" alt="@lang('altTag.polygraphy.services.booklet')">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('polygraphy.products.booklet.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('polygraphy.products.booklet.text')
               </div>
               <div class="description-product__details details-no-text">
                  @lang('polygraphy.products.booklet.details')
               </div>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle"> @lang('polygraphy.products.folders.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('polygraphy.products.folders.text')
               </div>
               <div class="description-product__details details-no-text">
                  @lang('polygraphy.products.folders.details')
               </div>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/polygraphy/folders.jpg')}}" alt="@lang('altTag.polygraphy.services.foolder')">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/polygraphy/labels.jpg')}}" alt="@lang('altTag.polygraphy.services.label')">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">
               @lang('polygraphy.products.stickers.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('polygraphy.products.stickers.text')
               </div>
               <div class="description-product__type">@lang('polygraphy.products.stickers.types')</div>
               <ul class="description-product__list products-list-read-more">
                  <li class="description-product__item">@lang('polygraphy.products.stickers.item')</li>
                  <li class="description-product__item">@lang('polygraphy.products.stickers.item1')</li>
               </ul>
               <div class="description-product__details details-no-text">
                  @lang('polygraphy.products.stickers.details')
               </div>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">@lang('polygraphy.products.menu.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('polygraphy.products.menu.text')
               </div>
               <div class="description-product__details details-no-text">
                  @lang('polygraphy.products.menu.details')
               </div>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/polygraphy/menu.jpg')}}" alt="@lang('altTag.polygraphy.services.menu')">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/polygraphy/magazines.jpg')}}" alt="@lang('altTag.polygraphy.services.magazine')">
         </div>
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">@lang('polygraphy.products.magazine.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('polygraphy.products.magazine.text')
               </div>
               <div class="description-product__details details-no-text">
                  @lang('polygraphy.products.magazine.details')
               </div>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

      <div class="outdor-advertising-products__item item-outdor-advertising-products">
         <div class="item-outdor-advertising-products__description description-product">
            <h2 class="description-product__tittle">@lang('polygraphy.products.certificate.tittle')</h2>
            <div class="description-product__body">
               <div class="description-product__text">
                  @lang('polygraphy.products.certificate.text')
               </div>
               <div class="description-product__details details-no-text">
                  @lang('polygraphy.products.certificate.details')
               </div>
               <button class="description-product__btn popup-btn">@lang('main.order')</button>
            </div>
         </div>
         <div class="item-outdor-advertising-products__img">
            <img src="{{asset('img/polygraphy/certificates.jpg')}}" alt="@lang('altTag.polygraphy.services.certificates')">
         </div>
         <button
            class="item-outdor-advertising-products__btn-mobile description-product__btn popup-btn">@lang('main.order')</button>
      </div>

   </div>
</section>
<section class="smm-to-top polygraphy-to-top">
   <div class="smm-to-top__container">
      <div class="smm-to-top__item smm-to-top__item-no-line">
         @lang('polygraphy.relevance.3')
      </div>
   </div>
</section>
@include('inc.slider')
<section class="outdor-advertising-portfolio">
   <img class="outdor-advertising-portfolio__desktop" src="{{asset('img/outdoor_advertising/cases.jpg')}}" alt="">
   <img class="outdor-advertising-portfolio__mobile" src="{{asset('img/outdoor_advertising/cases_small.jpg')}}" alt="">
   <div class="outdor-advertising-portfolio__body">
      <div class="outdor-advertising-portfolio__tittle">@lang('outdorAdvertising.portfolio.tittle')</div>
      <a href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}"
         class="outdor-advertising-portfolio__btn">@lang('outdorAdvertising.portfolio.btn')</a>
   </div>
</section>
<section class="help">
   <div class="help__container">
      <div class="help__row">
         <div class="help__item">
            <h3 class="help__item-tittle tittle help-tittle-polygraphy">@lang('polygraphy.relevance.4')</h3>
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