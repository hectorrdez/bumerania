 const swiper = new Swiper('.swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  // If we need pagination
  pagination: {
    el: '.swiper-pagination',
  },

  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  options:{
    effect:'panorama',
    slidesPreview: 1.5,
    centeredSlides: true,
    panorama:{
        depth:150,
        rotate:45,
    }
}
});