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
         <a href="{{ route('printing.lang', ['locale' => __('main.set_lang')]) }}"
            class="links__current">@lang('services.printing_on_clothes')</a>
      </div>
   </div>
</section>
<section class="main-baner-top">
   <div class="main-baner-top__body">
      <img class="main-baner-top__lage" src="{{asset('img/service/print/print_1820_650s.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/service/print/print_310_350.jpg')}}" alt="our cases">
      <h1 class="main-baner-top__tittle">@lang('services.printing_on_clothes')</h1>
   </div>
</section>
<section class="outdor-advertising-about">
   <div class="outdor-advertising-about__container">
      <div class="outdor-advertising-about__body">
         @lang('printing.about')
      </div>
   </div>
   <h3 class="outdor-advertising-about__tittle">Colorit agency</h3>
</section>
<section class="outdor-advertising printing">
   <div class="outdor-advertising__container">
      <h2 class="outdor-advertising__tittle tittle">@lang('services.printing_on_clothes')</h2>
      <div class="outdor-advertising__row">
         <div class="outdor-advertising__item description-outdor-advertising">
            <div class="description-outdor-advertising__tittle">
               @lang('printing.print.digital_tittle')
            </div>
            <div class="description-outdor-advertising__text">
               @lang('printing.print.digital_text')
            </div>
         </div>
         <div class="outdor-advertising__item description-outdor-advertising">
            <div class="description-outdor-advertising__tittle">
               @lang('printing.print.thermal_transfer_tittle')
            </div>
            <div class="description-outdor-advertising__text">
               @lang('printing.print.thermal_transfer_text')
            </div>
         </div>
         <div class="outdor-advertising__item description-outdor-advertising">
            <div class="description-outdor-advertising__tittle">
               @lang('printing.print.embroidery_tittle')
            </div>
            <div class="description-outdor-advertising__text">
               @lang('printing.print.embroidery_text')
            </div>
         </div>
      </div>
   </div>
</section>
<section class="why-smm">
   <div class="why-smm__container">
      <div class="why-smm__body why-printing-body">
         <div class="printing-services">
            <h3 class="why-smm__tittle tittle">@lang('printing.sercices.tittle')</h3>
            <div class="printing-services__images">
               <div class="printing-services__img">
                  <img src="{{asset('img/printing/1.jpg')}}" alt="printing on clothes">
               </div>
               <div class="printing-services__img">
                  <img src="{{asset('img/printing/2.jpg')}}" alt="printing on clothes">
               </div>
               <div class="printing-services__img">
                  <img src="{{asset('img/printing/3.jpg')}}" alt="printing on clothes">
               </div>
               <div class="printing-services__img">
                  <img src="{{asset('img/printing/4.jpg')}}" alt="printing on clothes">
               </div>
               <div class="printing-services__img printing-services__img-big">
                  <img src="{{asset('img/printing/11.jpg')}}" alt="printing on clothes">
               </div>
               <div class="printing-services__img">
                  <img src="{{asset('img/printing/7.jpeg')}}" alt="printing on clothes">
               </div>
            </div>
         </div>
         <ul class="why-smm__list">
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.1')</div>
               <div class="why-smm__count">01</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.2')</div>
               <div class="why-smm__count">02</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.3')</div>
               <div class="why-smm__count">03</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.4')</div>
               <div class="why-smm__count">04</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.5')</div>
               <div class="why-smm__count">05</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.6')</div>
               <div class="why-smm__count">06</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.7')</div>
               <div class="why-smm__count">07</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.8')</div>
               <div class="why-smm__count">08</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.9')</div>
               <div class="why-smm__count">09</div>
            </li>
            <li class="why-smm__item why-smm-printing not-show-es @lang('main.current_lang_class')">
               <div class="why-smm__text">@lang('printing.sercices.10')</div>
               <div class="why-smm__count">10</div>
            </li>
            <li class="why-smm__item why-smm-printing not-show-es @lang('main.current_lang_class')">
               <div class="why-smm__text ">@lang('printing.sercices.11')</div>
               <div class="why-smm__count">11</div>
            </li>
         </ul>
      </div>
   </div>
