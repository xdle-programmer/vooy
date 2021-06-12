import {tns} from 'tiny-slider/src/tiny-slider';

function slidePreview() {
    let prevSlide = document.querySelector('.product-cart__slider-navigation-button--prev');
    let nextSlide = document.querySelector('.product-cart__slider-navigation-button--next');

    let slider = tns({
        container: '.product-cart__slider',
        loop: true,
        axis: 'vertical',
        items: 6,
        slideBy: 1,
        nav: false,
        mouseDrag: true,
        gutter: 10,
        autoplayButtonOutput: false,
        speed: 500,
        controls: false,
        responsive: {
            // 640: {
            //     items: 6
            // },
            // 414: {
            //     items: 3
            // },
            // 0: {
            //     items: 2,
            //     gutter: 0,
            // }
        }
    });

    prevSlide.addEventListener('click', () => {
        slider.goTo('prev');
    });

    nextSlide.addEventListener('click', () => {
        slider.goTo('next');
    });
}

function setPreviewImg() {
    let buttonClass = 'product-cart__slide-img';
    let $preview = document.getElementsByClassName('product-cart__img-preview')[0];

    document.addEventListener('click', function (event) {
        let src;

        if (event.target.classList.contains(buttonClass)) {
            src = event.target.dataset.previewUrl;
        } else if (event.target.closest('.' + buttonClass)) {
            src = event.target.closest('.' + buttonClass).dataset.previewUrl;
        } else {
            return;
        }

        $preview.src = src;
    });

}

if (document.getElementsByClassName('product-cart__slide-img').length > 0) {
    setPreviewImg();
    slidePreview();
}