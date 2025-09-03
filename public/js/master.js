   function toggleMenu() {
      const menu = document.getElementById('mobileMenu');
      menu.classList.toggle('hidden');
    }



document.addEventListener('DOMContentLoaded', function () {
    new Swiper('.testimonials-swiper', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      grabCursor: true,
    });
  });


 document.addEventListener('DOMContentLoaded', function () {
    new Swiper(".projects-swiper", {
      loop: true,
      spaceBetween: 30,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
    });
  });