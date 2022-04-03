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
      <h2 class="review__tittle tittle">Отзывы</h2>
      <div class="review__items">
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
         <div class="review__item item-review">
            <div class="item-review__text ">
               <p>Приятно иметь дело с профессионалами! Большое спасибо за качество, быстрое исполнение и понимание!
               </p>
            </div>
            <div class="item-review__author">
               <p>Inesa <span>DUO special</span></p>
            </div>
         </div>
      </div>

      <div class="review__items">
         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Gracias por vuestro colaboración y trabajo rápido y correcto!!! EQUIPO FLORATELIE</p>
            </div>
            <div class="item-review__author">
               <p>Ksenia Chalaya <span>¨Floratelie¨</span></p>
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Отличные и надежные ребята. Работа выполнено отлично и в срок! Рекомендую!</p>
               <p>Buen trabajo e buen servicio! Recomiendo!</p>
            </div>
            <div class="item-review__author">
               <p>Alina Kabakova <span></span></p>
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Recomendable!!! lo repito hacer pedidos seguro! Trabajo excelente! Además me han hecho diseño que
                  quería y ha quedado precioso Estoy muy contenta con el servicio y calidad Atención perfecta!!!
                  Muchas gracias .</p>
            </div>
            <div class="item-review__author">
               <p>Maria <span>"Studio Maria Zubko"</span></p>
            </div>
         </div>
      </div>


      <div class="review__items">
         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Заказывали футболки с логотипом. Качество просто супер. Рекомендую</p>
            </div>
            <div class="item-review__author">
               <p>Tatiana <span>¨Gas Auto¨</span></p>
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Работа выполнена качественно и в срок , Найдено техническое решение в невероятно сложной ситуации,
                  настоящие профессионалы! Благодарна! Удачи вам и процветания!</p>
            </div>
            <div class="item-review__author">
               <p>Anna <span>¨Laboratorio de estetica¨</span></p>
            </div>
         </div>
         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Пользуемся услугами Colorit уже третий год, очень довольны качеством! Ответственные исполнители и
                  отличная и качество печати. Спасибо</p>
            </div>
            <div class="item-review__author">
               <p>Лидия <span>¨Li.Beauty Lounge¨</span></p>
            </div>
         </div>
      </div>

      <div class="review__items">

         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Мы сотрудничаем с компанией Colorit agency уже более 1,5 лет. Наша компания занимается декором и
                  флористикой праздничных мероприятий и пространств, поэтому заказы наши были оооочень разными
                  начиная от визиток и наклеек , заканчивая ростовыми фигурами и 42метровым баннером. Команда всегда
                  на связи, относится с пониманием к экстренным заказам (а в нашей сфере форс-мажор дело привычное),
                  дизайнеры слушают , а главное слышат все пожелания, в общем все Чётко, Качественно, Быстро и
                  Своевременно. Рекомендуем</p>
            </div>
            <div class="item-review__author">
               <p>Svetlana <span>¨Globos bcn¨</span></p>
            </div>
         </div>

         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Excelente trabajo del diseño de imagen corporativa para nuestra tienda. Da gusto tratar con los
                  profesionales. Convertiremos al cliente fijo sin duda! 100% recomendado!</p>
            </div>
            <div class="item-review__author">
               <p>Diana <span>¨Bike Parts BCN¨</span></p>
            </div>
         </div>

         <div class="review__item item-review">
            <div class="item-review__text">
               <p>Все качественно и в обозначенные сроки! Хотим поблагодарить команду Colorit agency за предоставленные
                  услуги в изготовлении подарочных сертификатов.</p>
            </div>
            <div class="item-review__author">
               <p>Vitaliy <span>¨SV Detailing¨</span></p>
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
      </div>
   </div>
</section>
@endsection