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
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/1.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/4.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/7.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/2.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/5.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/8.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/3.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/6.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/9.jpg')}}" alt="">
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
                     <img src="{{asset('img/portfolio/10.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/13.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/16.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/11.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/14.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/17.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/12.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/15.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/18.jpg')}}" alt="">
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
                     <img src="{{asset('img/portfolio/19.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/22.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/25.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/20.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/23.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/26.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/21.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/24.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/27.jpg')}}" alt="">
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
                     <img src="{{asset('img/portfolio/28.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/31.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/29.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/32.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/30.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img src="{{asset('img/portfolio/33.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
                  </div>
               </div>
            </div>
         </div>

      </div>
      <div class="portfolio__body-mobile mobile-portfolio">
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/1.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/2.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/3.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/4.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/5.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/6.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/7.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/8.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/9.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
            </div>
         </div>

         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/10.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/11.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/12.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/13.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/14.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/15.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/16.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/17.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/18.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
            </div>
         </div>

         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/19.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/20.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/21.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/22.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/23.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/24.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/25.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Печать на Одежде</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/26.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/27.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
            </div>
         </div>

         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/28.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Наружная Реклама</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/29.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Полиграфия</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/30.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">СММ</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/31.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Айдентика</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/32.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">Создание Сайтов</a>
            </div>
         </div>
         <div class="mobile-portfolio__item">
            <div class="portfolio__img">
               <img src="{{asset('img/portfolio/33.jpg')}}" alt="">
            </div>
            <div class="portfolio__link"><a class="information-footer__item-link" href="#">УФ Печать</a>
            </div>
         </div>
      </div>
   </div>
</secttion>
@endsection