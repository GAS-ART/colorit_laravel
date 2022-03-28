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
      <img class="main-baner-top__lage" src="{{asset('img/smm/main.jpg')}}" alt="our cases">
      <img class="main-baner-top__small" src="{{asset('img/smm/main_small.jpg')}}" alt="our cases">
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
               <div class="why-smm__count">6</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.7')</div>
               <div class="why-smm__count">7</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.8')</div>
               <div class="why-smm__count">8</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.9')</div>
               <div class="why-smm__count">9</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.10')</div>
               <div class="why-smm__count">10</div>
            </li>
            <li class="why-smm__item">
               <div class="why-smm__text">@lang('printing.sercices.11')</div>
               <div class="why-smm__count">11</div>
            </li>
         </ul>
      </div>
   </div>
</section>
<section class="printing-products">
   <div class="printing-products__container">
      <div class="printing-products__body">
         <div class="printing-products__row">
            <div class="printing-products__item">
               <div class="printing-products__tittle">Печать на футболках</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/1.jpg')}}" alt="printing on clothes">
               </div>
            </div>

            <div class="printing-products__item">
               <div class="printing-products__tittle">Печать на свитшотах</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/2.jpg')}}" alt="printing on clothes">
               </div>
            </div>
         </div>
         <div class="printing-products__row">
            <div class="printing-products__item">
               <div class="printing-products__tittle">Печать на толстовках</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/3.jpg')}}" alt="printing on clothes">
               </div>
            </div>
            <div class="printing-products__item">
               <div class="printing-products__tittle">Печать на худи</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/4.jpg')}}" alt="printing on clothes">
               </div>
            </div>
         </div>
         <div class="printing-products__row">
            <div class="printing-products__item">
               <div class="printing-products__tittle">Одежда и спецодежда для салонов красоты</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/5.jpeg')}}" alt="printing on clothes">
               </div>
            </div>
            <div class="printing-products__item">
               <div class="printing-products__tittle">Одежда для медицинских клиник</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/6.jpeg')}}" alt="printing on clothes">
               </div>
            </div>
         </div>
         <div class="printing-products__row">
            <div class="printing-products__item">
               <div class="printing-products__tittle">Печать на одежде для пекарен</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/7.jpeg')}}" alt="printing on clothes">
               </div>
            </div>
            <div class="printing-products__item">
               <div class="printing-products__tittle">Одежда для ресторанов и баров</div>
               <div class="printing-products__item-img">
                  <img src="{{asset('img/printing/8.jpeg')}}" alt="printing on clothes">
               </div>
            </div>
         </div>
         <div class="printing-products__row">
            <div class="printing-products__item">
               <div class="printing-products__tittle">Одежда для строительных компаний</div>
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
      <div class="outdor-advertising-advantages__body ">
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
      <div class="smm-to-top__item">
         @lang('printing.whom.1')
      </div>
   </div>
</section>
@endsection