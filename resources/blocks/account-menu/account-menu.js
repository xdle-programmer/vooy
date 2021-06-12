import {upload} from "../upload/upload";

function setPreviewImgAccount(options) {
    let name = options.name;
    let src = options.src;

    let html = `
        <img class="account-menu__header-img-item" src="${src}">
    `;

    return html;
}

let accountInputs = Array.from(document.querySelectorAll('.account-menu__header-input'));

if (accountInputs.length > 0) {
    for (let $accountInput of accountInputs) {
        upload({
            $wrapper: $accountInput.closest('.account-menu__header'),
            $input: $accountInput,
            $previewWrapper: $accountInput.closest('.account-menu__header').querySelector('.account-menu__header-img'),
            previewWrapperEmptyClass: 'chat__form-file-preview--empty',
            $filePreviewWrapper: $accountInput.closest('.account-menu__header').querySelector('.account-menu__header-img'),
            $imgPreviewWrapper: $accountInput.closest('.account-menu__header').querySelector('.account-menu__header-img'),
            filePreviewCreateFunction: false,
            imgPreviewCreateFunction: setPreviewImgAccount,
        });
    }
}