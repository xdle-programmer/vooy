import Select from 'simple-custom-select';

let $select = document.getElementsByClassName('search-select')[0];

window.select = new Select({
    $select: $select,
    customSelectClass:'search-select'
});