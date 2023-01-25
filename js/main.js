"use strict";

document.addEventListener("DOMContentLoaded", () => {
  /**
   * Слайдер
   */

  const swiper = new Swiper(".mySwiper", {
    pagination: {
      el: ".custom-pagination",
      type: "fraction",
    },
    navigation: {
      nextEl: ".custom-prev",
      prevEl: ".custom-next",
    },
    loop: true,
  });

  /**
   *Мобильное меню
   */

  const burger = document.querySelector(".burger");
  const navMobile = document.querySelector(".nav__mobile");
  const burgerClose = document.querySelector(".burger__close");

  burger.addEventListener("click", function () {
    burger.classList.toggle("burger__active");

    if (!navMobile.classList.contains("nav__mobile__active")) {
      navMobile.classList.add("nav__mobile__active");
    } else {
      navMobile.classList.remove("nav__mobile__active");
    }
  });
});
