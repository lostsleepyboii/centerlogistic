const reviewsSlider = document.querySelector('.reviews');
const introSlider = document.querySelector('.reviews');

if (reviewsSlider) {
  new Swiper('.reviews', {
    speed: 800,
    slidesPerView: 1,
    autoplay: {
      delay: 5000,
    },
    spaceBetween: 30,
    pagination: {
      el: '.reviews__pagination',
      clickable: true,
    },
  });
}

if (introSlider) {
  new Swiper('.intro-slider', {
    speed: 800,
    slidesPerView: 1,
    watchSlidesVisibility: 'true',
    preloadImages: false,
    lazy: true,
    autoplay: {
      delay: 10000,
    },
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    navigation: {
      nextEl: '.intro-slider__btn--next',
      prevEl: '.intro-slider__btn--prev',
    },
  });
}