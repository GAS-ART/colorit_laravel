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