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
                  <form class="form @lang('main.current_lang_class')" id="bookingform" name="popupform" method="POST" enctype="multipart/form-data" action="#" autocomplete="on">
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