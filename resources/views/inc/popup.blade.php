@section('popup')
<div id="popup" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup"></a>
         <div class="popup__row">
            <div class="popup__form">
               <div class="popup__title">
                  <h4>@lang('form.tittle')</h4>
               </div>
               <div class="popup__text">
                  <form class="form @lang('main.current_lang_class')" id="bookingform" name="popupform" method="POST"
                     enctype="multipart/form-data" action="#" autocomplete="on">
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
                     <div class="contacts-form__item data popup-service">
                        <select class="select-form" name="service">
                           <option value=""></option>
                           <option value="Наружная Реклама">@lang('services.outdoor_advertising')</option>
                           <option value="Полиграфия">@lang('services.polygraphy')</option>
                           <option value="Айдентика">@lang('services.identity')</option>
                           <option value="Смм">@lang('services.smm')</option>
                           <option value="Создание Сайтов">@lang('services.website_development')</option>
                           <option value="УФ печать">@lang('services.uv_printing')</option>
                           <option value="Печать на Одежде">@lang('services.printing_on_clothes')</option>
                        </select>
                        <p class="service-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-text-area">
                        <textarea name="text" placeholder="@lang('form.text')"></textarea>
                     </div>
                     <div class="contacts-form__item data popup-download">
                        <input type="file" name="filename" class="popup-file">
                        <div class="file-button">@lang('form.file')</div>
                        <p class="file-error error"></p>
                     </div>
                     <div class="popup__button">
                        <button class="submit" type="submit">@lang('form.button')</button>
                     </div>
                  </form>
               </div>
               <div class="confirm">
                  <p>@lang('form.success')</p>
                  <div class="confirm-button">
                     ОК
                  </div>
               </div>
            </div>
            <div class="popup__image">
            </div>
         </div>
      </div>
   </div>
</div>

<div id="alianca" class="popup case-popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup"></a>
         <div class="popup__row case-popup__row">
            <div class="case-popup__info">
               <div class="case-popup__tittle">
                  <h4>@lang('popup.alianca.tittle')</h4>
               </div>
               <div class="case-popup__text">
                  @lang('popup.alianca.text')
               </div>
               <div class="case-popup__works case-popup-works">
                  <div class="case-popup-works__tittle">@lang('popup.works_tittle')</div>
                  <div class="case-popup-works__row">
                     <div class="case-popup-works__items">
                        <div class="case-popup-works__item">@lang('popup.alianca.item')</div>
                        <div class="case-popup-works__item">@lang('popup.alianca.item1')</div>
                        <div class="case-popup-works__item">@lang('popup.alianca.item2')</div>
                     </div>
                     <div class="case-popup-works__items">
                        <div class="case-popup-works__item">@lang('popup.alianca.item3')</div>
                        <div class="case-popup-works__item">@lang('popup.alianca.item4')</div>
                        <div class="case-popup-works__item">@lang('popup.alianca.item5')</div>
                     </div>
                  </div>
               </div>
               <div class="case-popup__links">
                  <div class="case-popup__links-row">
                     <a href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.outdoor_advertising')</a>
                     <a href="{{ route('uvPrinting.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.uv_printing')</a>
                  </div>
               </div>
            </div>
            <div class="case-popup__img">
               <img src="{{asset('img/cases/keys12.jpg')}}" alt="case">
            </div>
         </div>
      </div>
   </div>
</div>

<div id="moonstersJump" class="popup case-popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup"></a>
         <div class="popup__row case-popup__row">
            <div class="case-popup__info">
               <div class="case-popup__tittle">
                  <h4>@lang('popup.moonsters_jump.tittle')</h4>
               </div>
               <div class="case-popup__text">
                  @lang('popup.moonsters_jump.text')
               </div>
               <div class="case-popup__works case-popup-works">
                  <div class="case-popup-works__tittle">@lang('popup.works_tittle')</div>
                  <div class="case-popup-works__row">
                     <div class="case-popup-works__items">
                        <div class="case-popup-works__item">@lang('popup.moonsters_jump.item')</div>
                        <div class="case-popup-works__item">@lang('popup.moonsters_jump.item1')</div>
                        <div class="case-popup-works__item">@lang('popup.moonsters_jump.item2')</div>
                     </div>
                     <div class="case-popup-works__items">
                        <div class="case-popup-works__item">@lang('popup.moonsters_jump.item3')</div>
                        <div class="case-popup-works__item">@lang('popup.moonsters_jump.item4')</div>
                        <div class="case-popup-works__item">@lang('popup.moonsters_jump.item5')</div>
                        <div class="case-popup-works__item">@lang('popup.moonsters_jump.item6')</div>
                     </div>
                  </div>
               </div>
               <div class="case-popup__links">
                  <div class="case-popup__links-row">
                     <a href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.outdoor_advertising')</a>
                     <a href="{{ route('uvPrinting.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.uv_printing')</a>
                  </div>
                  <div class="case-popup__links-row">
                     <a href="#" class="case-popup__link service-footer__item-link">@lang('services.polygraphy')</a>
                     <a href="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.identity')</a>
                  </div>
               </div>
            </div>
            <div class="case-popup__img">
               <img src="{{asset('img/cases/keys3.jpg')}}" alt="case">
            </div>
         </div>
      </div>
   </div>
