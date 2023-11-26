'use strict';

document.addEventListener('DOMContentLoaded', function () {
  const carousel = document.getElementById('myCarousel');
  const prevArrow = carousel.querySelector('.carousel-control-prev');
  const nextArrow = carousel.querySelector('.carousel-control-next');

  // Saat tombol panah kiri diklik
  prevArrow.addEventListener('click', function () {
      prevArrow.style.opacity = '1'; // Selalu tetap terlihat saat diklik
  });

  // Saat tombol panah kanan diklik
  nextArrow.addEventListener('click', function () {
      nextArrow.style.opacity = '1'; // Selalu tetap terlihat saat diklik
  });

  // Saat kursor masuk ke carousal
  carousel.addEventListener('mouseover', function () {
      prevArrow.style.opacity = '1'; // Selalu terlihat saat kursor berada di carousel
      nextArrow.style.opacity = '1';
  });

  // Saat kursor keluar dari carousal
  carousel.addEventListener('mouseleave', function () {
      prevArrow.style.opacity = '0'; // Menghilang saat kursor keluar
      nextArrow.style.opacity = '0';
  });
});


// modal variables
const modal = document.querySelector('[data-modal]');
const modalCloseBtn = document.querySelector('[data-modal-close]');
const modalCloseOverlay = document.querySelector('[data-modal-overlay]');

// modal function
const modalCloseFunc = function () { modal.classList.add('closed') }

// modal eventListener
modalCloseOverlay.addEventListener('click', modalCloseFunc);
modalCloseBtn.addEventListener('click', modalCloseFunc);





// notification toast variables
const notificationToast = document.querySelector('[data-toast]');
const toastCloseBtn = document.querySelector('[data-toast-close]');

// notification toast eventListener
toastCloseBtn.addEventListener('click', function () {
  notificationToast.classList.add('closed');
});





// mobile menu variables
const mobileMenuOpenBtn = document.querySelectorAll('[data-mobile-menu-open-btn]');
const mobileMenu = document.querySelectorAll('[data-mobile-menu]');
const mobileMenuCloseBtn = document.querySelectorAll('[data-mobile-menu-close-btn]');
const overlay = document.querySelector('[data-overlay]');

for (let i = 0; i < mobileMenuOpenBtn.length; i++) {

  // mobile menu function
  const mobileMenuCloseFunc = function () {
    mobileMenu[i].classList.remove('active');
    overlay.classList.remove('active');
  }

  mobileMenuOpenBtn[i].addEventListener('click', function () {
    mobileMenu[i].classList.add('active');
    overlay.classList.add('active');
  });

  mobileMenuCloseBtn[i].addEventListener('click', mobileMenuCloseFunc);
  overlay.addEventListener('click', mobileMenuCloseFunc);

}





// accordion variables
const accordionBtn = document.querySelectorAll('[data-accordion-btn]');
const accordion = document.querySelectorAll('[data-accordion]');

for (let i = 0; i < accordionBtn.length; i++) {

  accordionBtn[i].addEventListener('click', function () {

    const clickedBtn = this.nextElementSibling.classList.contains('active');

    for (let i = 0; i < accordion.length; i++) {

      if (clickedBtn) break;

      if (accordion[i].classList.contains('active')) {

        accordion[i].classList.remove('active');
        accordionBtn[i].classList.remove('active');

      }

    }

    this.nextElementSibling.classList.toggle('active');
    this.classList.toggle('active');

  });

}

