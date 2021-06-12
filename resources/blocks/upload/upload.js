export function upload(options) {
    const $wrapper = options.$wrapper;
    const $input = options.$input;
    const $previewWrapper = options.$previewWrapper;
    const previewWrapperEmptyClass = options.previewWrapperEmptyClass;
    const $filePreviewWrapper = options.$filePreviewWrapper;
    const $imgPreviewWrapper = options.$imgPreviewWrapper;
    const filePreviewCreate = options.filePreviewCreateFunction;
    const imgPreviewCreate = options.imgPreviewCreateFunction;

    let files = [];


    $input.addEventListener('change', event => {
        changeHandler(event);
    });

    function deleteFiles($wrapper) {
        $wrapper.querySelectorAll('[data-upload-preview]').forEach(preview => {
            preview.remove();
        });
    }

    const changeHandler = event => {
        if (!event.target.files.length) {
            return;
        }

        files = Array.from(event.target.files);
        $previewWrapper.classList.remove(previewWrapperEmptyClass);


        // $filePreviewWrapper.innerHTML = '';
        // $imgPreviewWrapper.innerHTML = '';
        deleteFiles($imgPreviewWrapper)
        deleteFiles($filePreviewWrapper)

        files.forEach(file => {
            const reader = new FileReader();
            reader.onload = ev => {
                const src = ev.target.result;
                const name = file.name;

                if (!file.type.match('image') && filePreviewCreate) {
                    $filePreviewWrapper.insertAdjacentHTML('afterbegin', filePreviewCreate({
                        name: name,
                        src: src,
                    }));
                } else if (file.type.match('image') && imgPreviewCreate) {
                    $imgPreviewWrapper.insertAdjacentHTML('afterbegin', imgPreviewCreate({
                        name: name,
                        src: src,
                    }));
                }
            };

            reader.readAsDataURL(file);
        });
    };
}