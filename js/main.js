"use strict";var body=document.querySelector("body"),burger=function(){var e=document.querySelector(".burger"),t=document.querySelector(".nav"),o=t.querySelectorAll(".nav__link");e.addEventListener("click",(function(){e.classList.toggle("active"),t.classList.toggle("show"),body.classList.toggle("lock")})),o.forEach((function(o){o.addEventListener("click",(function(){e.classList.remove("active"),t.classList.remove("show"),body.classList.remove("lock")}))}))};burger();var header=document.querySelector(".header");window.addEventListener("scroll",(function(){header.classList.toggle("sticky",window.scrollY>0)}));body=document.querySelector("body");var modalCallback=function(){var e=document.querySelector("#modal-callback");if(e){var t=function(t){t.preventDefault(),o.classList.remove("animate"),setTimeout((function(){e.classList.remove("show"),body.classList.remove("lock")}),200)},o=e.querySelector(".modal__content"),n=e.querySelector(".modal-close"),a=document.querySelectorAll("[data-modal]"),r=e.querySelector(".modal__form"),c=e.querySelector("[name=firstname]"),l=e.querySelector("[name=phone]"),s=e.querySelector("[name=email]");a.forEach((function(t){t.addEventListener("click",(function(t){t.preventDefault(),e.classList.add("show"),body.classList.add("lock"),setTimeout((function(){o.classList.add("animate")}),50),c.focus()}))})),e.addEventListener("click",t),o.addEventListener("click",(function(e){e.stopPropagation()})),n.addEventListener("click",t),window.addEventListener("keydown",(function(o){27===o.keyCode&&e.classList.contains("show")&&t(o)})),r.addEventListener("submit",(function(e){c.value&&l.value&&s.value?console.log("Всё отлично!"):(e.preventDefault(),console.log("Нужно ввести все данные в таблицу"))}))}},modalThanks=function(){var e=document.querySelector("#modal-thanks");if(e){var t=function(t){t.preventDefault(),o.classList.remove("animate"),setTimeout((function(){e.classList.remove("show"),body.classList.remove("lock")}),200)},o=e.querySelector(".modal__content"),n=e.querySelector(".modal-close");e.addEventListener("click",t),o.addEventListener("click",(function(e){e.stopPropagation()})),n.addEventListener("click",t),window.addEventListener("keydown",(function(o){27===o.keyCode&&e.classList.contains("show")&&t(o)}))}};modalCallback(),modalThanks();var sections=document.querySelectorAll("section[data-scroll]");header=document.querySelector("header");function scrollActive(){var e=window.pageYOffset;sections.forEach((function(t){var o=t.offsetHeight,n=t.offsetTop-3*header.offsetHeight,a=t.getAttribute("data-scroll");e>n&&e<=n+o?document.querySelector(".nav a[href*="+a+"]").classList.add("active"):document.querySelector(".nav a[href*="+a+"]").classList.remove("active")}))}window.addEventListener("scroll",scrollActive);var reviewsSlider=document.querySelector(".reviews"),introSlider=document.querySelector(".reviews");reviewsSlider&&new Swiper(".reviews",{speed:800,slidesPerView:1,autoplay:{delay:5e3},spaceBetween:30,pagination:{el:".reviews__pagination",clickable:!0}}),introSlider&&new Swiper(".intro-slider",{speed:800,slidesPerView:1,watchSlidesVisibility:"true",preloadImages:!1,lazy:!0,autoplay:{delay:1e4},effect:"fade",fadeEffect:{crossFade:!0},navigation:{nextEl:".intro-slider__btn--next",prevEl:".intro-slider__btn--prev"}}),document.addEventListener("DOMContentLoaded",yall),document.querySelector("[data-aos]")&&AOS.init();var scroll=new SmoothScroll('a[href*="#"]',{speed:800,header:".header"});