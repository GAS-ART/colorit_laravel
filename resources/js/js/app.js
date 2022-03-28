'use strict';

//import * as gasArt from './modules/functions.js';
// console.log(gasArt.block());

//import { isWebp } from './modules/functions.js';

//isWebp();
import './modules/sliders.js';


window.onload = function () {



   document.addEventListener('click', documentActions);

   //меню бургер
   const menuBody = document.querySelector('.header__burger');
   const burger = document.querySelector('.header__icon-menu');
   burger.addEventListener('click', (e) => {
      burger.classList.toggle('open');
      menuBody.classList.toggle('active');
      e.preventDefault;
   });
   $('.burger-service-menu').next().slideUp();
   $('.burger-service-menu').click(function (e) {
      e.preventDefault();
      $(e.target).next().slideToggle(300);
      $(e.target).toggleClass('active');
   });

   // переключения языков для устройств без мыши

   const languageBtn = document.querySelector('.language-btn');
   // const languageLink = document.querySelectorAll('.language-btn__select > a');
   languageBtn.addEventListener('click', function (e) {
      if (window.matchMedia("(pointer: coarse)").matches) { // Устройства со стилусом
         if (!languageBtn.classList.contains('active')) {
            e.preventDefault()
         }
         languageBtn.classList.toggle('active');
      }
   });

   //Смена картинок при наведени на пункты меню
   const imgLinkBtn = document.querySelector(".service-menu__img-link");
   const menuLink = document.querySelectorAll(".menu-service__item-link");
   const serviceImage = document.querySelectorAll(".service-menu__img");
   const shadowText = document.querySelector('.service-menu__shadow-text');
   const shadowTextMobile = document.querySelector('.service-menu__shadow-text-mobile');
   if (menuLink) {
      menuLink.forEach((link) => {
         if (window.matchMedia("(pointer: fine)").matches) {
            link.addEventListener('mouseover', function (e) {
               let targetImg = e.target.dataset.img;
               let targetText = e.target.innerText;
               serviceImage.forEach((img) => {
                  img.classList.remove("active");
                  if (img.dataset.img == targetImg) {
                     img.classList.add("active");
                     shadowText.textContent = targetText;
                  }
               })
            });
         } else if (window.matchMedia("(pointer: coarse)").matches) {
            link.addEventListener("click", function (e) {
               let targetImg = e.target.dataset.img;
               let targetLink = e.target.dataset.link;
               let targetText = e.target.innerText;
               serviceImage.forEach((img) => {
                  img.classList.remove("active");
                  if (img.dataset.img == targetImg) {
                     img.classList.add("active");
                     imgLinkBtn.setAttribute('href', targetLink);
                     shadowTextMobile.textContent = targetText;
                  }
               })
               e.preventDefault();
            });
         }
      });
   }

   //бегущая строка
   const baner = document.querySelector('.baner');
   if (baner) {
      const banerStart = document.querySelector('.baner__start');
      let banerText = banerStart.innerHTML;
      const banerSpanStart = `<span class="baner__start">${banerText}</span>`;
      function animationBanerText() {
         let screenWidth = 0;
         let textWidth = 0;
         let spanQuantity = 0;
         let banerWidth = 0;
         let textMarginRight = +getComputedStyle(banerStart).marginRight.replace("px", "");
         screenWidth = document.documentElement.clientWidth
         textWidth = banerStart.clientWidth + textMarginRight;
         spanQuantity = Math.ceil(screenWidth / textWidth);
         if (spanQuantity > 1) {
            banerWidth = spanQuantity * textWidth + textWidth + 10;
         } else {
            banerWidth = (spanQuantity + 1) * textWidth + textWidth;
         }
         baner.style.width = banerWidth + "px";
         for (let i = 0; i < spanQuantity; i++) {
            banerStart.insertAdjacentHTML('afterEnd', banerSpanStart);
         }

         document.querySelectorAll('.baner__start').forEach((item) => {
            item.animate([
               { transform: 'translate(0, 0)' },
               { transform: 'translate(-' + `${(textWidth)}` + 'px, 0)' }
            ], {
               duration: 10000,
               iterations: Infinity
            })
         });
      }
      animationBanerText();
   }

   //Цвет логотипов компаний при наведении
   const logosBlack = document.querySelectorAll('.black-image > img');

   logosBlack.forEach((logo) => {
      logo.addEventListener('mouseover', function (e) {
         e.target.closest('.black-image').nextElementSibling.firstElementChild.classList.add('active');
      });
   });

   logosBlack.forEach((logo) => {
      logo.addEventListener('mouseout', function (e) {
         e.target.closest('.black-image').nextElementSibling.firstElementChild.classList.remove('active');
      });
   });

   //popup
   const body = document.querySelector('#body');
   const popupBtn = document.querySelectorAll('.popup-btn');
   const popup = document.querySelector('.popup');
   const popupClose = document.querySelectorAll('.popup__close');
   const confitmBtn = document.querySelector('.confirm-button');

   popupBtn.forEach((item) => {
      item.addEventListener('click', function (e) {
         e.preventDefault();
         popup.classList.add('open');
         body.classList.add('lock');
      });
   });
   popupClose.forEach((item) => {
      item.addEventListener('click', function (e) {
         e.preventDefault();
         closePopup(e.target.closest('.popup'));
      });
   });
   confitmBtn.addEventListener('click', function () {
      closePopup(popup);
   })
   function closePopup(popup) {
      popup.classList.remove('open');
      popup.classList.remove('send');
      body.classList.remove('lock');
      $(".email-error").html('');
      $(".name-error").html('');
      $(".phone-error").html('');
      $(".file-error").html('');
      $(".service-error").html('');
   }

   //Открытие блока "?" в блоке  "Доступные пакеты"
   const priceQuestionBtn = document.querySelectorAll('.price-details');
   const priceQuestionText = document.querySelectorAll('.price-details-text');
   priceQuestionBtn.forEach((item) => {
      item.addEventListener('click', function (e) {
         e.target.closest('.price-details').nextElementSibling.classList.toggle('active');
      });
   });

   function documentActions(e) {
      //убираем меню бургер
      if (!e.target.closest('.header__burger') && !e.target.classList.contains('header__icon-menu')) {
         menuBody.classList.remove('active');
         burger.classList.remove('open');
      }

      //Убираем отображение языков
      if (!e.target.closest('.language-btn')) {
         languageBtn.classList.remove('active');
      }
      //Убираем popup
      if (!e.target.closest('.popup__content') && !e.target.classList.contains('popup-btn')) {
         closePopup(popup);
      }
      //Убираем price-details-text
      if (!e.target.closest('.price-details-text') && !e.target.classList.contains('price-details-text') && !e.target.classList.contains('price-details-item')) {
         priceQuestionText.forEach((item) => {
            item.classList.remove('active');
         });
      }
   }

   //Фиксация header
   const headerElement = document.querySelector('.header');

   const headerObserver = new IntersectionObserver(watchHeader);
   headerObserver.observe(headerElement);

   function watchHeader(entries) {
      if (entries[0].isIntersecting) {
         entries[0].target.classList.remove('_scroll')
      } else {
         entries[0].target.classList.add('_scroll')
      }
   }



   // Отпарвка данных из формы
   const bookingForm = document.querySelector('#bookingform');
   $("#bookingform").submit(function (event) {
      event.preventDefault();
      $.ajax({
         type: 'POST',
         url: 'http://127.0.0.1:8000/feedback',
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData: false,
         success: function () {
            $(".email-error").html('');
            $(".name-error").html('');
            $(".phone-error").html('');
            $(".file-error").html('');
            $(".service-error").html('');
            $(".popup").addClass("send");
            bookingForm.reset();
            $(".select-form").select2("destroy");
            $('.select-form').select2({
               placeholder: 'Выберету услугу',
               minimumResultsForSearch: -1,
            });
         },
         error: function (err) {
            if (bookingForm.classList.contains('es')) {
               if (err.responseJSON.errors?.email) {
                  let text = err.responseJSON.errors.email[0]
                  if (text == 'Не заполнено поле "email"') {
                     $(".email-error").html('El campo no esta rellenado "email"');
                  } else if (text == 'Указан не корректный email адрес') {
                     $(".email-error").html('Introduce un email válido');
                  }
               } else {
                  $(".email-error").html('');
               }
               if (err.responseJSON.errors?.name) {
                  let text = err.responseJSON.errors.name[0]
                  if (text == 'Не заполнено поле "Имя"') {
                     $(".name-error").html('El campo Nombre no esta rellenado');
                  } else if (text == 'Поле "Имя" не должно содержать цифр') {
                     $(".name-error").html('Campo "Nombre" no puede contener los números');
                  }
                  else if (text == 'Поле "Имя" должно содержать 2 или больше символов') {
                     $(".name-error").html('Campo "Nombre" Debe contener 2 o mas simbolos');
                  }
                  else if (text == 'Поле "Имя" должно содержать не больше 80 символов') {
                     $(".name-error").html('Campo "Nombre" no puede contener mas de 80 simbolos');
                  }
               } else {
                  $(".name-error").html('');
               }
               if (err.responseJSON.errors?.phone) {
                  let text = err.responseJSON.errors.phone[0]
                  if (text == 'Не заполнено поле "Номер телефона"') {
                     $(".phone-error").html('El campo no esta rellenado telefono');
                  } else if (text == 'Не верный формат номера телефона') {
                     $(".phone-error").html('Introduce un telefono válido');
                  }
               } else {
                  $(".phone-error").html('');
               } if (err.responseJSON.errors?.service) {
                  let text = err.responseJSON.errors.service[0]
                  if (text == 'Пожалуйста выберете тип услуги из списка') {
                     $(".service-error").html('Por favor, elige el servicio');
                  }
               } else {
                  $(".service-error").html('');
               }
            } else {
               if (err.responseJSON.errors?.email) {
                  $(".email-error").html(err.responseJSON.errors.email[0]);
               } else {
                  $(".email-error").html('');
               }
               if (err.responseJSON.errors?.name) {
                  $(".name-error").html(err.responseJSON.errors.name[0]);
               } else {
                  $(".name-error").html('');
               }
               if (err.responseJSON.errors?.phone) {
                  $(".phone-error").html(err.responseJSON.errors.phone[0]);
               } else {
                  $(".phone-error").html('');;
               }
               if (err.responseJSON.errors?.filename) {
                  $(".file-error").html(err.responseJSON.errors.filename[0]);
               } else {
                  $(".file-error").html('');
               }
               if (err.responseJSON.errors?.service) {
                  $(".service-error").html(err.responseJSON.errors.service[0]);
               } else {
                  $(".service-error").html('');
               }
            }
         }
      });
   });


   const formPage = document.querySelector('#pageForm');
   $("#pageForm").submit(function (event) {
      event.preventDefault();
      $.ajax({
         type: 'POST',
         url: 'http://127.0.0.1:8000/feedback_page',
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData: false,
         success: function () {
            $(".email-error").html('');
            $(".name-error").html('');
            $(".phone-error").html('');
            $(".popup").addClass("open");
            $(".popup").addClass("send");
            formPage.reset();
         },
         error: function (err) {
            if (formPage.classList.contains('es')) {
               if (err.responseJSON.errors?.email) {
                  let text = err.responseJSON.errors.email[0]
                  if (text == 'Не заполнено поле "email"') {
                     $(".email-error").html('El campo no esta rellenado "email"');
                  } else if (text == 'Указан не корректный email адрес') {
                     $(".email-error").html('Introduce un email válido');
                  }
               } else {
                  $(".email-error").html('');
               }
               if (err.responseJSON.errors?.name) {
                  let text = err.responseJSON.errors.name[0]
                  if (text == 'Не заполнено поле "Имя"') {
                     $(".name-error").html('El campo Nombre no esta rellenado');
                  } else if (text == 'Поле "Имя" не должно содержать цифр') {
                     $(".name-error").html('Campo "Nombre" no puede contener los números');
                  }
                  else if (text == 'Поле "Имя" должно содержать 2 или больше символов') {
                     $(".name-error").html('Campo "Nombre" Debe contener 2 o mas simbolos');
                  }
                  else if (text == 'Поле "Имя" должно содержать не больше 80 символов') {
                     $(".name-error").html('Campo "Nombre" no puede contener mas de 80 simbolos');
                  }
               } else {
                  $(".name-error").html('');
               }
               if (err.responseJSON.errors?.phone) {
                  let text = err.responseJSON.errors.phone[0]
                  if (text == 'Не заполнено поле "Номер телефона"') {
                     $(".phone-error").html('El campo no esta rellenado telefono');
                  } else if (text == 'Не верный формат номера телефона') {
                     $(".phone-error").html('Introduce un telefono válido');
                  }
               } else {
                  $(".phone-error").html('');
               }
            } else {
               if (err.responseJSON.errors?.email) {
                  $(".email-error").html(err.responseJSON.errors.email[0]);
               } else {
                  $(".email-error").html('');
               }
               if (err.responseJSON.errors?.name) {
                  $(".name-error").html(err.responseJSON.errors.name[0]);
               } else {
                  $(".name-error").html('');
               }
               if (err.responseJSON.errors?.phone) {
                  $(".phone-error").html(err.responseJSON.errors.phone[0]);
               } else {
                  $(".phone-error").html('');;
               }
            }
         }
      });
   });


   //Стилизация Select
   let placeholderText = 'Выберету услугу';
   if (bookingForm.classList.contains('es')) {
      placeholderText = 'Elige el servicio';
   }
   $('.select-form').select2({
      placeholder: placeholderText,
      minimumResultsForSearch: -1,
   });

   //Скролл к верху страницы

   const scrollBtn = document.querySelector('.scroll-top');

   window.addEventListener('scroll', function () {
      if (window.pageYOffset > 1000) {
         scrollBtn.classList.add('active');
      } else {
         scrollBtn.classList.remove('active');
      }
   })

   scrollBtn.addEventListener('click', function () {
      window.scrollTo({
         top: 0,
         behavior: 'smooth'
      });
   })

   /*OUTDOR-ADVERTISING*/
   //==================================================================

   //Скрыть показать текст (читать больше/меньше)
   $('.description-product__read-more-btn').click(function (e) {
      $(e.target).next().slideDown(300);
      $(e.target).next().next().addClass('active');
      $(e.target).addClass('active');
   });


   $('.description-product__read-less-btn').click(function (e) {
      $(e.target).prev().slideUp(300);
      $(e.target).prev().prev().removeClass('active');
      $(e.target).removeClass('active');
   });

   function windowSize() {
      if ($(window).width() <= '991.98') {
         $('.description-product__read-more-btn').next().slideUp();
         $('.description-product__read-less-btn').removeClass('active');
         $('.description-product__read-more-btn').removeClass('active');
      } else {
         $('.description-product__read-more-btn').next().slideDown();
         $('.description-product__read-less-btn').removeClass('active');
         $('.description-product__read-more-btn').removeClass('active');
      }
   }

   $(window).on('load resize', windowSize);
   windowSize();

   /*OUTDOR-ADVERTISING*/
   //==================================================================


}