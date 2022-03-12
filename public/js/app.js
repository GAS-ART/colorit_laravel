/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/js/app.js":
/*!********************************!*\
  !*** ./resources/js/js/app.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _modules_sliders_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./modules/sliders.js */ "./resources/js/js/modules/sliders.js");
/* harmony import */ var _modules_sliders_js__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_modules_sliders_js__WEBPACK_IMPORTED_MODULE_0__);
 //import * as gasArt from './modules/functions.js';
// console.log(gasArt.block());
//import { isWebp } from './modules/functions.js';
//isWebp();



window.onload = function () {
  document.addEventListener('click', documentActions); //меню бургер

  var menuBody = document.querySelector('.header__burger');
  var burger = document.querySelector('.header__icon-menu');
  burger.addEventListener('click', function (e) {
    burger.classList.toggle('open');
    menuBody.classList.toggle('active');
    e.preventDefault;
  }); // переключения языков для устройств без мыши

  var languageBtn = document.querySelector('.language-btn'); // const languageLink = document.querySelectorAll('.language-btn__select > a');

  languageBtn.addEventListener('click', function (e) {
    if (window.matchMedia("(pointer: coarse)").matches) {
      // Устройства со стилусом
      if (!languageBtn.classList.contains('active')) {
        e.preventDefault();
      }

      languageBtn.classList.toggle('active');
    }
  }); //Смена картинок при наведени на пункты меню

  var imgLinkBtn = document.querySelector(".service-menu__img-link");
  var menuLink = document.querySelectorAll(".menu-service__item-link");
  var serviceImage = document.querySelectorAll(".service-menu__img");
  var shadowText = document.querySelector('.service-menu__shadow-text');
  var shadowTextMobile = document.querySelector('.service-menu__shadow-text-mobile');

  if (menuLink) {
    menuLink.forEach(function (link) {
      if (window.matchMedia("(pointer: fine)").matches) {
        link.addEventListener('mouseover', function (e) {
          var targetImg = e.target.dataset.img;
          var targetText = e.target.innerText;
          serviceImage.forEach(function (img) {
            img.classList.remove("active");

            if (img.dataset.img == targetImg) {
              img.classList.add("active");
              shadowText.textContent = targetText;
            }
          });
        });
      } else if (window.matchMedia("(pointer: coarse)").matches) {
        link.addEventListener("click", function (e) {
          var targetImg = e.target.dataset.img;
          var targetLink = e.target.dataset.link;
          var targetText = e.target.innerText;
          serviceImage.forEach(function (img) {
            img.classList.remove("active");

            if (img.dataset.img == targetImg) {
              img.classList.add("active");
              imgLinkBtn.setAttribute('href', targetLink);
              shadowTextMobile.textContent = targetText;
            }
          });
          e.preventDefault();
        });
      }
    });
  } //бегущая строка


  function animationBanerText() {
    var screenWidth = 0;
    var textWidth = 0;
    var spanQuantity = 0;
    var banerWidth = 0;
    var baner = document.querySelector('.baner');
    var banerStart = document.querySelector('.baner__start');
    var banerSpanStart = '<span class="baner__start">агентство эффективной рекламы</span>';
    screenWidth = document.documentElement.clientWidth;
    textWidth = baner.clientWidth;
    spanQuantity = Math.ceil(screenWidth / textWidth);

    if (spanQuantity > 1) {
      banerWidth = spanQuantity * textWidth + textWidth + 10;
    } else {
      banerWidth = (spanQuantity + 1) * textWidth + textWidth;
    }

    baner.style.width = banerWidth + "px";

    for (var i = 0; i < spanQuantity; i++) {
      banerStart.insertAdjacentHTML('afterEnd', banerSpanStart);
    }

    document.querySelectorAll('.baner__start').forEach(function (item) {
      item.animate([{
        transform: 'translate(0, 0)'
      }, {
        transform: 'translate(-' + "".concat(textWidth) + 'px, 0)'
      }], {
        duration: 10000,
        iterations: Infinity
      });
    });
  }

  animationBanerText(); //Цвет логотипов компаний при наведении

  var logosBlack = document.querySelectorAll('.black-image > img');
  logosBlack.forEach(function (logo) {
    logo.addEventListener('mouseover', function (e) {
      e.target.closest('.black-image').nextElementSibling.firstElementChild.classList.add('active');
    });
  });
  logosBlack.forEach(function (logo) {
    logo.addEventListener('mouseout', function (e) {
      e.target.closest('.black-image').nextElementSibling.firstElementChild.classList.remove('active');
    });
  }); //popup

  var body = document.querySelector('#body');
  var popupBtn = document.querySelectorAll('.popup-btn');
  var popup = document.querySelector('.popup');
  var popupClose = document.querySelectorAll('.popup__close');
  var confitmBtn = document.querySelector('.confirm-button');
  popupBtn.forEach(function (item) {
    item.addEventListener('click', function (e) {
      e.preventDefault();
      popup.classList.add('open');
      body.classList.add('lock');
    });
  });
  popupClose.forEach(function (item) {
    item.addEventListener('click', function (e) {
      e.preventDefault();
      closePopup(e.target.closest('.popup'));
    });
  });
  confitmBtn.addEventListener('click', function () {
    closePopup(popup);
  });

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

  function documentActions(e) {
    //убираем меню бургер
    if (!e.target.closest('.header__burger') && !e.target.classList.contains('header__icon-menu')) {
      menuBody.classList.remove('active');
      burger.classList.remove('open');
    } //Убираем отображение языков


    if (!e.target.closest('.language-btn')) {
      languageBtn.classList.remove('active');
    } //Убираем popup


    if (!e.target.closest('.popup__content') && !e.target.classList.contains('popup-btn')) {
      closePopup(popup);
    }
  } //Фиксация header


  var headerElement = document.querySelector('.header');
  var headerObserver = new IntersectionObserver(watchHeader);
  headerObserver.observe(headerElement);

  function watchHeader(entries) {
    if (entries[0].isIntersecting) {
      entries[0].target.classList.remove('_scroll');
    } else {
      entries[0].target.classList.add('_scroll');
    }
  } //Стилизация Select


  $('.select-form').select2({
    placeholder: 'Выберету услугу',
    minimumResultsForSearch: -1
  }); // Отпарвка данных из формы

  $("#bookingform").submit(function (event) {
    event.preventDefault();
    $.ajax({
      type: 'POST',
      url: 'http://127.0.0.1:8000/feedback',
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      success: function success() {
        $(".email-error").html('');
        $(".name-error").html('');
        $(".phone-error").html('');
        $(".file-error").html('');
        $(".service-error").html('');
        $(".popup").addClass("send");
        var formBooking = document.querySelector('#bookingform');
        formBooking.reset();
        $(".select-form").select2("destroy");
        $('.select-form').select2({
          placeholder: 'Выберету услугу',
          minimumResultsForSearch: -1
        });
      },
      error: function error(err) {
        var _err$responseJSON$err, _err$responseJSON$err2, _err$responseJSON$err3, _err$responseJSON$err4, _err$responseJSON$err5;

        if ((_err$responseJSON$err = err.responseJSON.errors) !== null && _err$responseJSON$err !== void 0 && _err$responseJSON$err.email) {
          $(".email-error").html(err.responseJSON.errors.email[0]);
        } else {
          $(".email-error").html('');
        }

        if ((_err$responseJSON$err2 = err.responseJSON.errors) !== null && _err$responseJSON$err2 !== void 0 && _err$responseJSON$err2.name) {
          $(".name-error").html(err.responseJSON.errors.name[0]);
        } else {
          $(".name-error").html('');
        }

        if ((_err$responseJSON$err3 = err.responseJSON.errors) !== null && _err$responseJSON$err3 !== void 0 && _err$responseJSON$err3.phone) {
          $(".phone-error").html(err.responseJSON.errors.phone[0]);
        } else {
          $(".phone-error").html('');
          ;
        }

        if ((_err$responseJSON$err4 = err.responseJSON.errors) !== null && _err$responseJSON$err4 !== void 0 && _err$responseJSON$err4.filename) {
          $(".file-error").html(err.responseJSON.errors.filename[0]);
        } else {
          $(".file-error").html('');
        }

        if ((_err$responseJSON$err5 = err.responseJSON.errors) !== null && _err$responseJSON$err5 !== void 0 && _err$responseJSON$err5.service) {
          $(".service-error").html(err.responseJSON.errors.service[0]);
        } else {
          $(".service-error").html('');
        }
      }
    });
  });
};

