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
         <a href="{{ route('about.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__current">@lang('burger.about_us')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/about_us/about.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/about_us/about_small.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('burger.about_us')</h1>
   </div>
</section>
<section class="outdor-advertising-about">
   <div class="outdor-advertising-about__container">
      <div class="outdor-advertising-about__body">
         @lang('about.about')
      </div>
   </div>
   <h3 class="outdor-advertising-about__tittle">Colorit agency</h3>
</section>
<section class="review">
   <div class="review__container">
      <h2 class="review__tittle tittle">@lang('about.reviews.title')</h2>
      <div class="review__items">
         <div class="review__item item-review">
            <div class="item-review__text">
               @lang('about.reviews.ecotown.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.ecotown.name')
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text item-price-smm">
               @lang('about.reviews.melanta.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.melanta.name')
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text ">
               @lang('about.reviews.duo.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.duo.name')
            </div>
         </div>
      </div>

      <div class="review__items">
         <div class="review__item item-review">
            <div class="item-review__text">
               @lang('about.reviews.floratelie.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.floratelie.name')
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text">
               @lang('about.reviews.kabakova.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.kabakova.name')
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text">
               @lang('about.reviews.zubko.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.zubko.name')
            </div>
         </div>
      </div>


      <div class="review__items">
         <div class="review__item item-review">
            <div class="item-review__text">
               @lang('about.reviews.gas_auto.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.gas_auto.name')
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text">
               @lang('about.reviews.estetica.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.estetica.name')
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text">
               @lang('about.reviews.li_beauty.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.li_beauty.name')
            </div>
         </div>
      </div>

      <div class="review__items">
         <div class="review__item item-review">
            <div class="item-review__text">
               @lang('about.reviews.globos.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.globos.name')
            </div>
         </div>
      </div>

      <div class="review__items">

         <div class="review__item item-review">
            <div class="item-review__text">
               @lang('about.reviews.bike_parts.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.bike_parts.name')
            </div>
         </div>

         <div class="review__item item-review">
            <div class="item-review__text">
               @lang('about.reviews.detailing.text')
            </div>
            <div class="item-review__author">
               @lang('about.reviews.detailing.name')
            </div>
         </div>
      </div>

      <!--      <div class="review__new-style">
         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Colorit agency - лучшее рекламное агентство в Барселоне.</p>
               <p>Работаем вместе уже 3 года, очень довольны.</p>
            </div>
            <div class="item-review__author">
               <p>Вячеслав <span>¨Ecotown¨</span></p>
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text item-price-smm">
               <p>Я работала с ребятами по вывескам и винилу. Очень осталась довольна, ребята профессионалы,
                  отзывчивы и быстро реагируют на просьбы! Рекомендую</p>
            </div>
            <div class="item-review__author">
               <p>Анна salon de estetica <span>¨Melanta¨</span></p>
            </div>
         </div>
      </div>
      <div class="review__new-style">
         <div class="review__item item-review">
            <div class="item-review__text ">
               <p>Приятно иметь дело с профессионалами! Большое спасибо за качество, быстрое исполнение и понимание!
               </p>
            </div>
            <div class="item-review__author">
               <p>Inesa <span>DUO special</span></p>
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Gracias por vuestro colaboración y trabajo rápido y correcto!!! EQUIPO FLORATELIE</p>
            </div>
            <div class="item-review__author">
               <p>Ksenia Chalaya <span>¨Floratelie¨</span></p>
            </div>
         </div>
      </div>
      <div class="review__new-style">
         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Colorit agency - лучшее рекламное агентство в Барселоне.</p>
               <p>Работаем вместе уже 3 года, очень довольны.</p>
            </div>
            <div class="item-review__author">
               <p>Вячеслав <span>¨Ecotown¨</span></p>
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text item-price-smm">
               <p>Я работала с ребятами по вывескам и винилу. Очень осталась довольна, ребята профессионалы,
                  отзывчивы и быстро реагируют на просьбы! Рекомендую</p>
            </div>
            <div class="item-review__author">
               <p>Анна salon de estetica <span>¨Melanta¨</span></p>
            </div>
         </div>
      </div>
      <div class="review__new-style">
         <div class="review__item item-review">
            <div class="item-review__text ">
               <p>Приятно иметь дело с профессионалами! Большое спасибо за качество, быстрое исполнение и понимание!
               </p>
            </div>
            <div class="item-review__author">
               <p>Inesa <span>DUO special</span></p>
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Gracias por vuestro colaboración y trabajo rápido y correcto!!! EQUIPO FLORATELIE</p>
            </div>
            <div class="item-review__author">
               <p>Ksenia Chalaya <span>¨Floratelie¨</span></p>
            </div>
         </div>
      </div> -->
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
<section class="smm-portfolio">
   <div class="smm-portfolio__body">
      <div class="smm-portfolio__img">
         <img src="{{asset('img/smm/portfolio.jpg')}}" alt="">
      </div>
      <div class="smm-portfolio__content">
         <div class="smm-portfolio__tittle tittle">@lang('smm.portfolio.tittle')</div>
         <a class=" smm-portfolio__link"
            href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}">@lang('smm.portfolio.btn')</a>
      </div>
   </div>
</section>
@endsection