</section>
<section class="printing-products">
   <div class="printing-products__container">
      <div class="printing-products__body">
         <div class="printing-products__row @lang('main.current_lang_class')">
            <div class="printing-products__item">
               <div class="printing-products__tittle">@lang('printing.sercices.1')</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/1.jpg')}}" alt="printing on clothes">
               </div>
            </div>

            <div class="printing-products__item">
               <div class="printing-products__tittle">@lang('printing.sercices.2')</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/2.jpg')}}" alt="printing on clothes">
               </div>
            </div>
         </div>
         <div class="printing-products__row @lang('main.current_lang_class')">
            <div class="printing-products__item">
               <div class="printing-products__tittle">@lang('printing.sercices.3')</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/3.jpg')}}" alt="printing on clothes">
               </div>
            </div>
            <div class="printing-products__item">
               <div class="printing-products__tittle">@lang('printing.sercices.4')</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/4.jpg')}}" alt="printing on clothes">
               </div>
            </div>
         </div>
         <div class="printing-products__row @lang('main.current_lang_class')">
            <div class="printing-products__item">
               <div class="printing-products__tittle">@lang('printing.sercices.5')</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/5.jpeg')}}" alt="printing on clothes">
               </div>
            </div>
            <div class="printing-products__item">
               <div class="printing-products__tittle">@lang('printing.sercices.6')</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/6.jpeg')}}" alt="printing on clothes">
               </div>
            </div>
         </div>
         <div class="printing-products__row @lang('main.current_lang_class')">
            <div class="printing-products__item">
               <div class="printing-products__tittle">@lang('printing.sercices.7')</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/7.jpeg')}}" alt="printing on clothes">
               </div>
            </div>
            <div class="printing-products__item">
               <div class="printing-products__tittle">@lang('printing.sercices.8')</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/8.jpeg')}}" alt="printing on clothes">
               </div>
            </div>
         </div>
         <div class="printing-products__row @lang('main.current_lang_class')">
            <div class="printing-products__item">
               <div class="printing-products__tittle">@lang('printing.sercices.9')</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/9.jpg')}}" alt="printing on clothes">
               </div>
            </div>
            <div class="printing-products__item">
            </div>
         </div>
      </div>
   </div>
</section>
<section class="outdor-advertising-advantages">
   <div class="outdor-advertising-advantages__container">
      <h3 class="outdor-advertising-advantages__tittle tittle">@lang('printing.advantages.tittle')</h3>
      <div class="outdor-advertising-advantages__body printing-advantages">
         <div class="outdor-advertising-advantages__item outdor-advertising-advantages-item">
            <div class="outdor-advertising-advantages-item__tittle">@lang('printing.advantages.equipment_tittle')
            </div>
            <div class="outdor-advertising-advantages-item__text">@lang('printing.advantages.equipment_text')</div>
         </div>
         <div class="outdor-advertising-advantages__item outdor-advertising-advantages-item">
            <div class="outdor-advertising-advantages-item__tittle">
               @lang('printing.advantages.team_tittle')</div>
            <div class="outdor-advertising-advantages-item__text">@lang('printing.advantages.team_text')
            </div>
         </div>
         <div class="outdor-advertising-advantages__item outdor-advertising-advantages-item">
            <div class="outdor-advertising-advantages-item__tittle">@lang('printing.advantages.clothes_tittle')
            </div>
            <div class="outdor-advertising-advantages-item__text">@lang('printing.advantages.clothes_text')
            </div>
         </div>
         <div class="outdor-advertising-advantages__item outdor-advertising-advantages-item">
            <div class="outdor-advertising-advantages-item__tittle">@lang('printing.advantages.experience_tittle')
            </div>
            <div class="outdor-advertising-advantages-item__text">@lang('printing.advantages.experience_text')</div>
         </div>
         <div class="outdor-advertising-advantages__item outdor-advertising-advantages-item">
            <div class="outdor-advertising-advantages-item__tittle">
               @lang('printing.advantages.convenient_tittle')</div>
            <div class="outdor-advertising-advantages-item__text">@lang('printing.advantages.convenient_text')
            </div>
         </div>
      </div>
   </div>
</section>
<section class="smm-to-top">
   <div class="smm-to-top__container">
      <div class="smm-to-top__tittle tittle">@lang('printing.whom.tittle')</div>
      <div class="smm-to-top__item smm-to-top__item-no-line">
         @lang('printing.whom.1')
      </div>
   </div>
</section>
<section class="outdor-advertising-portfolio">
   <img class="outdor-advertising-portfolio__desktop" src="{{asset('img/outdoor_advertising/cases.jpg')}}" alt="">
   <img class="outdor-advertising-portfolio__mobile" src="{{asset('img/outdoor_advertising/cases_small.jpg')}}" alt="">
   <div class="outdor-advertising-portfolio__body">
      <div class="outdor-advertising-portfolio__tittle">@lang('outdorAdvertising.portfolio.tittle')</div>
      <a href="{{ route('portfolio.lang', ['locale' => __('main.set_lang')]) }}" class="outdor-advertising-portfolio__btn">@lang('outdorAdvertising.portfolio.btn')</a>
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
@endsection