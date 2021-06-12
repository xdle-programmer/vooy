import {tns} from 'tiny-slider/src/tiny-slider';

let productImgSliderButtons = Array.from(document.querySelectorAll('[data-product-img-slider]'));

if (productImgSliderButtons.length > 0) {
    productImgSlider();
}

function productImgSlider() {
    let prevSlide = document.querySelector('.product-img-slider__button--prev');
    let nextSlide = document.querySelector('.product-img-slider__button--next');
    let buttonHideClass = 'product-img-slider__button--hide';

    for (let productImgSliderButton of productImgSliderButtons) {
        productImgSliderButton.addEventListener('click', event => {
            setSlider(productImgSliderButton.dataset.productImgSlider.split(','));
        });
    }

    function setSlideTemplate(src) {
        return `
            <div class='product-img-slider__item'>
                <svg class="product-img-slider__item-loading">
                    <use xlink:href="../images/icons/icons-sprite.svg#loading"></use>
                </svg>
                <img src='${src}' class='product-img-slider__item-img'>
            </div>
        `;
    }

    function setSlider(images) {
        if (images.length > 1) {
            prevSlide.classList.remove(buttonHideClass);
            nextSlide.classList.remove(buttonHideClass);
        } else {
            prevSlide.classList.add(buttonHideClass);
            nextSlide.classList.add(buttonHideClass);
        }

        slider.destroy();

        let checkDestroy = setInterval(() => {
            if (!document.querySelector('.product-img-slider__items').classList.contains('tns-slider')) {
                clearInterval(checkDestroy);
                updateSlider();
            }
        }, 50);

        function updateSlider() {
            let sliderItems = document.querySelector('.product-img-slider__items');
            sliderItems.innerHTML = '';


            let slides = '';

            for (let image of images) {
                slides += setSlideTemplate(image);
            }

            sliderItems.innerHTML = slides;
            slider = slider.rebuild();
            window.modals.open('product-img-slider-modal');
        }
    }


    let slider = tns({
        container: '.product-img-slider__items',
        loop: true,
        items: 1,
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


