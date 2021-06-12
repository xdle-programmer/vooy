import {upload} from "../upload/upload";

export function setPreviewImg(options) {
    let name = options.name;
    let src = options.src;

    let html = `
        <div class="photo-upload__preview-wrapper" data-upload-preview>
            <div class="photo-upload__preview-item">
                <img class="photo-upload__preview" src="${src}">
            </div>
        </div>
    `;

    return html;
}


export function setPreviewImgStar(options) {
    let name = options.name;
    let src = options.src;

    let html = `
        <div class="photo-upload__preview-wrapper" data-upload-preview>
            <div class="photo-upload__preview-star">
                <svg class="photo-upload__preview-star-img">
                    <use xlink:href="../images/icons/icons-sprite.svg#star"></use>
                </svg>
            </div>
            <div class="photo-upload__preview-item">
                <img class="photo-upload__preview" src="${src}">
            </div>
        </div>
    `;

    return html;
}

let photoUploads = Array.from(document.querySelectorAll('.photo-upload'));

if (photoUploads.length > 0) {
    for (let $photoUpload of photoUploads) {
        let func;
        if ($photoUpload.classList.contains('photo-upload--stars')) {
            func = setPreviewImgStar;
        } else {
            func = setPreviewImg;
        }

        upload({
            $wrapper: $photoUpload,
            $input: $photoUpload.querySelector('.photo-upload__input'),
            $previewWrapper: $photoUpload.querySelector('.photo-upload__items'),
            previewWrapperEmptyClass: 'chat__form-file-preview--empty',
            $filePreviewWrapper: $photoUpload.querySelector('.photo-upload__items'),
            $imgPreviewWrapper: $photoUpload.querySelector('.photo-upload__items'),
            filePreviewCreateFunction: func,
            imgPreviewCreateFunction: func,
        });
    }
}

document.addEventListener('click', event => {
    let $starButton;

    if (event.target.classList.contains('photo-upload__preview-star')) {
        $starButton = event.target;
    } else if (event.target.closest('.photo-upload__preview-star')) {
        $starButton = event.target.closest('.photo-upload__preview-star');
    } else {
        return;
    }

    for (let $star of Array.from(document.querySelectorAll('.photo-upload__preview-star'))) {
        $star.classList.remove('photo-upload__preview-star--active');
    }
    $starButton.classList.add('photo-upload__preview-star--active');
});