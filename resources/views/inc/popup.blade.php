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
         <div class="popup__row">
            <div class="case-popup__info">
               <div class="case-popup__tittle">
                  <h4>Costa Maresme</h4>
               </div>
               <div class="case-popup__text">
                  <p>Информационно - рекламный журнал Коста Маресме презентовый в 2022 году.</p>
                  <p>Содержит в себе истории, интервью и увлекательные места на побережье Коста Маресме, Испания </p>
               </div>
               <div class="case-popup__works case-popup-works">
                  <div class="case-popup-works__tittle">Выполнено:</div>
                  <div class="case-popup-works__row">
                     <div class="case-popup-works__items">
                        <div class="case-popup-works__item">Создание стратегии и концепции журнала</div>
                        <div class="case-popup-works__item">Разработка фирменного стиля</div>
                        <div class="case-popup-works__item">Печать на одежде</div>
                     </div>
                     <div class="case-popup-works__items">
                        <div class="case-popup-works__item">Изготовление журнала</div>
                        <div class="case-popup-works__item">Презентация</div>
                        <div class="case-popup-works__item">Создание интернет - магазина</div>
                     </div>
                  </div>
               </div>
               <div class="case-popup__links">
                  <a href="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}"
                     class="case-popup__link">@lang('services.identity')</a>
                  <a href="{{ route('printing.lang', ['locale' => __('main.set_lang')]) }}"
                     class="case-popup__link">@lang('services.printing_on_clothes')</a>
                  <a href="#" class="case-popup__link">@lang('services.polygraphy')</a>
                  <a href="{{ route('webDevelopment.lang', ['locale' => __('main.set_lang')]) }}"
                     class="case-popup__link">@lang('services.website_development')</a>
                  <a href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}"
                     class="case-popup__link">@lang('services.outdoor_advertising')</a>
               </div>
            </div>
            <div class="case-popup__img">
               <!--    <img src="{{asset('img/cases/keys1.png')}}" alt="case">-->
            </div>
         </div>
      </div>
   </div>
</div>