</div>

<div id="costaMaresme" class="popup case-popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup"></a>
         <div class="popup__row case-popup__row">
            <div class="case-popup__info">
               <div class="case-popup__tittle">
                  <h4>@lang('popup.costaMaresme.tittle')</h4>
               </div>
               <div class="case-popup__text">
                  @lang('popup.costaMaresme.text')
               </div>
               <div class="case-popup__works case-popup-works">
                  <div class="case-popup-works__tittle">@lang('popup.works_tittle')</div>
                  <div class="case-popup-works__row">
                     <div class="case-popup-works__items">
                        <div class="case-popup-works__item">@lang('popup.costaMaresme.item')</div>
                        <div class="case-popup-works__item">@lang('popup.costaMaresme.item1')</div>
                        <div class="case-popup-works__item">@lang('popup.costaMaresme.item2')</div>
                     </div>
                     <div class="case-popup-works__items">
                        <div class="case-popup-works__item">@lang('popup.costaMaresme.item3')</div>
                        <div class="case-popup-works__item">@lang('popup.costaMaresme.item4')</div>
                        <div class="case-popup-works__item">@lang('popup.costaMaresme.item5')</div>
                     </div>
                  </div>
               </div>
               <div class="case-popup__links">
                  <div class="case-popup__links-row">
                     <a href="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.identity')</a>
                     <a href="{{ route('printing.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.printing_on_clothes')</a>
                  </div>
                  <div class="case-popup__links-row">
                     <a href="#" class="case-popup__link service-footer__item-link">@lang('services.polygraphy')</a>
                     <a href="{{ route('webDevelopment.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.website_development')</a>
                  </div>
                  <div class="case-popup__links-row">
                     <a href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.outdoor_advertising')</a>
                  </div>
               </div>
            </div>
            <div class="case-popup__img">
               <img src="{{asset('img/cases/keys2.jpg')}}" alt="case">
            </div>
         </div>
      </div>
   </div>
</div>

<div id="floaretelie" class="popup case-popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup"></a>
         <div class="popup__row case-popup__row">
            <div class="case-popup__info">
               <div class="case-popup__tittle">
                  <h4>@lang('popup.floaretelie.tittle')</h4>
               </div>
               <div class="case-popup__text">
                  @lang('popup.floaretelie.text')
               </div>
               <div class="case-popup__works case-popup-works">
                  <div class="case-popup-works__tittle">@lang('popup.works_tittle')</div>
                  <div class="case-popup-works__row">
                     <div class="case-popup-works__items">
                        <div class="case-popup-works__item">@lang('popup.floaretelie.item')</div>
                        <div class="case-popup-works__item">@lang('popup.floaretelie.item1')</div>
                        <div class="case-popup-works__item">@lang('popup.floaretelie.item2')</div>
                        <div class="case-popup-works__item">@lang('popup.floaretelie.item3')</div>
                     </div>
                  </div>
               </div>
               <div class="case-popup__links">
                  <div class="case-popup__links-row">
                     <a href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.outdoor_advertising')</a>
                     <a href="{{ route('uvPrinting.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.uv_printing')</a>
                     <a href="#" class="case-popup__link service-footer__item-link">@lang('services.polygraphy')</a>
                  </div>
                  <div class="case-popup__links-row">
                     <a href="{{ route('printing.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.printing_on_clothes')</a>
                     <a href="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}"
                        class="case-popup__link service-footer__item-link">@lang('services.identity')</a>
                  </div>
               </div>
            </div>
            <div class="case-popup__img">
               <img src="{{asset('img/cases/keys4.png')}}" alt="case">
            </div>
         </div>
      </div>
   </div>
</div>