@extends('layouts.app')

@section('h_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>
@stop

@section('content')
    <div class="wrapper">
        <section class="section section--small">
            <div class="layout">
                <div class="breadcrumbs"><a class="breadcrumbs__item" href="/account">Главная</a>
                    <div class="breadcrumbs__item breadcrumbs__item--active">Личный кабинет</div>
                </div>
            </div>
        </section>
        <section class="section section--small">
            <div class="layout">
                <div class="account">
                    <div class="account-menu">
                        <div class="account-menu__header account-menu__section account-menu__section--header">
                            <div class="header__menu account-menu--exit account-menu--btn">
                                <a class="header__menu-button">
                                    <svg class="header__catalog-button-icon">
                                        <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="account-menu__header-img-wrapper" data-name="{{substr($user->name,0,2)}}">

                                <div class="account-menu__header-img">
                                    @if ($user->photo != null)
                                        <img class="account-menu__header-img-item"
                                             src="../storage/users/{{$user->id}}/{{$user->photo}}">
                                    @endif
                                </div>
                                <label class="account-menu__header-button">
                                    <div class="account-menu__header-button-icon-wrapper">
                                        <svg class="account-menu__header-button-icon">
                                            <use xlink:href="../images/icons/icons-sprite.svg#photo"></use>
                                        </svg>
                                    </div>
                                    <input id="user-photo-input" class="account-menu__header-input" type="file">
                                </label>
                            </div>

                            <div class="account-menu__header-name">{{$user->name}}</div>
                            <div class="account-menu__header-city">{{$user->city}}</div>
                            <a class="account-menu__link account-menu__link" href="/account">Личный кабинет</a>
                        </div>
                        <div class="account-menu__section"><a class="account-menu__link" href="#">О реферальной
                                программе</a><a class="account-menu__link" href="#">Баланс</a><a
                                class="account-menu__link"
                                href="#">Список
                                партнёров</a><a class="account-menu__link" href="#">Пригласить партнёров</a></div>
                        <div class="account-menu__section">
                            @if ($user->whereHas('roles', function ($q) {
                            $q->where('slug', 'provider');
                            })->where('id', $user->id)->first() != null)
                                <a class="account-menu__link" href="/tenders?filtered=true&onlyMyProvider=on">Мои
                                    тендеры</a>
                            @else
                                <a class="account-menu__link" href="/tenders?filtered=true&onlyMy=on">Мои тендеры</a>
                            @endif
                        </div>

                        @if ($user->whereHas('roles', function ($q) {
                            $q->where('slug', 'provider');
                            })->where('id', $user->id)->first() != null)
                            <div class="account-menu__section"><a class="account-menu__link" href="/products">Товары</a>
                                @if ($user->whereHas('roles', function ($q) {
                                     $q->where('slug', 'provider');
                                })->where('id', $user->id)->first() != null)
                                    <a class="account-menu__link" href="/my-products">Мои
                                        товары</a>
                                @endif
                                <a class="account-menu__link" href="/product/new">Добавить товар</a>
                                <a class="account-menu__link" href="#" onclick="openFile()">Добавить товар из
                                    таблицы</a>
                                <a class="account-menu__link" href="../storage/Таблица товаров.xlsx">Скачать пример
                                    таблицы</a>
                                <input id="product-file-uploader" type="file" style="display: none">
                            </div>

                            <div class="account-menu__section"><a class="account-menu__link"
                                                                  href="/account-factory/list">Мои заводы</a>
                                <a class="account-menu__link" href="/account-factory">Добавить завод</a>
                            </div>
                        @endif


                        <div class="account-menu__section">
                            <a class="account-menu__link" href="/account-settings">Настройки</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                              this.closest('form').submit();">
                                    <div class="account-menu__link account-menu__link--red">Выйти</div>
                                </x-dropdown-link>
                            </form>

                        </div>
                    </div>
                    <div class="header__menu account-menu--btn">
                        <a id="mobile-profile-btn" class="header__menu-button">
                            <svg class="header__catalog-button-icon">
                                <use xlink:href="../images/icons/icons-sprite.svg#menu"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="account__item">
                        @yield('main_item')


                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('f_script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let fileData
        let selectedFile;
        let data = [{
            "name": "jayanth",
            "data": "scd",
            "abc": "sdef"
        }]
        console.log(window.XLSX);
        document.getElementById('product-file-uploader').addEventListener("change", (event) => {
            selectedFile = event.target.files[0];

            XLSX.utils.json_to_sheet(data, 'out.xlsx');
            if (selectedFile) {
                let fileReader = new FileReader();
                fileReader.readAsBinaryString(selectedFile);
                fileReader.onload = (event) => {
                    let data = event.target.result;
                    let workbook = XLSX.read(data, {type: "binary"});
                    console.log(workbook);
                    workbook.SheetNames.forEach(sheet => {
                        fileData = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheet]);
                        console.log(fileData)
                        showFileProducts(fileData)
                        //document.getElementById("jsondata").innerHTML = JSON.stringify(rowObject,undefined,4)
                    });
                }
            }
        })
        document.getElementById('user-photo-input').addEventListener("change", (event) => {
            console.log('event')
            console.log(event.target.files[0])

            let formData = new FormData();
            formData.append("image", event.target.files[0]);

            axios({
                method: 'POST',
                url: `${window.location.origin}/account/photo-upload`,
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'Content-Type': 'multipart/form-data'
                },
            }).then((response) => {
                console.log(response.data);
                window.location = window.location;
            });
        });
        document.getElementById('product-in-file-btn').addEventListener("click", () => {
            uploadFileProduct();
        })


        function openFile() {
            document.getElementById('product-file-uploader').click();
        }

        function showFileProducts(products) {
            let $wrapper = document.getElementById('file-products-wrapper')
            let $template = document.getElementById('file-product-template')
            let $priceTemplate = document.getElementById('file-product-prices-template')

            products.forEach((product, i) => {
                let $clone = document.importNode($template.content, true);

                let $numberTitle = $clone.querySelector('.product-in-file__item-header-title-number')
                let $name = $clone.querySelector('.product-in-file__item-input-name input')
                let $comment = $clone.querySelector('.product-in-file__item-input-comment textarea')
                let $time = $clone.querySelector('.product-in-file__item-input-time input')
                let $formItems = $clone.querySelector('.form__copy-items')
                let $photoWrapper = $clone.querySelector('.photo-upload')

                $numberTitle.innerHTML = i + 1;
                $name.value = product['Название'];
                $comment.value = product['Описание'];
                $time.value = product['Срок изготовления'];
                $formItems.innerHTML = "";



                let min_count = product['Минимальный заказ'].split(';')
                let max_count = product['Максимальный заказ'].split(';')
                let prices = product['Цены'].split(';')

                prices.forEach((price, y) => {
                    let $priceClone = document.importNode($priceTemplate.content, true);

                    let $inputMin = $priceClone.querySelector('.input-min-count')
                    let $inputMax = $priceClone.querySelector('.input-max-count')
                    let $inputPrice = $priceClone.querySelector('.input-price')

                    if (min_count[y] != '-') {
                        $inputMin.value = min_count[y];
                    } else {
                        $inputMin.value = null;
                    }

                    if (max_count[y] != '-') {
                        $inputMax.value = max_count[y];
                    } else {
                        $inputMax.value = null;
                    }

                    $inputPrice.value = price;

                    $formItems.appendChild($priceClone);
                })

                $wrapper.appendChild($clone);

                window.dispatchEvent(new CustomEvent('new-photo-upload', {detail: {$wrapper: $photoWrapper}}))

            })

            modals.open('file-product-creation')
        }

        function uploadFileProduct() {
            let formData = new FormData();

            document.querySelectorAll('.product-in-file__item').forEach(($product, i) => {

                formData.append('products[' + i + '][title]',
                    $product.querySelector('.product-in-file__item-input-name input').value)

                formData.append('products[' + i + '][description]',
                    $product.querySelector('.product-in-file__item-input-name input').value)


                $product.querySelectorAll('.form__copy-items > .form__copy-item').forEach((fgItem, y) => {
                    console.log('input: ' + y);
                    fgItem.querySelectorAll('.form__item-group-items > .form__item-group-item input').forEach((inputItem, t) => {
                        formData.append('products[' + i + '][prices][' + y + ']' + '[' + inputItem.name + ']', inputItem.value);
                        console.log(inputItem.name, inputItem.value);
                    });
                });


                let files = $product.querySelector('.product-in-file__item-input-images input').files
                console.log(files)
                for (var y = 0; y < files.length; y++) {
                    formData.append("products[" + i + "][attachments][" + y + "][file]", files[y]);
                }

            })

            axios({
                method: 'POST',
                url: `{{ route('products-create') }}`,
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'Content-Type': 'multipart/form-data'
                },
            }).then((response) => {

                console.log('ok');
                window.location = window.location.origin + '/account'
            });
        }

    </script>
@stop
