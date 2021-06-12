import Select from 'simple-custom-select';

let selects = Array.from(document.querySelectorAll('.catalog__sort-select'));
let selectsArray = [];

if (selects.length > 0) {
    for (let index = 0; index < selects.length; index++) {
        selectsArray.push(new Select({
            $select: selects[index],
            customSelectClass:'catalog__sort-select-custom'
        }));
    }
}
