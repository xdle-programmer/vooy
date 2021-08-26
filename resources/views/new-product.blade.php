@extends('layouts.app')
@section('h_script')
@stop

@section('content')
    <div class="wrapper">
        <section class="section section--small">
            <div class="layout">
                <div class="breadcrumbs"><a class="breadcrumbs__item" href="/_index.html">Главная</a>
                    <div class="breadcrumbs__item breadcrumbs__item--active">Личный кабинет</div>
                </div>
            </div>
        </section>
        <section class="section section--small">
            <div class="layout">
                <div class="title-count">
                    <div class="title-count__item">Редактирование товара</div>
                    <div class="title-count__desc"></div>
                </div>
                <div class="form form--two-col form-check check-progress" id="new-product">
                    <div class="form__item-wrapper">
                        <div class="form__item border-block">
                            <div class="form__item-group">
                                <div class="form__item-group-title">Наименование и описание</div>
                                <div class="form__item-group-item">
                                    <div class="placeholder form-check__field" data-elem="input"
                                         data-rule="input-empty">
                                        <input id="new-product-title"
                                               class="input placeholder__input check-progress__input"
                                               placeholder="Наименование товара">
                                        <div class="placeholder__item">Наименование товара</div>
                                    </div>
                                </div>
                                <div class="form__item-group-item">
                                    <div class="placeholder form-check__field" data-elem="textarea"
                                         data-rule="input-empty">
                                    <textarea id="new-product-description"
                                              class="input input--textarea placeholder__input check-progress__input"
                                              placeholder="Описание"></textarea>
                                        <div class="placeholder__item">Описание</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form__item-group">
                                <div class="form__item-group-title">Категория</div>
                                <template id="new-product-template-select">
                                    <div class="form__item-group-item">
                                        <div class="placeholder">
                                            <select class="custom-select placeholder__select check-progress__select" data-category-level>
                                                <option value="default" selected="" disabled="" hidden="">Категория</option>
                                                <option value="1">Мужская одежда</option>
                                                <option value="2">Женская одежда</option>
                                            </select>
                                            <div class="placeholder__item">Категория</div>
                                        </div>
                                    </div>
                                </template>
                                <div id="new-product-categories" class="form__item-group-items"></div>
                            </div>
                            <div class="form__item-group">
                                <div class="form__item-group-title">Характеристики</div>
                            </div>

                            <div class="form__item-group">
                                <div class="form__item-group-title">Срок изготовления</div>
                                <div class="form__item-group-items">
                                    <div class="form__item-group-item">
                                        <div class="placeholder form-check__field" data-elem="input"
                                             data-rule="input-empty">
                                            <input id="new-product-date"
                                                   class="input placeholder__input check-progress__input"
                                                   placeholder="Срок изготовления">
                                            <div class="placeholder__item">Срок изготовления</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form__item-group">
                                <div class="form__item-group-title">Список цен</div>
                                <div class="form__copy-wrapper">
                                    <div id="new-product-prices" class="form__copy-items">
                                        <div class="form__copy-item">
                                            <div class="form__item-group-items">
                                                <div class="form__item-group-item">
                                                    <div class="placeholder form-check__field" data-elem="input"
                                                         data-rule="input-empty">
                                                        <input
                                                            name="min"
                                                            class="input placeholder__input check-progress__input"
                                                            placeholder="Минимум">
                                                        <div class="placeholder__item">Минимум</div>
                                                    </div>
                                                </div>
                                                <div class="form__item-group-item">
                                                    <div class="placeholder form-check__field" data-elem="input"
                                                         data-rule="input-empty">
                                                        <input
                                                            name="max"
                                                            class="input placeholder__input check-progress__input"
                                                            placeholder="Максимум">
                                                        <div class="placeholder__item">Максимум</div>
                                                    </div>
                                                </div>
                                                <div class="form__item-group-item">
                                                    <div class="placeholder form-check__field" data-elem="input"
                                                         data-rule="input-empty">
                                                        <input
                                                            name="price"
                                                            class="input placeholder__input check-progress__input"
                                                            placeholder="Стоимость">
                                                        <div class="placeholder__item">Стоимость</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form__copy-button button button--small">Добавить пару
                                        <svg class="button__icon button__icon--small">
                                            <use xlink:href="../images/icons/icons-sprite.svg#plus"></use>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div id="new-product-images" class="form__item-group">
                                <div class="form__item-group-title">Загрузка фото</div>
                                <div class="form__item-group-text">Загрузите главное и дополнительные изображения
                                    товара. <br><br>Главное изображение показывается первым на карточке товара.
                                    Чтобы
                                    сделать изображение главным, наведите на него указатель и нажмите звездочку
                                </div>
                                <div class="photo-upload photo-upload--stars">
                                    <div class="photo-upload__items">
                                        <label class="photo-upload__label-wrapper">
                                            <div class="photo-upload__label">
                                                <div class="photo-upload__input-icon-wrapper">
                                                    <svg class="photo-upload__input-icon">
                                                        <use
                                                            xlink:href="../images/icons/icons-sprite.svg#upload"></use>
                                                    </svg>
                                                </div>
                                                <div class="photo-upload__input-text">Загрузите фото</div>
                                                <input id="new-product-images-input" class="photo-upload__input"
                                                       type="file" multiple
                                                       accept="image/*">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form__item-footer">
                            <div id="new-product-btn-create" class="button form-check__button">Отправить на модерацию
                            </div>
                            <div id="new-product-btn-save" class="button button--invert">Сохранить, как черновик</div>
                        </div>
                    </div>
                    <div class="form__item-wrapper form__item-wrapper--sticky">
                        <div class="form__item border-block">
                            <div class="form__item-group">
                                <div class="form__item-group-title form__item-group-title--center">Заполнение формы
                                </div>
                                <div class="form__item-group-item">
                                    <div class="check-progress__chart"></div>
                                    <div class="check-progress__desc">Чем больше информации о товаре вы заполните, тем
                                        проще
                                        покупателям будет его искать
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('f_script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let CATEGORIES = {!! json_encode($categories) !!};
        let category_template = document.querySelector('#new-product-template-select');
        let categories_block = document.querySelector('#new-product-categories');
        document.getElementById('new-product-btn-create').addEventListener('click', () => {
            return sendProduct(1);
        });
        document.getElementById('new-product-btn-save').addEventListener('click', () => {
            return sendProduct(0);
        });

        function sendProduct(status = 0) {
            console.log('-SEND PRODUCT-');
            console.log('status', status);
            let formData = new FormData();


            formData.append('product[title]', document.querySelector('#new-product-title').value);
            console.log('title: ', document.querySelector('#new-product-title').value);

            formData.append('product[description]', document.querySelector('#new-product-description').value);
            console.log('description: ', document.querySelector('#new-product-description').value);

            formData.append('product[date]', document.querySelector('#new-product-date').value);
            console.log('date: ', document.querySelector('#new-product-date').value);


            document.querySelectorAll('#new-product-prices > .form__copy-item').forEach((fgItem, i) => {
                console.log('input: ' + i);
                fgItem.querySelectorAll('.form__item-group-items > .form__item-group-item input').forEach((inputItem, t) => {
                    formData.append('product[prices][' + i + ']' + '[' + inputItem.name + ']', inputItem.value);
                    console.log(inputItem.name, inputItem.value);
                });
            });

            console.log('images: ');
            console.log(document.querySelector('#new-product-images-input').files);
            let files = document.querySelector('#new-product-images-input').files;
            for (var i = 0; i < files.length; i++) {
                formData.append("product[attachments][" + i + "][file]", files[i]);
            }

            axios({
                method: 'POST',
                url: `{{ route('product-create') }}`,
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'Content-Type': 'multipart/form-data'
                },
            }).then((response) => {
                console.log('ok');
            });

        }

        let currentCategoryLevel = 0;

        function newCategory(category = null) {
            let template_select = category_template.content.querySelector('.custom-select');
            template_select.innerHTML = '';
            template_select.dataset.categoryLevel = currentCategoryLevel;

            if (category == null) {
                let options = CATEGORIES.filter((i) => {
                    return i.parrent_id == null;
                });

                let opt = document.createElement("option");
                opt.setAttribute("disabled", "disabled");
                opt.setAttribute("hidden", "true");
                opt.setAttribute("selected", "true");
                opt.value = 0;
                opt.innerHTML = 'Категория';
                template_select.appendChild(opt);

                options.forEach(option => {
                    let opt = document.createElement("option");
                    opt.value = option.id;
                    opt.innerHTML = option.name;
                    template_select.appendChild(opt);
                });
            } else {
                category.forEach(option => {
                    let opt = document.createElement("option");
                    opt.value = option.id;
                    opt.innerHTML = option.name;
                    template_select.appendChild(opt);
                });
            }
            let template_clone = document.importNode(category_template.content, true);

            categories_block.appendChild(template_clone);
            window.dispatchEvent(new Event('newCustomSelect'));
            currentCategoryLevel += 1;

            let number = categories_block.querySelectorAll('select.custom-select').length - 1;
            let $select = categories_block.querySelectorAll('select.custom-select')[number];

            $select.addEventListener('change', () => {
                let removingList = [];

                for (let index = parseInt($select.dataset.categoryLevel) + 1; index < categories_block.querySelectorAll('.form__item-group-item').length; index++) {
                    removingList.push(categories_block.querySelectorAll('.form__item-group-item')[index]);
                }

                for (let $item of removingList) {
                    $item.remove();
                }

                currentCategoryLevel = parseInt($select.dataset.categoryLevel) + 1;

                let categories = CATEGORIES.filter(item => {
                    return parseInt(item.parrent_id) === parseInt($select.value);
                });

                if (categories.length > 0) {
                    newCategory(categories);
                }
            });


        }

        newCategory();
    </script>

@stop
