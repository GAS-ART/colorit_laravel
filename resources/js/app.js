/* $('.scroll-top').click(function () {
       $("html, body").animate({ scrollTop: 0 }, "slow");
       return false;
    });*/


/*
const portfolioImages = document.querySelectorAll('.portfolio__img');
  if (portfolioImages.length > 0) {
     const options = {
        threshold: 0.5,
     }
     function loadImage(tag, src) {
        const newImage = new Image();
        newImage.addEventListener('load', function () {
           tag.src = src;
        });
        newImage.src = src;
     }
     function observePortfolioImages(entries) {
        entries.forEach(entry => {
           if (entry.isIntersecting) {
              const el = entry.target;
              const img = el.querySelector('img');
              el.classList.add('active');
              loadImage(img, img.dataset.src);
           }
        });
     }
     const observer = new IntersectionObserver(observePortfolioImages, options);
     portfolioImages.forEach(image => observer.observe(image));
  };
*/

/*
<section class="slider">
      <div class="slider__container">
         <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
               <!-- Slides -->
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/consulado.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>

                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/consulado.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/moonsters.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>

                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/moonsters.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/1.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/1.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/marista.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/marista.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/2.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/2.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/3.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/3.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/4.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/4.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/5.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/5_black.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/6.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/6_black.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/7.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/7.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/8.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/8_black.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/10.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/10.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/11.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/11.png')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
               </div>
               <div class="swiper-slide">
                  <div class="black-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/black/12.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
                  </div>
                  <div class="color-image">
                     <img class="swiper-lazy" data-src="{{asset('img/clients/color/12_black.jpg')}}" src="{{asset('img/1px.jpg')}}" alt="Our clients">
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
*/