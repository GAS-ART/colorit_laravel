@section('popup')
<div id="popup" class="popup">
   <div class="popup__body">
      <div class="popup__content">
         <a href="#" class="popup__close close-popup"></a>
         <div class="popup__row">
            <div class="popup__form">
               <div class="popup__title">
                  <h4>Заполните<br> форму</h4>
               </div>
               <div class="popup__text">
                  <form class="form" id="bookingform" name="popupform" method="POST" enctype="multipart/form-data" action="#" autocomplete="on">
                     @csrf
                     <div class="contacts-form__item data popup-data">
                        <input class="data__text-field" type="text" name="name" placeholder="Ваше имя">
                        <p class="name-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-phone">
                        <input class="phone" type="text" name="phone" placeholder="Номер телефона">
                        <p class="phone-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-email">
                        <input class="email" type="text" name="email" placeholder="Эл. почта">
                        <p class="email-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-service">
                        <select class="select-form" name="service">
                           <option value=""></option>
                           <option value="Наружная Реклама">Наружная Реклама</option>
                           <option value="Полиграфия">Полиграфия</option>
                           <option value="Айдентика">Айдентика</option>
                           <option value="Смм">Смм</option>
                           <option value="Создание Сайтов">Создание Сайтов</option>
                           <option value="УФ печать">УФ печать</option>
                           <option value="Печать на Одежде">Печать на Одежде</option>
                        </select>
                        <p class="service-error error"></p>
                     </div>
                     <div class="contacts-form__item data popup-text-area">
                        <textarea name="text" placeholder="Ваш комментарий"></textarea>
                     </div>
                     <div class="contacts-form__item data popup-download">
                        <input type="file" name="filename" class="popup-file">
                        <div class="file-button">Прикрепить файл</div>
                        <p class="file-error error"></p>
                     </div>
                     <div class="popup__button">
                        <button class="submit" type="submit">Оставить заявку</button>
                     </div>
                  </form>
               </div>
               <div class="confirm">
                  <p>Данные успешно отправлены</p>
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