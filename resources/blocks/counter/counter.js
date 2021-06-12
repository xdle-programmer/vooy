let counters = Array.from(document.querySelectorAll('.counter'));

if (counters.length > 0) {
    for (let $counter of counters) {
        counter($counter);
    }
}

export function counter($counter) {
    let $minus = $counter.querySelector('.counter__button--minus');
    let $plus = $counter.querySelector('.counter__button--plus');
    let $input = $counter.querySelector('.counter__input');

    $minus.addEventListener('click', () => {
        changeValue(-1);
    });

    $plus.addEventListener('click', () => {
        changeValue(1);
    });

    $input.addEventListener('input', () => {
        checkValue();
    });

    $input.addEventListener('change', () => {
        checkValue();
    });

    function checkValue() {
        let value = parseInt($input.value);

        if (isNaN(value)) {
            $input.value = 1;
        }
    }

    function changeValue(change) {
        let value = parseInt($input.value);
        value += change;
        if (value < 1) {
            value = 1;
        }

        $input.value = value;
    }
}

