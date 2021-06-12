import progressBarFunc from 'progressbar.js/dist/progressbar';


let checkProgressElements = Array.from(document.querySelectorAll('.check-progress'));

window.checkProgress = new Map();

if (checkProgressElements.length > 0) {
    for (let index = 0; index < checkProgressElements.length; index++) {
        let func = new checkProgressHandler(checkProgressElements[index]);

        if (checkProgressElements[index].id !== '') {
            window.checkProgress.set(checkProgressElements[index].id, func);
        } else {
            window.checkProgress.set('i' + index, func);
        }
    }
}

function checkProgressHandler($wrapper) {
    let inputs = Array.from($wrapper.querySelectorAll('.check-progress__input'));
    let selects = Array.from($wrapper.querySelectorAll('.check-progress__select'));
    let $chart = $wrapper.querySelector('.check-progress__chart');
    let checkElements = inputs.length + selects.length;

    addListeners();

    function addListeners() {
        for (let $input of inputs) {
            $input.addEventListener('change', checkState);
        }
        for (let $select of selects) {
            $select.addEventListener('change', checkState);
        }
    }

    function removeListeners() {
        for (let $input of inputs) {
            $input.removeEventListener('change', checkState);
        }

        for (let $select of selects) {
            $select.removeEventListener('change', checkState);
        }
    }

    this.addListeners = () => {
        addListeners();
    };

    this.removeListeners = () => {
        removeListeners();
    };

    this.refresh = () => {
        removeListeners();
        inputs = Array.from($wrapper.querySelectorAll('.check-progress__input'));
        selects = Array.from($wrapper.querySelectorAll('.check-progress__select'));
        addListeners();
    };

    function checkState() {
        let progress = 0;

        for (let $input of inputs) {
            if (checkVal($input)) {
                progress++;
            }
        }

        for (let $select of selects) {
            if (checkValSelect($select)) {
                progress++;
            }
        }

        let percentage = progress / checkElements;
        chartFunc.set(percentage);
        chartFunc.setText(Math.round((percentage * 100)) + '%');
    }

    function checkVal($input) {
        if ($input.value.length > 0) {
            return true;
        } else {
            return false;
        }
    }

    function checkValSelect($select) {
        if ($select.value !== 'default') {
            return true;
        } else {
            return false;
        }
    }


    let chartFunc = new progressBarFunc.Circle($chart, {
        strokeWidth: 8,
        easing: 'linear',
        duration: 1400,
        color: '#52B69A',
        trailColor: '#F1F1F1',
        trailWidth: 8,
        svgStyle: null
    });
}
