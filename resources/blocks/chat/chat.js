import {upload} from "../upload/upload";

function setPreviewImgChat(options) {
    let name = options.name;
    let src = options.src;

    let html = `
        <img class="chat__message-content-image" src="${src}" data-upload-preview>
    `;

    return html;
}

function setPreviewDocChat(options) {
    let name = options.name;
    let src = options.src;

    let html = `
        <a class="chat__message-content-file" href="${src}" data-upload-preview>
            <svg class="chat__message-content-file-icon">
              <use xlink:href="../images/icons/icons-sprite.svg#file"></use>
            </svg>
            <div class="chat__message-content-file-text">${name}</div>
        </a>
    `;

    return html;
}

let chatInputs = Array.from(document.querySelectorAll('.chat__form-file-input'));

if (chatInputs.length > 0) {
    for (let $chatInput of chatInputs) {
        upload({
            $wrapper: $chatInput.closest('.chat__form'),
            $input: $chatInput,
            $previewWrapper: $chatInput.closest('.chat__form').querySelector('.chat__form-file-preview'),
            previewWrapperEmptyClass: 'chat__form-file-preview--empty',
            $filePreviewWrapper: $chatInput.closest('.chat__form').querySelector('.chat__message-content-files'),
            $imgPreviewWrapper: $chatInput.closest('.chat__form').querySelector('.chat__message-content-images'),
            filePreviewCreateFunction: setPreviewDocChat,
            imgPreviewCreateFunction: setPreviewImgChat,
        });
    }
}