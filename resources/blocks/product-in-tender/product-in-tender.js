import {checkEmptyInput} from "../placeholder/placeholder";
import {toggleTooltip} from "../tooltip/tooltip";
import {counter} from "../counter/counter";
import {upload} from "../upload/upload";
import {setPreviewImg} from "../photo-upload/photo-upload";


let productsInTender = Array.from(document.querySelectorAll('.product-in-tender'));

if (productsInTender.length > 0) {
    for (let $productInTender of productsInTender) {
        productInTenderHandler($productInTender);
    }
}

function productInTenderHandler($wrapper) {
    let $addButton = $wrapper.querySelector('.product-in-tender__add-product');
    let removeButtons = Array.from($wrapper.querySelectorAll('.product-in-tender__item-header-delete'));
    let $itemsWrapper = $wrapper.querySelector('.product-in-tender__items');

    $addButton.addEventListener('click', createNewProduct);

    for (let $removeButton of removeButtons) {
        $removeButton.addEventListener('click', deleteProduct);
    }


    function deleteProduct() {
        console.log(this);

        this.closest('.product-in-tender__item').remove();
        setProductNumber();
    }

    this.createNewProduct = () => {
        createNewProduct();
    };

    function createNewProduct() {
        let $newProduct = $wrapper.querySelector('.product-in-tender__item').cloneNode(true);

        $newProduct.querySelectorAll('input').forEach($input => {
            $input.value = '';
        });

        $newProduct.querySelector('textarea').value = '';

        $newProduct.querySelector('.counter__input').value = 100;

        $newProduct.querySelectorAll('.placeholder').forEach($placeholder => {
            checkEmptyInput($placeholder);
        });

        let $removeButton = $newProduct.querySelector('.product-in-tender__item-header-delete');
        $removeButton.addEventListener('click', deleteProduct);

        toggleTooltip($newProduct.querySelector('.tooltip'));
        counter($newProduct.querySelector('.counter'));

        let $photoUpload = $newProduct.querySelector('.photo-upload');

        for (let $preview of Array.from($newProduct.querySelectorAll('[data-upload-preview]'))) {
            $preview.remove();
        }

        upload({
            $wrapper: $photoUpload,
            $input: $photoUpload.querySelector('.photo-upload__input'),
            $previewWrapper: $photoUpload.querySelector('.photo-upload__items'),
            previewWrapperEmptyClass: 'chat__form-file-preview--empty',
            $filePreviewWrapper: $photoUpload.querySelector('.photo-upload__items'),
            $imgPreviewWrapper: $photoUpload.querySelector('.photo-upload__items'),
            filePreviewCreateFunction: setPreviewImg,
            imgPreviewCreateFunction: setPreviewImg,
        });

        $itemsWrapper.appendChild($newProduct);

        window.formsArray.get('new-products-form').refresh();
        window.modals.setCenter($wrapper.closest('.modal').id);

        setProductNumber();
    }

    function setProductNumber() {
        let items = Array.from($wrapper.querySelectorAll('.product-in-tender__item'));

        for (let index = 0; index < items.length; index++) {
            let $number = items[index].querySelector('.product-in-tender__item-header-title-number');
            $number.innerHTML = index + 1;
        }
    }
}
