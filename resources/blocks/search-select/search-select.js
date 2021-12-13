import Select from 'simple-custom-select';

let $select = document.getElementsByClassName('search-select')[0];

if ($select !== undefined && $select !== null)
window.select = new Select({
    $select: $select,
    customSelectClass:'search-select'
});
