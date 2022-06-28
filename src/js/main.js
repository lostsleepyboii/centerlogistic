document.addEventListener("DOMContentLoaded", yall);

if (document.querySelector('[data-aos]')) {
	AOS.init();
}


const scroll = new SmoothScroll('a[href*="#"]', {
	speed: 800,
	header: '.header'
});