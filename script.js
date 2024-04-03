// selecting the navbar and menu
let navbar = document.querySelector('.header .navbar');
let menu = document.querySelector('#menuBtn');




// onclick function for menu
menu.onclick = () =>{
    // menu to toggle to fa timws meaning x icon
menu.classList.toggle('fa-times');
// select active from css to connect to navbar
navbar.classList.toggle('active');
};
// whenever i scroll
window.onscroll = () =>{
    // menu to toggle to fa timws meaning x icon
menu.classList.remove('fa-times');
// select active from css to connect to navbar
navbar.classList.remove('active');
};

//swiper
let swiper = new Swiper(".homeSlides", {
    
    loop:true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

let swiperGallery = new wiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });