//  Slider JS //
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 6000,
        disableOnInteraction: false,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    breakpoints: {
        360: {
            slidesPerView: 1.5,
            spaceBetween: 20,
        },
        540: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 4,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    },
});

var mainImg = document.getElementById("mainImg");
var smallImg = document.getElementsByClassName("small-img");

for (let i = 0; i < 4; i++) {
    smallImg[i].onclick = function () {
        mainImg.src = smallImg[i].src;
    }
}