/***/ }),

/***/ "./resources/js/js/modules/sliders.js":
/*!********************************************!*\
  !*** ./resources/js/js/modules/sliders.js ***!
  \********************************************/
/***/ (() => {

function initSliders() {
  // Перечень слайдеров
  if (document.querySelector('.swiper')) {
    new Swiper('.swiper', {
      // Подключаем модули слайдера
      // для конкретного случая
      //modules: [Navigation, Pagination],

      /*
      effect: 'fade',
      autoplay: {
         delay: 3000,
         disableOnInteraction: false,
      },
      */
      observer: true,
      observeParents: true,
      slidesPerView: 6,
      slidesPerGroup: 1,
      slidesPerColumn: 1,
      spaceBetween: 120.5,
      //  autoHeight: true,
      speed: 800,
      //touchRatio: 1,
      simulateTouch: true,
      //loop: true,
      //preloadImages: false,
      //lazy: true,
      // Dotts
      pagination: {
        el: '.swiper-pagination',
        clickable: true
      },
      // Arrows
      navigation: {
        nextEl: '.swiper-button-prev',
        prevEl: '.swiper-button-next'
      },
      breakpoints: {
        320: {
          slidesPerView: 2,
          spaceBetween: 20 //     autoHeight: true,

        },
        768: {
          slidesPerView: 3,
          spaceBetween: 20
        },
        992: {
          slidesPerView: 4,
          spaceBetween: 40
        },
        1300: {
          slidesPerView: 5
        },
        1700: {
          slidesPerView: 6,
          spaceBetween: 120.5
        }
      }
    });
  }
}

window.addEventListener("load", function (e) {
  // Запуск инициализации слайдеров
  initSliders();
  /*   const prevBtn = document.querySelector('.swiper-button-prev');
     const nextBtn = document.querySelector('.swiper-button-next');
  
  
     prevBtn.addEventListener('click', () => {
        let slideActive = document.querySelector('.swiper-slide-prev');
        slideActive.classList.add('prev');
     });
     nextBtn.addEventListener('click', () => {
        let slideActive = document.querySelector('.swiper-slide-prev');
        slideActive.classList.remove('prev');
     });*/
  // Запуск инициализации скролла на базе слайдера (по классу swiper_scroll)
  //initSlidersScroll();
});

/***/ }),

/***/ "./resources/css/scss/style.scss":
/*!***************************************!*\
  !*** ./resources/css/scss/style.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	(() => {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = (module) => {
/******/ 			var getter = module && module.__esModule ?
/******/ 				() => (module['default']) :
/******/ 				() => (module);
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/app": 0,
/******/ 			"css/style": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/js/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style"], () => (__webpack_require__("./resources/css/scss/style.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;