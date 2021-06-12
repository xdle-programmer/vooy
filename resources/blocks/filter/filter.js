let filters = Array.from(document.querySelectorAll('.filter'));

if (filters.length > 0) {
    for (let $filter of filters) {
        toggleFilter($filter);
    }
}

function toggleFilter($wrapper) {
    let checkboxWrapperClass = '.filter__checkbox';
    let checkboxes = Array.from($wrapper.querySelectorAll(checkboxWrapperClass + ' input'));
    let items = Array.from($wrapper.querySelectorAll('.filter__item'));
    let itemHideClass = 'filter__item--hide';

    for (let $checkbox of checkboxes) {
        $checkbox.addEventListener('change', () => {
            filterItems();
        });
    }

    function filterItems() {
        let activeValues = [];

        for (let $checkbox of checkboxes) {
            if ($checkbox.checked) {
                activeValues.push($checkbox.closest(checkboxWrapperClass).dataset.filter);
            }
        }

        if (activeValues.length === 0) {
            showAllItems();
        } else {
            showSelectedItems(activeValues);
        }
    }

    function showAllItems() {
        for (let $item of items) {
            $item.classList.remove(itemHideClass);
        }
    }

    function showSelectedItems(values) {
        for (let $item of items) {
            let matches = [];
            for (let value of values) {
                for (let dataValue of $item.dataset.filter.split(', ')) {
                    if (value === dataValue) {
                        matches.push(true);
                    }
                }
            }

            if (matches.length !== values.length) {
                $item.classList.add(itemHideClass);
            } else {
                $item.classList.remove(itemHideClass);
            }
        }
    }
}
