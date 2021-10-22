import {checkEmptyInput} from "../placeholder/placeholder";
import {toggleTooltip} from "../tooltip/tooltip";
import {counter} from "../counter/counter";
import {upload} from "../upload/upload";
import {setPreviewImg} from "../photo-upload/photo-upload";

let formsCopy = Array.from(document.querySelectorAll('.form__copy-wrapper'));


if (formsCopy.length > 0) {
    for (let $formCopy of formsCopy) {
        copyForm($formCopy);
    }
}

window.addEventListener('newFormsCopy', () => {
    console.log('newFormsCopy')
    let formsCopy = Array.from(document.querySelectorAll('.form__copy-wrapper'));
    console.log(formsCopy)
    if (formsCopy.length > 0) {
        for (let $formCopy of formsCopy) {
            copyForm($formCopy);
        }
    }
});

function copyForm($wrapper) {
    let $addButton = $wrapper.querySelector('.form__copy-button');
    let $itemsWrapper = $wrapper.querySelector('.form__copy-items');

    $addButton.addEventListener('click', createNewItem);

    function createNewItem() {
        let $newItem = $wrapper.querySelector('.form__copy-item').cloneNode(true);


        $newItem.querySelectorAll('input').forEach($input => {
            $input.value = '';
        });


        $newItem.querySelectorAll('.placeholder').forEach($placeholder => {
            checkEmptyInput($placeholder);
        });

        $itemsWrapper.appendChild($newItem);
    }

}
