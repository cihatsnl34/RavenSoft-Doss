const navMenu = document.getElementById("nav-menu");

let openMenu = () => {
  navMenu.style.display = "block";
  navMenu.style.transition = "all 2s";
};
let closeMenu = () => {
    navMenu.style.display = "none";
    navMenu.style.transition = "all 2s";
}

const swiper = new Swiper(".swiper", {
  // Optional parameters
  direction: "horizontal",
  loop: true,

  autoplay: {
    delay: 3000,
    disableOnInteraction: false,
  },

  // If we need pagination
  pagination: {
    el: ".swiper-pagination",
  },

  // Navigation arrows
  navigation: {
    nextEl: ".swiper-right",
    prevEl: ".swiper-left",
  },
});
