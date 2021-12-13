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

let toTenderBtns = Array.from(document.querySelectorAll('.product-add-btn'));

if (toTenderBtns.length > 0) {
    for (let $toTenderBtn of toTenderBtns) {
        $toTenderBtn.addEventListener('click', (e) => {
            console.log(e.currentTarget.dataset.product)
            getProduct(e.currentTarget.dataset.product)
        })
    }
}

function getProduct(id) {
    axios({
        method: 'GET',
        url: location.origin + '/product/' + id
    }).then((result) => {
        console.log(result.data);
        modals.open('new-tender-products');
        let product = result.data;

        let $productForm = document.querySelector('#new-products-form .product-in-tender__item-inputs');
        let $productName = $productForm.querySelector('.product-in-tender__item-input-name input');
        let $productDescription = $productForm.querySelector('.product-in-tender__item-input-comment textarea');
        let $productCount = $productForm.querySelector('.product-in-tender__item-input-count input');
        let $productImagesPrev = $productForm.querySelector('.product-in-tender__item-input-images .photo-upload__items');
        let $productImagesInput = $productForm.querySelector('.product-in-tender__item-input-images input');

        $productName.value = product.title
        $productDescription.value = product.description
        if (product.prices.length > 0) {
            if (product.prices[0].min != null)
                $productCount.value = product.prices[0].min;
        }


        $productImagesPrev.querySelectorAll('.photo-upload__preview-wrapper').forEach(preview=>{
            preview.remove();
        })
        if (product.attachments.length > 0) {
            product.attachments.forEach((att, attIndex) => {
                let div = document.createElement("div");
                div.className = "photo-upload__preview-wrapper";
                div.setAttribute("data-upload-preview", '');
                div.setAttribute("data-copied", 'true');
                div.setAttribute("data-path", att.path);
                div.setAttribute("data-entity",'products');
                $productImagesPrev.prepend(div);

                let div2 = document.createElement("div");
                div2.className = "photo-upload__preview-item";
                div.appendChild(div2);

                let img = document.createElement("img");
                img.className = "photo-upload__preview";
                img.src = "../storage/products/" + att.path;
                div2.appendChild(img);
            });
        }

    })
}
