import noUiSlider from 'nouislider';

let minMaxSliders = Array.from(document.querySelectorAll('.min-max-slider'));

if (minMaxSliders.length > 0) {
    for (let $minMaxSlider of minMaxSliders) {
        minMaxSlider($minMaxSlider);
    }
}

function minMaxSlider($wrapper) {
    let $minInput = $wrapper.querySelector('.min-max-slider__input--min');
    let $maxInput = $wrapper.querySelector('.min-max-slider__input--max');
    let $minMaxRange = $wrapper.querySelector('.min-max-slider__range');
    let options = $minMaxRange.dataset;
    let minValue = parseInt(options.min);
    let maxValue = parseInt(options.max);
    let width = $wrapper.getBoundingClientRect().width;
    let step = parseInt((maxValue - minValue) / (width));
    let changeEvent = new Event('change');

    noUiSlider.create($minMaxRange, {
        start: [minValue, maxValue],
        connect: true,
        step: step,
        range: {
            'min': minValue,
            'max': maxValue
        },
    });

    $minMaxRange.noUiSlider.on('slide', (event) => {
        setInputValue(event);
    });
    $minInput.addEventListener('input', setSliderValue);
    $maxInput.addEventListener('input', setSliderValue);

    function setInputValue(values) {
        let currentMinValue = parseInt(values[0]);
        let currentMaxValue = parseInt(values[1]);
        $minInput.value = currentMinValue;
        $maxInput.value = currentMaxValue;
        $minInput.dispatchEvent(changeEvent);
        $maxInput.dispatchEvent(changeEvent);
    }

    function setSliderValue() {
        let currentMinValue = parseInt($minInput.value);
        let currentMaxValue = parseInt($maxInput.value);

        if (isNaN(currentMinValue) || currentMinValue < minValue) {
            currentMinValue = minValue;
        }

        if (isNaN(currentMaxValue) || currentMaxValue > maxValue) {
            currentMaxValue = maxValue;
        }

        $minMaxRange.noUiSlider.set([currentMinValue, currentMaxValue]);
    }
}