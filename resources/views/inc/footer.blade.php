@section('footer')
<footer class="footer">
   <div class="footer__container">
      <div class="footer__tittle-main tittle-opacity">Colorit agency</div>
      <div class="footer__body">
         <div class="footer__service service-footer">
            <h5 class="footer__tittle">@lang('services.services')</h5>
            <nav class="service-footer__list">
               <ul class="service-footer__items">
                  <li class="service-footer__item"><a
                        href="{{ route('outdoor_advertising.lang', ['locale' => __('main.set_lang')]) }}"
                        class="service-footer__item-link">@lang('services.outdoor_advertising')</a>
                  </li>
                  <li class="service-footer__item"><a
                        href="{{ route('polygraphy.lang', ['locale' => __('main.set_lang')]) }}"
                        class="service-footer__item-link">@lang('services.polygraphy')</a></li>
                  <li class="service-footer__item"><a
                        href="{{ route('design.lang', ['locale' => __('main.set_lang')]) }}"
                        class="service-footer__item-link">@lang('services.identity')</a></li>
                  <li class="service-footer__item"><a href="{{ route('smm.lang', ['locale' => __('main.set_lang')]) }}"
                        class="service-footer__item-link">@lang('services.smm')</a></li>
                  <li class="service-footer__item"><a
                        href="{{ route('webDevelopment.lang', ['locale' => __('main.set_lang')]) }}"
                        class="service-footer__item-link">@lang('services.website_development')</a>
                  </li>
                  <li class="service-footer__item"><a
                        href="{{ route('uvPrinting.lang', ['locale' => __('main.set_lang')]) }}"
                        class="service-footer__item-link">@lang('services.uv_printing')</a></li>
                  <li class="service-footer__item"><a
                        href="{{ route('printing.lang', ['locale' => __('main.set_lang')]) }}"
                        class="service-footer__item-link">@lang('services.printing_on_clothes')</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="footer__information information-footer">
            <h5 class="footer__tittle">@lang('footer.information')</h5>
            <nav class="information-footer__list">
               <ul class="information-footer__items">
                  <li class="information-footer__item"><a
                        href="{{ route('about.lang', ['locale' => __('main.set_lang')]) }}"
                        class="information-footer__item-link">@lang('footer.about_us')</a>
                  </li>
                  <!--  <li class="information-footer__item"><a href="#" class="information-footer__item-link">@lang('footer.cases')</a>
                     </li>
                     <li class="information-footer__item"><a href="#" class="information-footer__item-link">@lang('footer.clients')</a>
                     </li> -->
                  <li class="information-footer__item"><button
                        class="information-footer__item-link popup-btn">@lang('footer.lead')</button></li>
                  <li class="information-footer__item"><a href="{{ route('download.lang', ['locale' => __('main.set_lang')]) }}"
                        class="information-footer__item-link send-analytics" data-event-name="Загрузка презентации @lang('main.set_lang') (footer)" data-first-click="true">@lang('contacts.presentation')</a></li>
                  <li class="information-footer__item"><a
                        href="{{ route('privacy.lang', ['locale' => __('main.set_lang')]) }}"
                        class="information-footer__item-link">@lang('footer.privacy')</a>
                  </li>
                  <li class="information-footer__item"><a
                        href="{{ route('cookies.lang', ['locale' => __('main.set_lang')]) }}"
                        class="information-footer__item-link">@lang('footer.cookies')</a>
                  </li>
               </ul>
            </nav>
         </div>

         <div id="contacts" class="footer__contacts contacts-footer">
            <h5 class="footer__tittle">@lang('contacts.contacts')</h5>
            <div class="contacts-footer__address">
               <p>@lang('contacts.address')</p>
               <p>@lang('contacts.address_name')</p>
            </div>
            <div class="contacts-footer__phone">
               <p>@lang('contacts.phone')</p>
               <a class="send-analytics" data-event-name="Клик на телефон (footer)" data-first-click="true" href="tel:%2B34691820317">+34 691 820 317</a>
            </div>
            <div class="contacts-footer__email">
               <p>E-mail</p>
               <a class="send-analytics" data-event-name="Клик на email (footer)" data-first-click="true" href="mailto:colorit.bcn@gmail.com">colorit.bcn@gmail.com</a>
            </div>
         </div>
         <div class="footer__rights rights">
            <div class="rights__text">@lang('footer.rights')</div>
            <div class="rights__social">
               <a href="https://www.facebook.com/colorit.agency" target="_blank" data-event-name="Переход в facebook (footer)"
                        data-first-click="true" class="rights__meta _icon-facebook send-analytics">
               </a>
               <a href="https://www.instagram.com/colorit.agency/"  data-event-name="Переход в instagram (footer)"
                        data-first-click="true" target="_blank"
                  class="rights__instagram _icon-instagram send-analytics">
               </a>
            </div>
         </div>
      </div>
   </div>
</footer>