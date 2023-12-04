require('./bootstrap');
import $ from 'jquery';
import 'swiper/css';
import Swiper from 'swiper/bundle';
// import 'swiper/css/bundle';
import AOS from 'aos';
import 'aos/dist/aos.css';


document.addEventListener('DOMContentLoaded', function () {
    // Select your header element (replace 'your-header-id' with the actual ID or class of your header)
    var header = document.getElementById('mainHeader');

// Initial scroll position
    var prevScrollPos = window.pageYOffset;

// Event listener for the scroll event
    window.addEventListener('scroll', function () {
        // Current scroll position
        var currentScrollPos = window.pageYOffset;

        // Check if the current scroll position is greater than the previous one (scrolling down)
        if (currentScrollPos > prevScrollPos) {
            // Add a class to the header (replace 'your-class' with the desired class name)
            header.classList.add('translate-top');
        } else {
            // Remove the class from the header if scrolling up
            header.classList.remove('translate-top');
        }

        // Update the previous scroll position
        prevScrollPos = currentScrollPos;
    });

    AOS.init();
    let backToTop = document.getElementById("backToTop");
    function backtoTopHandler() {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
    backToTop.addEventListener('click', backtoTopHandler)
    if ($('body').hasClass('home')) {
        const video = document.getElementById('video-frontPage');
        const playButton = document.getElementById('play-button');

        playButton.addEventListener('click', function() {
            if (video.paused) {
                video.setAttribute('controls' , 'true')
                video.play();
                playButton.style.display = 'none'; // Hide the play button when the video is playing
            } else {
                video.pause();
                playButton.style.display = 'block'; // Show the play button when the video is paused
            }
        });
    }
    const heroSilder = new Swiper('.hero_slider', {
        direction: 'horizontal',
        slidesPerView : 1,
        spaceBetween: 0,
        speed: 1000,
        effect: 'fade',
    })
    const serviceSilder = new Swiper('.service_slider', {
        direction: 'horizontal',
        slidesPerView : 1,
        spaceBetween: 10,
        speed: 1000,
        effect: 'slide',
        breakpoints: {
            768: {
                slidesPerView: 3,
                spaceBetween: 10,
            },
        },
        navigation: {
            nextEl: '.services-button-next',
            prevEl: '.services-button-prev',
        },
    })
    const portfolioCat = new Swiper('.portfolio_cat', {
        direction: 'horizontal',
        slidesPerView : 3.4,
        spaceBetween: 10,
        // loop: true,
        grabCursor: true,
        speed: 700,
        effect: 'slide',
        breakpoints: {
            768: {
                slidesPerView: 6,
            },
        },
        navigation: {
            nextEl: '.portCat-button-next',
            prevEl: '.portCat-button-prev',
        },
    })
    const portfolio = new Swiper('.portfolio-swiper', {
        // Optional parameters
        loop: false,
        effect: 'slide',
        speed: 500,
        loopFillGroupBlank: false,
        grabCursor: true,
        slidesPerView: 1,
        centeredSlides: true,
        slideNextClass: 'scaled-down',
        slidePrevClass: 'scaled-down',
        navigation: {
            nextEl: '.swiper-next',
            prevEl: '.swiper-prev',
        },
        disableOnInteraction: false,
        pagination: {
            el: '.swiper-paginate-portfolio',
            type: 'fraction',
            formatFractionCurrent: function (number) {
                return ('0' + number).slice(-2);
            },
            formatFractionTotal: function (number) {
                return ('0' + number).slice(-2);
            },
            renderFraction: function (currentClass, totalClass) {
                return '<span class="' + currentClass + '"></span>' +
                    ' / ' +
                    '<span class="' + totalClass + '"></span>';
            }
        },
    })
})