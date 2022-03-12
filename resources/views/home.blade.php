@extends('layout')
@section('title','Заголовок страницы')
@section('description', 'Описание страницы')
@section('ogTitle','Заголовок страницы для месенджеров')
@section('ogDescription','Описание страницы для месенджеров')
@section('ogUrl','https://colorit.com')


@section('content')
<main class="page">
   <section class="service-menu">
      <div class="service-menu__shadow-text">наружная реклама</div>
      <div class="service-menu__container">
         <div class="service-menu__body">
            <div class="service-menu__menu menu-service">
               <nav class="menu-service__list">
                  <ul class="menu-service__items">
                     <li class="menu-service__item"><a href="#" class="menu-service__item-link"
                           data-img="outdoorAdvertising" data-link="#outdoorAdvertising">наружная реклама</a></li>
                     <li class="menu-service__item"><a href="#" class="menu-service__item-link" data-img="polygraphy"
                           data-link="#polygraphy">полиграфия</a></li>
                     <li class="menu-service__item"><a href="#" class="menu-service__item-link" data-img="identity"
                           data-link="#identity">айдентика</a></li>
                     <li class="menu-service__item"><a href="#" class="menu-service__item-link" data-img="smm"
                           data-link="#smm">смм</a>
                     </li>
                     <li class="menu-service__item"><a href="#" class="menu-service__item-link"
                           data-img="websiteDevelopment" data-link="#websiteDevelopment">создание сайтов</a></li>
                     <li class="menu-service__item"><a href="#" class="menu-service__item-link" data-img="uvPrinting"
                           data-link="#uvPrinting">уф
                           печать</a></li>
                     <li class="menu-service__item"><a href="#" class="menu-service__item-link"
                           data-img="printingOnClothes" data-link="#printingOnClothes">печать на одежде</a></li>
                  </ul>
               </nav>
               <div class="service-menu__social">
                  <a href="#" class="social-burger__meta _icon-facebook">
                  </a>
                  <a href="#" class="social-burger__instagram _icon-instagram">
                  </a>
               </div>
            </div>

            <div class="service-menu__images">
               <div class="service-menu__shadow-text-mobile">наружная реклама</div>
               <img class="service-menu__img active" src="{{asset('img/header/Outdoor_advertising.jpg')}}"
                  alt="Outdoor advertising" data-img="outdoorAdvertising">
               <img class="service-menu__img" src="{{asset('img/header/polygraphy.jpg')}}" alt="polygraphy"
                  data-img="polygraphy">
               <img class="service-menu__img" src="{{asset('img/header/identity.jpg')}}" alt="identity"
                  data-img="identity">
               <img class="service-menu__img" src="{{asset('img/header/smm.jpg')}}" alt="smm" data-img="smm">
               <img class="service-menu__img" src="{{asset('img/header/website_development.png')}}"
                  alt="website development" data-img="websiteDevelopment">
               <img class="service-menu__img" src="{{asset('img/header/UV_printing.jpg')}}" alt="UV printing"
                  data-img="uvPrinting">
               <img class="service-menu__img" src="{{asset('img/header/printing_on_clothes.jpg')}}"
                  alt="printing on clothes" data-img="printingOnClothes">
               <a href="#" class="service-menu__img-link">Подробнее</a>
            </div>
         </div>
      </div>
   </section>
   <section class="baner">
      <span class="baner__start">агентство эффективной рекламы</span>
   </section>
   <section class="about">
      <div class="about__container">
         <div class="about__body">
            <div class="about__about">Кто мы такие</div>
            <div class="about__text">
               <p>Привет. Мы <span>¨Colorit agency¨</span> креативное агентство полного цикла в
                  Барселоне и у нас есть все инструменты в продвижении вашего
                  бизнеса.</p>
               <p>Делаем рекламу которая будет эффективной, выводим бизнес в онлайн,
                  а также помогаем поднять уровень продаж.</p>
            </div>
         </div>
      </div>
   </section>
   <section class="service">
      <div class="service__container">
         <div class="service__tittle tittle">Наши услуги</div>
         <div class="service__body">
            <div class="service__row">
               <div class="service__vertical vertical-content">
                  <div class="vertical-content__img">
                     <a href="#"><img src="{{asset('img/service/Outdoor_advertising.jpg')}}"
                           alt="Outdoor advertising"></a>
                  </div>
                  <div class="vertical-content__link">
                     <a href="#" class="">Наружная Реклама</a>
                  </div>
               </div>
               <div class="service__horizontal horizontal-content">
                  <div class="horizontal-content__img">
                     <a href="#"><img src="{{asset('img/service/polygraphy.jpg')}}" alt="polygraphy"></a>
                  </div>
                  <div class="horizontal-content__link">
                     <div class="horizontal-content__link"><a href="#" class="">Полиграфия</a></div>
                  </div>
               </div>
            </div>

            <div class="service__row">
               <div class="service__horizontal horizontal-content">
                  <div class="horizontal-content__img">
                     <a href="#"><img src="{{asset('img/service/identity.jpg')}}" alt="identity"></a>
                  </div>
                  <div class="horizontal-content__link">
                     <a href="#" class="">Айдентика</a>
                  </div>
               </div>
               <div class="service__vertical vertical-content">
                  <div class="vertical-content__img">
                     <a href="#"><img src="{{asset('img/service/smm.jpg')}}" alt="smm"></a>
                  </div>
                  <div class="vertical-content__link">
                     <a href="#" class="">СММ</a>
                  </div>
               </div>
            </div>

            <div class="service__row">
               <div class="service__vertical vertical-content">
                  <div class="vertical-content__img">
                     <a href="#"><img src="{{asset('img/service/website_development.jpg')}}"
                           alt="website development"></a>
                  </div>
                  <div class="vertical-content__link">
                     <a href="#" class="">Создание Сайтов</a>
                  </div>
               </div>
               <div class="service__horizontal horizontal-content">
                  <div class="horizontal-content__img">
                     <a href="#"><img src="{{asset('img/service/UV_printing.jpg')}}" alt="UV printing"></a>
                  </div>
                  <div class="horizontal-content__link">
                     <a href="#" class="">УФ Печать</a>
                  </div>
               </div>
            </div>

            <div class="service__row">
               <div class="service__horizontal horizontal-content">
                  <div class="horizontal-content__img">
                     <a href="#"><img src="{{asset('img/service/printing_on_clothes.jpg')}}"
                           alt="printing on clothes"></a>
                  </div>
                  <div class="horizontal-content__link">
                     <a href="#" class="">Печать на Одежде</a>
                  </div>
               </div>
               <div class="service__vertical vertical-content">
                  <div class="vertical-content__img">
                     <a href="#"><img src="" alt=""></a>
                  </div>
                  <div class="vertical-content__link">
                     <a href="#" class=""></a>
                  </div>
               </div>
            </div>

         </div>
      </div>
   </section>
   <section class="cases">
      <div class="cases__container">
         <div class="cases__titile tittle">Наши кейсы</div>
      </div>
      <div class="cases__images">
         <div class="cases__row">
            <div class="cases__body">
               <picture>
                  <source srcset="{{asset('img/cases/1small.jpg')}}" sizes="(max-width: 767.98px)">
                  <img src="{{asset('img/cases/1.jpg')}}" alt="our cases">
               </picture>
               <div class="cases__info info-cases">
                  <div class="info-cases__body">
                     <div class="info-cases__tittle">Проект "Bike Parts"</div>
                     <ul class="info-cases__items">
                        <li class="info-cases__item">- Разработка логотипа и фирменного</li>
                        <li class="info-cases__item">- Вывеска лайтбокс и ее монтаж</li>
                        <li class="info-cases__item">- Цифровые визитки</li>
                        <li class="info-cases__item">- Изготовление футболок</li>
                     </ul>
                     <button class="info-cases__btn">Заказать</button>
                  </div>
               </div>
            </div>
            <div class="cases__body">
               <picture>
                  <source srcset="{{asset('img/cases/3small.jpg')}}" sizes="(max-width: 767.98px)">
                  <img src="{{asset('img/cases/3.jpg')}}" alt="our cases">
               </picture>
               <div class="cases__info info-cases">
                  <div class="info-cases__body">
                     <div class="info-cases__tittle">Проект "Bike Parts"</div>
                     <ul class="info-cases__items">
                        <li class="info-cases__item">- Разработка логотипа и фирменного</li>
                        <li class="info-cases__item">- Вывеска лайтбокс и ее монтаж</li>
                        <li class="info-cases__item">- Цифровые визитки</li>
                        <li class="info-cases__item">- Изготовление футболок</li>
                     </ul>
                     <button class="info-cases__btn">Заказать</button>
                  </div>
               </div>
            </div>
         </div>
         <div class="cases__row">
            <div class="cases__body">
               <picture>
                  <source srcset="{{asset('img/cases/2small.jpg')}}" sizes="(max-width: 767.98px)">
                  <img src="{{asset('img/cases/2.jpg')}}" alt="our cases">
               </picture>
               <div class="cases__info info-cases">
                  <div class="info-cases__body">
                     <div class="info-cases__tittle">Проект "Bike Parts"</div>
                     <ul class="info-cases__items">
                        <li class="info-cases__item">- Разработка логотипа и фирменного</li>
                        <li class="info-cases__item">- Вывеска лайтбокс и ее монтаж</li>
                        <li class="info-cases__item">- Цифровые визитки</li>
                        <li class="info-cases__item">- Изготовление футболок</li>
                     </ul>
                     <button class="info-cases__btn">Заказать</button>
                  </div>
               </div>
            </div>
            <div class="cases__body">
               <picture>
                  <source srcset="{{asset('img/cases/4small.jpg')}}" sizes="(max-width: 767.98px)">
                  <img src="{{asset('img/cases/4.jpg')}}" alt="our cases">
               </picture>
               <div class="cases__info info-cases">
                  <div class="info-cases__body">
                     <div class="info-cases__tittle">Проект "Bike Parts"</div>
                     <ul class="info-cases__items">
                        <li class="info-cases__item">- Разработка логотипа и фирменного</li>
                        <li class="info-cases__item">- Вывеска лайтбокс и ее монтаж</li>
                        <li class="info-cases__item">- Цифровые визитки</li>
                        <li class="info-cases__item">- Изготовление футболок</li>
                     </ul>
                     <button class="info-cases__btn">Заказать</button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <section class="slider">
      <div class="slider__container">
         <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
               <!-- Slides -->
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/consulado.png')}}" alt="Our clients">
                  </div>

                  <div class="color-image">
                     <img src="{{asset('img/clients/color/consulado.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/moonsters.jpg')}}" alt="Our clients">
                  </div>

                  <div class="color-image">
                     <img src="{{asset('img/clients/color/moonsters.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/1.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/1.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/marista.png')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/marista.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/2.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/2.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/3.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/3.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/4.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/4.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/5.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/5_black.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/6.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/6_black.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/7.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/7.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/8.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/8_black.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/10.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/10.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/11.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/11.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/12.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/12_black.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img src="{{asset('img/clients/black/13.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img src="{{asset('img/clients/color/13_black.jpg')}}" alt="Our clients">
                  </div>
               </div>
            </div>
            <!--pagination -->
            <div class="swiper-pagination"></div>

            <!--navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
         </div>
      </div>
   </section>
   <section class="experience">
      <div class="experience__container">
         <div class="experience__body">
            <div class="experience__text">
               <p>Нам есть что рассказать!</p>

            </div>
            <div class="experience__callback callback">
               <div class="callback__text">
                  <p>Оставляй заявку и мы перезвоним</p>
               </div>
               <div class="callback__btn popup-btn"><button class="popup-btn" type="button">Оставить заявку</button></div>
            </div>
         </div>

      </div>
   </section>
</main>
@endsection