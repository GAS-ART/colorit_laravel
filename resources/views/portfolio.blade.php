@extends('layout')
@section('title', __('tittles.portfolio.title'))
@section('description', __('tittles.portfolio.description'))
@section('ogTitle', __('tittles.portfolio.ogTitle'))
@section('ogDescription', __('tittles.portfolio.ogDescription'))
@section('ogUrl', __('tittles.portfolio.ogUrl'))


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
                     <img data-src="{{asset('img/portfolio/1.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                     <!--  <div class="loading">
                        <div class="blue ball"></div>
                        <div class="red ball"></div>
                        <div class="yellow ball"></div>
                        <div class="green ball"></div>
                     </div>-->
                     <!--   <div class="portfolio-description__body">
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
                     </div> -->
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Neon_sign_for_beauty_salon')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/4.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Production_of_a_signboard_with_illuminated_letters')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/7.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Printing_on_plastic')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/2.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_making')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/5.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.PVC_logo')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/8.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.T-shirt_branding')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/3.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Installation_of_a_sign')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/6.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Illuminated_sign')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/9.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Signboard_for_a_real_estate_agency')</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/10.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Volumetric_illuminated_letters')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/13.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.UV_Printing_on_plastic')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/16.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_development')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/11.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Neon')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/14.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.led_signboard')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/17.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Making_stickers')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/12.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_development')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/15.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.brand_wall_print')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/18.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Creation_of_a_logo')</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/19.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Making_a_sign')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/22.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Volumetric_illuminated_letters')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/25.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_design_for_a_beauty_salon')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/20.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.light_box_sign')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/23.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_development')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/26.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.UV_printing_on_plastic')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/21.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Volumetric_letters')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/24.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Making_letters_from_aluminum')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/27.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Creating_a_corporate_identity')</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/28.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Making_a_neon_sign')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/31.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_design_for_a_beauty_salon')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/34.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.window_dressing')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/29.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Embossed_business_cards')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/32.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_design_for_a_clinic')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/35.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Manufacture_of_the_stand_arch')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/30.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Vinyl_film')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/33.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Acrylic_plate_making')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/36.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Production_of_floor_stands')</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/37.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Making_letters_from_PVC')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/40.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Stand_for_event_agency')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/43.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_development')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/38.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Sponsor_stands')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/41.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Production_of_a_signboard_illuminated_with_three_dimensional_letters')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/44.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Wood_print_Menu_making')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/39.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_design_for_a_doctor')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/42.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Car_branding')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/45.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Making_a_light_box')</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/46.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Black_acrylic_logo')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/49.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_design_for_a_construction_company')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/52.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Printing_on_plastic_and_installation')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/47.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_design_for_a_cafeteria')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/50.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Illuminated_signboard_with_three_dimensional_letters')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/53.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.T_shirt_production')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/64.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Business_cards_with_3D_varnish_gold')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/51.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Signboard_for_a_beauty_salon')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/54.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Reception_visualization')</p>
                  </div>
               </div>
            </div>
         </div>

         <div class="portfolio__images">
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/55.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Film_window_dressing')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/58.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Magazine_development')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/61.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Signboard_with_light_and_letters')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/56.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_development')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/59.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Corporate_identity_development_for_the_catalog')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/62.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Making_a_logo_from_acrylic')</p>
                  </div>
               </div>
            </div>
            <div class="portfolio__row">
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/57.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_design_for_Ukrainian_association')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/60.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Embossed_business_cards')</p>
                  </div>
               </div>
               <div class="portfolio__item">
                  <div class="portfolio__img">
                     <img data-src="{{asset('img/portfolio/63.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="">
                  </div>
                  <div class="portfolio__link">
                     <p>@lang('portfolio.Logo_design_for_an_event_agency')</p>
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

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/consulado.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">


               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/moonsters.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/1.png')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/marista.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/2.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/3.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/4.png')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/5_black.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/6_black.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/7.png')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/8_black.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/10.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/11.png')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
               </div>
            </div>
            <div class="swiper-slide">

               <div class="color-image">
                  <img class="swiper-lazy" data-src="{{asset('img/clients/color/12_black.jpg')}}"
                     src="{{asset('img/1px.jpg')}}" alt="Our clients">
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
                  <div class="popup__button-form">
                     <button class="submit" type="submit">@lang('form.button')</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection