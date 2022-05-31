let iconsFolder = './assets/icons/';

window.onload = () => {//functia lamda
    if (document.getElementsByClassName("hero__slider__slide").length !== 0) {
        prepareSlides();
        document.getElementsByClassName("hero__slider")[0].addEventListener('mouseover', () => {
            document.getElementsByClassName("hero__slider-arrowleft")[0].style.display = 'block';
            document.getElementsByClassName("hero__slider-arrowright")[0].style.display = 'block';
        })
        document.getElementsByClassName("hero__slider")[0].addEventListener('mouseout', () => {
            document.getElementsByClassName("hero__slider-arrowleft")[0].style.display = 'none';
            document.getElementsByClassName("hero__slider-arrowright")[0].style.display = 'none';
        })
    }

    //meniu mobil
    document.getElementById("open-mobile-menu").addEventListener('click', () => {
        let src = document.getElementById("open-mobile-menu").getAttribute('src')
        src === iconsFolder + 'close_menu.png' ?
            openMobileMenu() : closeMobileMenu()

    })
}
let currentSlide = 0;
const prepareSlides = () => {
    let slides = document.getElementsByClassName("hero__slider__slide")
    for (let i = 0; i < slides.length; i++) {
        slides[i].classList.add("hidden");
    }
    slides[0].classList.remove("hidden");
}

const slide = (x) => {
    if (document.getElementsByClassName("hero__slider__slide").length !== 0) {
        let slides = document.getElementsByClassName("hero__slider__slide")
        currentSlide += x;
        if (currentSlide < 0) currentSlide = slides.length - 1
        currentSlide = currentSlide % slides.length;
        for (let i = 0; i < slides.length; i++) {
            slides[i].classList.add("hidden");
        }
        slides[currentSlide].classList.remove("hidden");
    }
}
setInterval(() => {//aici se apeleaza functia la 5 secunde 
    slide(1)
}, 5000)

const openMobileMenu = () => {
    document.getElementById("open-mobile-menu").setAttribute('src', iconsFolder + "menu.png")
    document.getElementById("mobile-menu").style.display = 'none';
}

const closeMobileMenu = () => {
    document.getElementById("open-mobile-menu").setAttribute('src', iconsFolder + "close_menu.png")
    document.getElementById("mobile-menu").style.display = 'block';
}