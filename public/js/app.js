let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
}

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
    navbar.classList.remove('active');
    cartItem.classList.remove('active');
}

let cartItem = document.querySelector('.cart-items-container');

document.querySelector('#cart-btn').onclick = () =>{
    cartItem.classList.toggle('active');
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
    searchForm.classList.remove('active');
    cartItem.classList.remove('active');
};

var swiper = new Swiper('.menu-slider', {
    spaceBetween: 20,
    grabCursor: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      540: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

var swiper = new Swiper('.product-slider', {
    spaceBetween: 20,
    grabCursor: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      540: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

var swiper = new Swiper('.blogs-slider', {
    spaceBetween: 20,
    grabCursor: true,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    breakpoints: {
      540: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
    },
  });

  $(document).ready(function () {

    // $('.icons #login-btn').click(function () {
    //   $('.login-form').addClass('popup');
    // });
  
    // $('.login-form form .fa-times').click(function () {
    //   $('.login-form').removeClass('popup');
    // });
    $('.menu .box .btn').click(function () {
        $('.form-beli').addClass('popup');
      });
    
      $('.form-beli form .fa-times').click(function () {
        $('.form-beli').removeClass('popup');
      });

    $('.products .box').click(function () {
        $('.form-beli').addClass('popup');
      });
    
      $('.form-beli form .fa-times').click(function () {
        $('.form-beli').removeClass('popup');
      });
  
    $(window).on('scroll', function () {
      $('section').each(function () {
        let top = $(window).scrollTop();
        let height = $(this).height();
        let id = $(this).attr('id');
        let offset = $(this).offset().top;
        (top > offset && top < offset + height);
  
        if (top > offset && top < offset + height) {
          $('.navbar a').removeClass('active');
          $('.navbar').find(`[href="#${id}"]`).addClass('active');
        }
      });
    });
  });