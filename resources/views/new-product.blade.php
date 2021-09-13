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
                    <div class="title-count__item">
                        @if($product ?? null)
                            Редактирование товара
                        @else
                            Создание товара
                        @endif
                    </div>
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
                                               @if($product ?? null)
                                               value="{{$product->title}}"
                                               @endif
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
                                              placeholder="Описание">
                                        @if($product ?? null)
                                            {{$product->description}}
                                        @endif
                                    </textarea>
                                        <div class="placeholder__item">Описание</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form__item-group">
                                <div class="form__item-group-title">Категория</div>
                                <template id="new-product-template-select">
                                    <div class="form__item-group-item">
                                        <div class="placeholder">
                                            <select class="custom-select placeholder__select check-progress__select"
                                                    data-category-level>
                                                <option value="default" selected="" disabled="" hidden="">Категория
                                                </option>
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
                                <template id="new-product-template-characteristic-1">
                                    <div class="form__item-group-item">
                                        <div class="placeholder form-check__field" data-elem="input"
                                             data-rule="input-empty">
                                            <input
                                                class="input placeholder__input"
                                                placeholder="Наименование товара">
                                            <div class="placeholder__item">Тест</div>
                                        </div>
                                    </div>
                                </template>
                                <template id="new-product-template-characteristic-2">
                                    <div class="form__item-group-item">
                                        <div class="placeholder form-check__field" data-elem="input"
                                             data-rule="input-empty">
                                            <input type="number"
                                                   class="input placeholder__input"
                                                   placeholder="Наименование товара">
                                            <div class="placeholder__item">Тест</div>
                                        </div>
                                    </div>
                                </template>
                                <template id="new-product-template-characteristic-3">
                                    <div class="catalog__filters-item">
                                        <label class="checkbox">
                                            <input class="checkbox__input" type="checkbox">
                                            <span class="checkbox__item">
                                                            <svg class="checkbox__icon">
                                                                <use
                                                                    xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                            </svg>
                                                            <span class="checkbox__text">adidas</span>
                                                        </span>
                                        </label>
                                    </div>
                                </template>
                                <template id="new-product-template-characteristic">
                                    <div class="form__item-group-item">
                                    </div>
                                </template>
                                <div id="new-product-characteristics" class="form__item-group-items">

                                </div>
                            </div>

                            <div class="form__item-group">
                                <div class="form__item-group-title">Срок изготовления</div>
                                <div class="form__item-group-items">
                                    <div class="form__item-group-item">
                                        <div class="placeholder form-check__field" data-elem="input"
                                             data-rule="input-empty">
                                            <input id="new-product-date" type="number"
                                                   @if($product ?? null)
                                                   value="{{$product->release_time}}"
                                                   @endif
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
                                    <div id="price-add-btn" class="form__copy-button button button--small">Добавить пару
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
        let PRODUCT = null;
        @if($product ?? null)
            PRODUCT = {!! json_encode($product) !!};
        setProduct(PRODUCT);
        @endif

        console.log(PRODUCT)
        let CATEGORIES = {!! json_encode($categories) !!};
        let category_template = document.querySelector('#new-product-template-select');
        let categories_block = document.querySelector('#new-product-categories');

        let characteristics_template = document.querySelector('#new-product-template-characteristic');
        let characteristics_block = document.querySelector('#new-product-characteristics');

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

            categories_block.querySelectorAll('.form__item-group-item').forEach((item, i) => {
                console.log(item.querySelector('select').value)
                formData.append("product[category][" + i + "]", item.querySelector('select').value);
            });

            characteristics_block.querySelectorAll('.form__item-group-item').forEach(item => {
                if (item.dataset.type == 1 || item.dataset.type == 2) {
                    formData.append("product[characteristic][" + item.dataset.characteristic + "]", item.querySelector('input').value);
                } else if (item.dataset.type == 3) {
                    let cbValues = [];
                    item.querySelectorAll('input').forEach((cb, i) => {
                        formData.append("product[characteristic][" + item.dataset.characteristic + "][cb][" + cb.dataset.select + "]", cb.checked);
                    })


                }
            })

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
                window.location = window.location.origin + '/products'
            });

        }

        let currentCategoryLevel = 0;

        function setProduct(product){
            if (product.prices){
                product.prices.forEach((price, i)=> {
                    if (i > 0)
                        document.getElementById('price-add-btn').click();
                    let fgItem = document.querySelectorAll('#new-product-prices > .form__copy-item')
                    fgItem[fgItem.length - 1].querySelectorAll('.form__item-group-items > .form__item-group-item input').forEach((inputItem, t) => {
                        if (inputItem.name == 'min')
                            inputItem.value = price.min
                        else if(inputItem.name == 'max')
                            inputItem.value = price.max
                        else if(inputItem.name == 'price')
                            inputItem.value = price.price
                       // console.log(inputItem.name, inputItem.value);
                    });


                    });

                }
        }



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
                    setCharacteristics(categories[0].id)
                } else {
                    setCharacteristics($select.value)
                }
            });
        }

        function setCharacteristics(category_id) {
            characteristics_block.innerHTML = '';
            let category = CATEGORIES.filter(item => {
                return parseInt(item.id) === parseInt(category_id);
            });

            category[0].characteristics.forEach(characteristic => {
                let char_template = document.getElementById('new-product-template-characteristic-' + characteristic.type)
                if (characteristic.type == 1 || characteristic.type == 2) {
                    let template_input = char_template.content.querySelector('input');
                    let template_title = char_template.content.querySelector('.placeholder__item');
                    char_template.content.querySelector('.form__item-group-item').dataset.type = characteristic.type;
                    char_template.content.querySelector('.form__item-group-item').dataset.characteristic = characteristic.id;
                    template_input.placeholder = characteristic.name
                    template_title.innerText = characteristic.name

                    let template_clone = document.importNode(char_template.content, true);
                    characteristics_block.appendChild(template_clone);
                } else if (characteristic.type == 3) {
                    let item = document.createElement("div");
                    item.classList.add('form__item-group-item');
                    item.dataset.type = characteristic.type;
                    item.dataset.characteristic = characteristic.id;

                    let title = document.createElement("div");
                    title.classList.add('catalog__filters-title');
                    title.innerText = characteristic.name;
                    item.appendChild(title)

                    characteristic.selects.forEach(select => {
                        let template_input = char_template.content.querySelector('input');
                        let template_title = char_template.content.querySelector('.checkbox__text');
                        template_input.dataset.select = select.id
                        template_title.innerText = select.name

                        let template_clone = document.importNode(char_template.content, true);
                        item.appendChild(template_clone)
                    })
                    characteristics_block.appendChild(item);
                }


            })

        }

        newCategory();
    </script>

@stop
