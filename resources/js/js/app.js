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
   const headerWraper = document.querySelector('.header__wraper');
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
               // Scroll to image
               let targetScrollTop = 0;
               let headerCorrectHeight = 0;
               if ($(window).width() < '768') {
                  targetScrollTop = shadowTextMobile.getBoundingClientRect().top;
               } else {
                  targetScrollTop = shadowText.getBoundingClientRect().top;
               }
               let headerWraperHeight = headerWraper.getBoundingClientRect().height;
               if (headerWraperHeight == 120) {
                  headerCorrectHeight = 40
               } else if (headerWraperHeight == 100) {
                  headerCorrectHeight = 20
               } else {
                  headerCorrectHeight = 0
               }
               window.scrollTo({
                  top: targetScrollTop + headerCorrectHeight + window.pageYOffset - headerWraperHeight,
                  behavior: 'smooth'
               });
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
   /* const logosBlack = document.querySelectorAll('.black-image > img');
 
    logosBlack.forEach((logo) => {
       logo.addEventListener('mouseover', function (e) {
          e.target.closest('.black-image').nextElementSibling.firstElementChild.classList.add('active');
       });
    });
 
    logosBlack.forEach((logo) => {
       logo.addEventListener('mouseout', function (e) {
          e.target.closest('.black-image').nextElementSibling.firstElementChild.classList.remove('active');
       });
    });*/

   //file preview
   const formImage = document.getElementById('fileImage');
   const formPreview = document.getElementById('filePreview');
   const bookingForm = document.querySelector('#bookingform');
   formImage.addEventListener('change', function () {
      formPreview.innerHTML = '';
      formPreview.classList.add('load');
      if (this.files[0] == undefined) {
         formPreview.classList.remove('load');
      }
      uploadFile(formImage.files[0]);
   });
   function uploadFile(file) {
      if (file?.size > 2.5e+7 && bookingForm.classList.contains('ru')) {
         alert("Максимум 25 мегабайт");
         formPreview.classList.remove('load');
         $(".send-load").removeClass('active');
         return
      } else if (file?.size > 2.5e+7 && bookingForm.classList.contains('es')) {
         alert("el tamaño maximo 25");
         formPreview.classList.remove('load');
         return
      }
      let reader = new FileReader();
      reader.onload = function (e) {
         if (file.type.match('image.*')) {
            formPreview.innerHTML = `<img src="${e.target.result}" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('video.*')) {
            formPreview.innerHTML = `<video src="${e.target.result}" controls></video>`;
            formPreview.classList.remove('load');
         } else if (file.type.match('application/pdf')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/pdf.svg" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('application/msword')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/word.png" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('application/vnd.openxmlformats-officedocument.wordprocessingml.document')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/word.png" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('application/vnd.ms-excel')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/excel.svg" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('application/vnd.openxmlformats-officedocument.spreadsheetml.sheet')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/excel.svg" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.name.slice(-4) == ".rar") {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/rar.png" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.name.slice(-4) == ".zip") {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/zip.png" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.name.slice(-4) == ".psd") {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/psd.png" alt="">`;
            formPreview.classList.remove('load');
         } else if (file.type.match('text/plain')) {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/txt.svg" alt="">`;
            formPreview.classList.remove('load');
         } else {
            formPreview.innerHTML = `<img src="https://colorit.agency/public/img/form/file.svg" alt="">`;
            formPreview.classList.remove('load');
         }
      }
      reader.onerror = function (e) {
         if (bookingForm.classList.contains('ru')) {
            alert("Ошибка загрузки файла");
         } else if (bookingForm.classList.contains('es')) {
            alert("Error al cargar el archivo");
         }
      };
      if (file?.size) {
         reader.readAsDataURL(file);
      }

   }

   //popup
   const body = document.querySelector('#body');
   const popupBtn = document.querySelectorAll('.popup-btn');
   const AllPopup = document.querySelectorAll('.popup');
   const popup = document.querySelector('#popup');
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
      if ($(".send-load").hasClass("active")) {
         return false;
      } else {
         popup.classList.remove('open');
         popup.classList.remove('send');
         body.classList.remove('lock');
         $(".email-error").html('');
         $(".name-error").html('');
         $(".phone-error").html('');
         $(".file-error").html('');
         $(".service-error").html('');
         formPreview.innerHTML = '';
         formPreview.classList.remove('load');
         $(".send-load").removeClass('active');
      }
   }

   //popup cases
   const popupCaseBtn = document.querySelectorAll('.info-cases__tittle');

   popupCaseBtn.forEach((item) => {
      item.addEventListener('click', function (e) {
         let currentPopupId = e.target.dataset.id;
         let currentPopup = document.getElementById(currentPopupId);
         currentPopup.classList.add('open');
         body.classList.add('lock');
      });
   });

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
      if (!e.target.closest('.popup__content') && !e.target.classList.contains('popup-btn') && !e.target.classList.contains('info-cases__tittle')) {
         AllPopup.forEach((item) => {
            closePopup(item);
         })
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
   $("#bookingform").submit(function (event) {
      event.preventDefault();
      $(".send-load").addClass('active');
      $.ajax({
         type: 'POST',
         url: 'https://colorit.agency/public/feedback',
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
            $(".send-load").removeClass('active');
         },
         error: function (err) {
            $(".send-load").removeClass('active');
            if (bookingForm.classList.contains('es')) {
               if (err?.responseJSON?.errors?.email) {
                  let text = err.responseJSON.errors.email[0]
                  if (text == 'Не заполнено поле "email"') {
                     $(".email-error").html('El campo no esta rellenado "email"');
                  } else if (text == 'Указан не корректный email адрес') {
                     $(".email-error").html('Introduce un email válido');
                  }
               } else {
                  $(".email-error").html('');
               }
               if (err?.responseJSON?.errors?.name) {
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
               if (err?.responseJSON?.errors?.phone) {
                  let text = err.responseJSON.errors.phone[0]
                  if (text == 'Не заполнено поле "Номер телефона"') {
                     $(".phone-error").html('El campo no esta rellenado telefono');
                  } else if (text == 'Не верный формат номера телефона') {
                     $(".phone-error").html('Introduce un telefono válido');
                  }
               } else {
                  $(".phone-error").html('');
               } if (err?.responseJSON?.errors?.service) {
                  let text = err.responseJSON.errors.service[0]
                  if (text == 'Пожалуйста выберете тип услуги из списка') {
                     $(".service-error").html('Por favor, elige el servicio');
                  }
               } else {
                  $(".service-error").html('');
               }
               if (!err?.responseJSON && err.statusText) {
                  alert("Error al cargar el archivo");
                  formPreview.innerHTML = '';
               }
            } else {
               if (err?.responseJSON?.errors?.email) {
                  $(".email-error").html(err.responseJSON.errors.email[0]);
               } else {
                  $(".email-error").html('');
               }
               if (err?.responseJSON?.errors?.name) {
                  $(".name-error").html(err.responseJSON.errors.name[0]);
               } else {
                  $(".name-error").html('');
               }
               if (err?.responseJSON?.errors?.phone) {
                  $(".phone-error").html(err.responseJSON.errors.phone[0]);
               } else {
                  $(".phone-error").html('');;
               }
               if (err?.responseJSON?.errors?.filename) {
                  $(".file-error").html(err.responseJSON.errors.filename[0]);
               } else {
                  $(".file-error").html('');
               }
               if (err?.responseJSON?.errors?.service) {
                  $(".service-error").html(err.responseJSON.errors.service[0]);
               } else {
                  $(".service-error").html('');
               }
               if (!err?.responseJSON && err.statusText) {
                  alert("Ошибка загрузки файла");
                  formPreview.innerHTML = '';
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
         url: 'https://colorit.agency/public/feedback_page',
         data: new FormData(this),
         contentType: false,
         cache: false,
         processData: false,
         success: function () {
            $(".email-error").html('');
            $(".name-error").html('');
            $(".phone-error").html('');
            $("#popup").addClass("open");
            $("#popup").addClass("send");
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

   //Messendgers
   const messendgers = document.querySelector('.svg-messengers__icons');
   const messendgerBtn = document.querySelector('.svg-messengers__btn');
   const messendgerClose = document.querySelector('.svg-messengers__close');
   const messendgerOpen = document.querySelector('.svg-messengers__open');
   const massendgerLabelBtn = document.querySelector('.svg-messengers__label-btn');
   if (window.matchMedia("(pointer: fine)").matches) {
      messendgerBtn.addEventListener('click', function () {
         messendgers.classList.remove('active');
         messendgerClose.classList.remove('active');
         messendgerOpen.classList.remove('hide');
         massendgerLabelBtn.classList.remove('hide');
      });
      messendgerBtn.addEventListener('mouseenter', function () {
         activeMessengersForDesktop();
      });
      massendgerLabelBtn.addEventListener('click', function () {
         activeMessengersForDesktop();
      });
   } else if (window.matchMedia("(pointer: coarse)").matches) {
      messendgerBtn.addEventListener('click', function () {
         activeMessengersForMobile();
      });
      massendgerLabelBtn.addEventListener('click', function () {
         activeMessengersForMobile();
      });
   }

   function activeMessengersForDesktop() {
      messendgers.classList.add('active');
      messendgerClose.classList.add('active');
      messendgerOpen.classList.add('hide');
      massendgerLabelBtn.classList.add('hide');
   }

   function activeMessengersForMobile() {
      messendgers.classList.toggle('active');
      messendgerClose.classList.toggle('active');
      messendgerOpen.classList.toggle('hide');
      massendgerLabelBtn.classList.toggle('hide');
   }

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

   /*PORTFOLIO*/
   //==================================================================
   //Загрузка картинок при прокрутке страницы
   const portfolioImages = document.querySelectorAll('.portfolio__images');
   if (portfolioImages.length > 0) {
      function loadImage(tag, src) {
         const newImage = new Image();
         newImage.addEventListener('load', function () {
            tag.src = src;
         });
         newImage.src = src;
      }
      function observePortfolioImages(entries) {
         entries.forEach(entry => {
            if (entry.isIntersecting) {
               const el = entry.target;
               const img = el.querySelectorAll('img');
               img.forEach(item => loadImage(item, item.dataset.src));
            }
         });
      }
      const observer = new IntersectionObserver(observePortfolioImages);
      portfolioImages.forEach(image => observer.observe(image));
   };
   /*PORTFOLIO*/
   //==================================================================

   // Скрол к контактам
   /*   $(".menu-header__item-link").on("click", function (e) {
         e.preventDefault();
         //забираем идентификатор бока с атрибута href
         var id = $(this).attr('href'),
            //узнаем высоту от начала страницы до блока на который ссылается якорь
            top = $(id).offset().top;
         //анимируем переход на расстояние - top за 1500 мс
         $('body,html').animate({ scrollTop: top }, 1500);
      });*/

   //Send analitics evants
   const sendAnalytics = document.querySelectorAll('.send-analytics');
   sendAnalytics.forEach((item) => {
      item.addEventListener('click', function () {
         let isFirstClick = item.dataset.firstClick;
         if (isFirstClick == "true") {
            let eventName = item.dataset.eventName;
            gtag('event', eventName, {
               'Категория': "Клик",
            });
            item.dataset.firstClick = false;
         }
      })
   });

}