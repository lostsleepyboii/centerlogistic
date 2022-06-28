const sections = document.querySelectorAll('section[data-scroll]');
const header = document.querySelector('header');

function scrollActive() {
    const scrollY = window.pageYOffset;

    sections.forEach(current => {
        const sectionHeight = current.offsetHeight;
        const sectionTop = current.offsetTop - (header.offsetHeight * 3);
        const sectionId = current.getAttribute('data-scroll');

        if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav a[href*=' + sectionId + ']').classList.add('active');
        } else {
            document.querySelector('.nav a[href*=' + sectionId + ']').classList.remove('active');
        }
    });
}

window.addEventListener('scroll', scrollActive);