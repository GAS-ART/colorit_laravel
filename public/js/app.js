(()=>{var e,r={218:(e,r,t)=>{"use strict";t(501);window.onload=function(){document.addEventListener("click",(function(o){o.target.closest(".header__burger")||o.target.classList.contains("header__icon-menu")||(e.classList.remove("active"),r.classList.remove("open"));o.target.closest(".language-btn")||t.classList.remove("active");o.target.closest(".popup__content")||o.target.classList.contains("popup-btn")||o.target.classList.contains("info-cases__tittle")||L.forEach((function(e){w(e)}));o.target.closest(".price-details-text")||o.target.classList.contains("price-details-text")||o.target.classList.contains("price-details-item")||E.forEach((function(e){e.classList.remove("active")}))}));var e=document.querySelector(".header__burger"),r=document.querySelector(".header__icon-menu");r.addEventListener("click",(function(t){r.classList.toggle("open"),e.classList.toggle("active"),t.preventDefault})),$(".burger-service-menu").next().slideUp(),$(".burger-service-menu").click((function(e){e.preventDefault(),$(e.target).next().slideToggle(300),$(e.target).toggleClass("active")}));var t=document.querySelector(".language-btn");t.addEventListener("click",(function(e){window.matchMedia("(pointer: coarse)").matches&&(t.classList.contains("active")||e.preventDefault(),t.classList.toggle("active"))}));var o=document.querySelector(".service-menu__img-link"),s=document.querySelectorAll(".menu-service__item-link"),n=document.querySelectorAll(".service-menu__img"),a=document.querySelector(".service-menu__shadow-text"),l=document.querySelector(".service-menu__shadow-text-mobile"),i=document.querySelector(".header__wraper");s&&s.forEach((function(e){window.matchMedia("(pointer: fine)").matches?e.addEventListener("mouseover",(function(e){var r=e.target.dataset.img,t=e.target.innerText;n.forEach((function(e){e.classList.remove("active"),e.dataset.img==r&&(e.classList.add("active"),a.textContent=t)}))})):window.matchMedia("(pointer: coarse)").matches&&e.addEventListener("click",(function(e){var r=e.target.dataset.img,t=e.target.dataset.link,s=e.target.innerText;n.forEach((function(e){e.classList.remove("active"),e.dataset.img==r&&(e.classList.add("active"),o.setAttribute("href",t),l.textContent=s)}));var c=0,d=0;c=$(window).width()<"768"?l.getBoundingClientRect().top:a.getBoundingClientRect().top;var m=i.getBoundingClientRect().height;d=120==m?40:100==m?20:0,window.scrollTo({top:c+d+window.pageYOffset-m,behavior:"smooth"}),e.preventDefault()}))}));var c=document.querySelector(".baner");if(c){var d=document.querySelector(".baner__start"),m=d.innerHTML,u='<span class="baner__start">'.concat(m,"</span>");!function(){var e,r,t,o=0,s=+getComputedStyle(d).marginRight.replace("px","");e=document.documentElement.clientWidth,r=d.clientWidth+s,o=(t=Math.ceil(e/r))>1?t*r+r+10:(t+1)*r+r,c.style.width=o+"px";for(var n=0;n<t;n++)d.insertAdjacentHTML("afterEnd",u);document.querySelectorAll(".baner__start").forEach((function(e){e.animate([{transform:"translate(0, 0)"},{transform:"translate(-"+"".concat(r)+"px, 0)"}],{duration:1e4,iterations:1/0})}))}()}var p=document.getElementById("fileImage"),v=document.getElementById("filePreview"),h=document.querySelector("#bookingform");p.addEventListener("change",(function(){v.innerHTML="",v.classList.add("load"),null==this.files[0]&&v.classList.remove("load"),function(e){if((null==e?void 0:e.size)>25e6&&h.classList.contains("ru"))return alert("Максимум 25 мегабайт"),v.classList.remove("load"),void $(".send-load").removeClass("active");if((null==e?void 0:e.size)>25e6&&h.classList.contains("es"))return alert("el tamaño maximo 25"),void v.classList.remove("load");var r=new FileReader;r.onload=function(r){e.type.match("image.*")?(v.innerHTML='<img src="'.concat(r.target.result,'" alt="">'),v.classList.remove("load")):e.type.match("video.*")?(v.innerHTML='<video src="'.concat(r.target.result,'" controls></video>'),v.classList.remove("load")):e.type.match("application/pdf")?(v.innerHTML='<img src="https://colorit.agency/public/img/form/pdf.svg" alt="">',v.classList.remove("load")):e.type.match("application/msword")||e.type.match("application/vnd.openxmlformats-officedocument.wordprocessingml.document")?(v.innerHTML='<img src="https://colorit.agency/public/img/form/word.png" alt="">',v.classList.remove("load")):e.type.match("application/vnd.ms-excel")||e.type.match("application/vnd.openxmlformats-officedocument.spreadsheetml.sheet")?(v.innerHTML='<img src="https://colorit.agency/public/img/form/excel.svg" alt="">',v.classList.remove("load")):".rar"==e.name.slice(-4)?(v.innerHTML='<img src="https://colorit.agency/public/img/form/rar.png" alt="">',v.classList.remove("load")):".zip"==e.name.slice(-4)?(v.innerHTML='<img src="https://colorit.agency/public/img/form/zip.png" alt="">',v.classList.remove("load")):".psd"==e.name.slice(-4)?(v.innerHTML='<img src="https://colorit.agency/public/img/form/psd.png" alt="">',v.classList.remove("load")):e.type.match("text/plain")?(v.innerHTML='<img src="https://colorit.agency/public/img/form/txt.svg" alt="">',v.classList.remove("load")):(v.innerHTML='<img src="https://colorit.agency/public/img/form/file.svg" alt="">',v.classList.remove("load"))},r.onerror=function(e){h.classList.contains("ru")?alert("Ошибка загрузки файла"):h.classList.contains("es")&&alert("Error al cargar el archivo")},null!=e&&e.size&&r.readAsDataURL(e)}(p.files[0])}));var f=document.querySelector("#body"),g=document.querySelectorAll(".popup-btn"),L=document.querySelectorAll(".popup"),b=document.querySelector("#popup"),S=document.querySelectorAll(".popup__close"),y=document.querySelector(".confirm-button");function w(e){if($(".send-load").hasClass("active"))return!1;e.classList.remove("open"),e.classList.remove("send"),f.classList.remove("lock"),$(".email-error").html(""),$(".name-error").html(""),$(".phone-error").html(""),$(".file-error").html(""),$(".service-error").html(""),v.innerHTML="",v.classList.remove("load"),$(".send-load").removeClass("active")}g.forEach((function(e){e.addEventListener("click",(function(e){e.preventDefault(),b.classList.add("open"),f.classList.add("lock")}))})),S.forEach((function(e){e.addEventListener("click",(function(e){e.preventDefault(),w(e.target.closest(".popup"))}))})),y.addEventListener("click",(function(){w(b)})),document.querySelectorAll(".info-cases__tittle").forEach((function(e){e.addEventListener("click",(function(e){var r=e.target.dataset.id;document.getElementById(r).classList.add("open"),f.classList.add("lock")}))}));var _=document.querySelectorAll(".price-details"),E=document.querySelectorAll(".price-details-text");_.forEach((function(e){e.addEventListener("click",(function(e){e.target.closest(".price-details").nextElementSibling.classList.toggle("active")}))}));var O=document.querySelector(".header");new IntersectionObserver((function(e){e[0].isIntersecting?e[0].target.classList.remove("_scroll"):e[0].target.classList.add("_scroll")})).observe(O),$("#bookingform").submit((function(e){e.preventDefault(),$(".send-load").addClass("active"),$.ajax({type:"POST",url:"https://colorit.agency/public/feedback",data:new FormData(this),contentType:!1,cache:!1,processData:!1,success:function(){$(".email-error").html(""),$(".name-error").html(""),$(".phone-error").html(""),$(".file-error").html(""),$(".service-error").html(""),$(".popup").addClass("send"),h.reset(),$(".select-form").select2("destroy"),$(".select-form").select2({placeholder:"Выберету услугу",minimumResultsForSearch:-1}),$(".send-load").removeClass("active")},error:function(e){if($(".send-load").removeClass("active"),h.classList.contains("es")){var r,t,o,s,n,a,l,i;if(null!=e&&null!==(r=e.responseJSON)&&void 0!==r&&null!==(t=r.errors)&&void 0!==t&&t.email){var c=e.responseJSON.errors.email[0];'Не заполнено поле "email"'==c?$(".email-error").html('El campo no esta rellenado "email"'):"Указан не корректный email адрес"==c&&$(".email-error").html("Introduce un email válido")}else $(".email-error").html("");if(null!=e&&null!==(o=e.responseJSON)&&void 0!==o&&null!==(s=o.errors)&&void 0!==s&&s.name){var d=e.responseJSON.errors.name[0];'Не заполнено поле "Имя"'==d?$(".name-error").html("El campo Nombre no esta rellenado"):'Поле "Имя" не должно содержать цифр'==d?$(".name-error").html('Campo "Nombre" no puede contener los números'):'Поле "Имя" должно содержать 2 или больше символов'==d?$(".name-error").html('Campo "Nombre" Debe contener 2 o mas simbolos'):'Поле "Имя" должно содержать не больше 80 символов'==d&&$(".name-error").html('Campo "Nombre" no puede contener mas de 80 simbolos')}else $(".name-error").html("");if(null!=e&&null!==(n=e.responseJSON)&&void 0!==n&&null!==(a=n.errors)&&void 0!==a&&a.phone){var m=e.responseJSON.errors.phone[0];'Не заполнено поле "Номер телефона"'==m?$(".phone-error").html("El campo no esta rellenado telefono"):"Не верный формат номера телефона"==m&&$(".phone-error").html("Introduce un telefono válido")}else $(".phone-error").html("");if(null!=e&&null!==(l=e.responseJSON)&&void 0!==l&&null!==(i=l.errors)&&void 0!==i&&i.service)"Пожалуйста выберете тип услуги из списка"==e.responseJSON.errors.service[0]&&$(".service-error").html("Por favor, elige el servicio");else $(".service-error").html("");null!=e&&e.responseJSON||!e.statusText||(alert("Error al cargar el archivo"),v.innerHTML="")}else{var u,p,f,g,L,b,S,y,w,_;null!=e&&null!==(u=e.responseJSON)&&void 0!==u&&null!==(p=u.errors)&&void 0!==p&&p.email?$(".email-error").html(e.responseJSON.errors.email[0]):$(".email-error").html(""),null!=e&&null!==(f=e.responseJSON)&&void 0!==f&&null!==(g=f.errors)&&void 0!==g&&g.name?$(".name-error").html(e.responseJSON.errors.name[0]):$(".name-error").html(""),null!=e&&null!==(L=e.responseJSON)&&void 0!==L&&null!==(b=L.errors)&&void 0!==b&&b.phone?$(".phone-error").html(e.responseJSON.errors.phone[0]):$(".phone-error").html(""),null!=e&&null!==(S=e.responseJSON)&&void 0!==S&&null!==(y=S.errors)&&void 0!==y&&y.filename?$(".file-error").html(e.responseJSON.errors.filename[0]):$(".file-error").html(""),null!=e&&null!==(w=e.responseJSON)&&void 0!==w&&null!==(_=w.errors)&&void 0!==_&&_.service?$(".service-error").html(e.responseJSON.errors.service[0]):$(".service-error").html(""),null!=e&&e.responseJSON||!e.statusText||(alert("Ошибка загрузки файла"),v.innerHTML="")}}})}));var N=document.querySelector("#pageForm");$("#pageForm").submit((function(e){e.preventDefault(),$.ajax({type:"POST",url:"https://colorit.agency/public/feedback_page",data:new FormData(this),contentType:!1,cache:!1,processData:!1,success:function(){$(".email-error").html(""),$(".name-error").html(""),$(".phone-error").html(""),$("#popup").addClass("open"),$("#popup").addClass("send"),N.reset()},error:function(e){if(N.classList.contains("es")){var r,t,o;if(null!==(r=e.responseJSON.errors)&&void 0!==r&&r.email){var s=e.responseJSON.errors.email[0];'Не заполнено поле "email"'==s?$(".email-error").html('El campo no esta rellenado "email"'):"Указан не корректный email адрес"==s&&$(".email-error").html("Introduce un email válido")}else $(".email-error").html("");if(null!==(t=e.responseJSON.errors)&&void 0!==t&&t.name){var n=e.responseJSON.errors.name[0];'Не заполнено поле "Имя"'==n?$(".name-error").html("El campo Nombre no esta rellenado"):'Поле "Имя" не должно содержать цифр'==n?$(".name-error").html('Campo "Nombre" no puede contener los números'):'Поле "Имя" должно содержать 2 или больше символов'==n?$(".name-error").html('Campo "Nombre" Debe contener 2 o mas simbolos'):'Поле "Имя" должно содержать не больше 80 символов'==n&&$(".name-error").html('Campo "Nombre" no puede contener mas de 80 simbolos')}else $(".name-error").html("");if(null!==(o=e.responseJSON.errors)&&void 0!==o&&o.phone){var a=e.responseJSON.errors.phone[0];'Не заполнено поле "Номер телефона"'==a?$(".phone-error").html("El campo no esta rellenado telefono"):"Не верный формат номера телефона"==a&&$(".phone-error").html("Introduce un telefono válido")}else $(".phone-error").html("")}else{var l,i,c;null!==(l=e.responseJSON.errors)&&void 0!==l&&l.email?$(".email-error").html(e.responseJSON.errors.email[0]):$(".email-error").html(""),null!==(i=e.responseJSON.errors)&&void 0!==i&&i.name?$(".name-error").html(e.responseJSON.errors.name[0]):$(".name-error").html(""),null!==(c=e.responseJSON.errors)&&void 0!==c&&c.phone?$(".phone-error").html(e.responseJSON.errors.phone[0]):$(".phone-error").html("")}}})}));var x="Выберету услугу";h.classList.contains("es")&&(x="Elige el servicio"),$(".select-form").select2({placeholder:x,minimumResultsForSearch:-1});var k=document.querySelector(".scroll-top");window.addEventListener("scroll",(function(){window.pageYOffset>1e3?k.classList.add("active"):k.classList.remove("active")})),k.addEventListener("click",(function(){window.scrollTo({top:0,behavior:"smooth"})}));var C=document.querySelector(".svg-messengers__icons"),q=document.querySelector(".svg-messengers__btn"),J=document.querySelector(".svg-messengers__close"),T=document.querySelector(".svg-messengers__open"),M=document.querySelector(".svg-messengers__label-btn");function D(){C.classList.add("active"),J.classList.add("active"),T.classList.add("hide"),M.classList.add("hide")}function H(){C.classList.toggle("active"),J.classList.toggle("active"),T.classList.toggle("hide"),M.classList.toggle("hide")}function P(){$(window).width()<="991.98"?($(".description-product__read-more-btn").next().slideUp(),$(".description-product__read-less-btn").removeClass("active"),$(".description-product__read-more-btn").removeClass("active")):($(".description-product__read-more-btn").next().slideDown(),$(".description-product__read-less-btn").removeClass("active"),$(".description-product__read-more-btn").removeClass("active"))}window.matchMedia("(pointer: fine)").matches?(q.addEventListener("click",(function(){C.classList.remove("active"),J.classList.remove("active"),T.classList.remove("hide"),M.classList.remove("hide")})),q.addEventListener("mouseenter",(function(){D()})),M.addEventListener("click",(function(){D()}))):window.matchMedia("(pointer: coarse)").matches&&(q.addEventListener("click",(function(){H()})),M.addEventListener("click",(function(){H()}))),$(".description-product__read-more-btn").click((function(e){$(e.target).next().slideDown(300),$(e.target).next().next().addClass("active"),$(e.target).addClass("active")})),$(".description-product__read-less-btn").click((function(e){$(e.target).prev().slideUp(300),$(e.target).prev().prev().removeClass("active"),$(e.target).removeClass("active")})),$(window).on("load resize",P),P();var A=document.querySelectorAll(".portfolio__images");if(A.length>0){var I=new IntersectionObserver((function(e){e.forEach((function(e){e.isIntersecting&&e.target.querySelectorAll("img").forEach((function(e){return r=e,t=e.dataset.src,(o=new Image).addEventListener("load",(function(){r.src=t})),void(o.src=t);var r,t,o}))}))}));A.forEach((function(e){return I.observe(e)}))}document.querySelectorAll(".send-analytics").forEach((function(e){e.addEventListener("click",(function(){if("true"==e.dataset.firstClick){var r=e.dataset.eventName;gtag("event",r,{Категория:"Клик"}),e.dataset.firstClick=!1}}))}))}},501:()=>{window.addEventListener("load",(function(e){document.querySelector(".swiper")&&new Swiper(".swiper",{observer:!0,observeParents:!0,slidesPerView:6,slidesPerGroup:1,slidesPerColumn:1,spaceBetween:120.5,preloadImages:!1,lazy:{loadPrevNext:!0},speed:800,simulateTouch:!0,pagination:{el:".swiper-pagination",clickable:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},breakpoints:{320:{slidesPerView:2,spaceBetween:20},768:{slidesPerView:3,spaceBetween:20},992:{slidesPerView:4,spaceBetween:40},1300:{slidesPerView:5},1700:{slidesPerView:6,spaceBetween:120.5}}})}))},184:()=>{}},t={};function o(e){var s=t[e];if(void 0!==s)return s.exports;var n=t[e]={exports:{}};return r[e](n,n.exports,o),n.exports}o.m=r,e=[],o.O=(r,t,s,n)=>{if(!t){var a=1/0;for(d=0;d<e.length;d++){for(var[t,s,n]=e[d],l=!0,i=0;i<t.length;i++)(!1&n||a>=n)&&Object.keys(o.O).every((e=>o.O[e](t[i])))?t.splice(i--,1):(l=!1,n<a&&(a=n));if(l){e.splice(d--,1);var c=s();void 0!==c&&(r=c)}}return r}n=n||0;for(var d=e.length;d>0&&e[d-1][2]>n;d--)e[d]=e[d-1];e[d]=[t,s,n]},o.n=e=>{var r=e&&e.__esModule?()=>e.default:()=>e;return o.d(r,{a:r}),r},o.d=(e,r)=>{for(var t in r)o.o(r,t)&&!o.o(e,t)&&Object.defineProperty(e,t,{enumerable:!0,get:r[t]})},o.o=(e,r)=>Object.prototype.hasOwnProperty.call(e,r),(()=>{var e={773:0,938:0};o.O.j=r=>0===e[r];var r=(r,t)=>{var s,n,[a,l,i]=t,c=0;if(a.some((r=>0!==e[r]))){for(s in l)o.o(l,s)&&(o.m[s]=l[s]);if(i)var d=i(o)}for(r&&r(t);c<a.length;c++)n=a[c],o.o(e,n)&&e[n]&&e[n][0](),e[n]=0;return o.O(d)},t=self.webpackChunk=self.webpackChunk||[];t.forEach(r.bind(null,0)),t.push=r.bind(null,t.push.bind(t))})(),o.O(void 0,[938],(()=>o(218)));var s=o.O(void 0,[938],(()=>o(184)));s=o.O(s)})();