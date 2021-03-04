$(function () {
  if ($('.block-slider').length) {
    const slider = new Swiper('.swiper-recipes', {
      loop: true,
      slidesPerView: 1,
      effect: "fade",
      autoplay: true,
      fadeEffect: {
        crossFade: true
      },
      navigation: {
        prevEl: '.swiper-prev',
        nextEl: '.swiper-next'
      }
    })
  }
})
