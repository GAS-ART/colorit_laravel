@extends('layout')
@section('title','Заголовок страницы')
@section('description', 'Описание страницы')
@section('ogTitle','Заголовок страницы для месенджеров')
@section('ogDescription','Описание страницы для месенджеров')
@section('ogUrl','https://colorit.com')


@section('content')
<section class="links">
   <div class="links__container">
      <div class="links__body">
         <a href="{{ route('home.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__previous">@lang('services.main_link')</a>
         <a href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__current">@lang('burger.portfolio')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/portfolio/main.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/portfolio/main_small.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('burger.portfolio')</h1>
   </div>
</section>
<section class="outdor-advertising-about">
   <div class="outdor-advertising-about__container">
      <div class="outdor-advertising-about__body">
         @lang('portfolio.about')
      </div>
   </div>
   <h3 class="outdor-advertising-about__tittle">Colorit agency</h3>
</section>
<secttion class="portfolio">
   <div class="portfolio__container">
      <div class="portfolio__body">
         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img portfolio-description">
                     <img data-src="{{asset('img/portfolio/1.jpg')}}" src="#" alt="">
                     <!--  <div class="loading">
                        <div class="blue ball"></div>
                        <div class="red ball"></div>
                        <div class="yellow ball"></div>
                        <div class="green ball"></div>
                     </div>-->
                     <div class="portfolio-description__body">
                        <div class="portfolio-description__tittle">
                           <p>Проект</p>
                           <p>MARISTA</p>
                           <p>Было сделано</p>
                        </div>
                        <ul class="portfolio-description__list">
                           <li class="portfolio-description__item">Визитные карточки</li>
                           <li class="portfolio-description__item">Вывеска</li>
                           <li class="portfolio-description__item">Наружная реклама</li>
                           <li class="portfolio-description__item">СММ</li>
                        </ul>
                     </div>
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/4.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/7.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/2.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/5.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/8.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/3.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/6.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/9.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/10.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/13.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/16.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/11.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/14.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/17.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/12.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/15.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/18.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/19.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/22.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/25.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/20.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/23.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/26.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/21.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/24.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/27.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/28.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/31.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/34.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/29.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/32.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/35.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/30.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/33.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/36.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/37.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/40.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/43.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/38.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/41.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/44.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/39.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/42.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/45.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/46.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/49.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/52.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/47.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/50.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/53.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/48.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/51.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/54.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/55.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/58.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/61.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/56.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/59.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/62.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/57.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/60.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/63.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/64.jpg')}}" src="#" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</secttion>
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
                  <img src="{{asset('img/clients/black/1.png')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/1.png')}}" alt="Our clients">
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
                  <img src="{{asset('img/clients/black/4.png')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/4.png')}}" alt="Our clients">
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
                  <img src="{{asset('img/clients/black/7.png')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/7.png')}}" alt="Our clients">
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
                  <img src="{{asset('img/clients/black/11.png')}}" alt="Our clients">
               </div>
               <div class="color-image">
                  <img src="{{asset('img/clients/color/11.png')}}" alt="Our clients">
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
         </div>
         <!--pagination -->
         <div class="swiper-pagination"></div>

         <!--navigation buttons -->
         <div class="swiper-button-prev"></div>
         <div class="swiper-button-next"></div>
      </div>
   </div>
</section>
<section class="help">
   <div class="help__container">
      <div class="help__row">
         <div class="help__item">
            <h3 class="help__item-tittle tittle">@lang('form.page_form.outdorAdvertising')</h3>
            <div class="help__item-text">@lang('form.page_form.text')</div>
         </div>
         <div class="help__item">
            <div class="help__item-form">
               <form action="#" id="pageForm" class="form @lang('main.current_lang_class')" name="outdorAdvertising">
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
                  <div class="popup__button">
                     <button class="submit" type="submit">@lang('form.button')</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection