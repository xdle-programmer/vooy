@extends('layouts.app')

@section('h_script')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@stop

@section('content')

    <div class="wrapper">
        <section class="section">
            <div class="main-banner layout">
                <div class="main-banner__background">
                    <div class="main-banner__background-el main-banner__background-el--1"></div>
                    <div class="main-banner__background-el main-banner__background-el--2"></div>
                    <div class="main-banner__background-el main-banner__background-el--3"></div>
                    <div class="main-banner__background-el main-banner__background-el--4"></div>
                    <div class="main-banner__background-el main-banner__background-el--5"></div>
                    <div class="main-banner__background-el main-banner__background-el--6"></div>
                </div>
                <div class="main-banner__content">
                    <div class="main-banner__content-main">
                        <div class="main-banner__content-title">ТЕНДЕРНАЯ ПЛОЩАДКА</div>
                        <div class="main-banner__content-subtitle">
                            <div class="main-banner__content-subtitle-small">БОЛЕЕ</div>
                            <div class="main-banner__content-subtitle-big">10 000</div>
                            <div class="main-banner__content-subtitle-small">ПОСТАВЩИКОВ ИЗ РОССИИ И КИТАЯ</div>
                        </div>
                    </div>
                    <div class="main-banner__content-natural">
                        <div class="main-banner__content-natural-item">
                            <svg class="main-banner__content-natural-item-icon">
                                <use xlink:href="../images/icons/icons-sprite.svg#pencil"></use>
                            </svg>
                            <div class="main-banner__content-natural-item-text">ПРОВЕДИТЕ ТЕНДЕР НА ВАШ ТОВАР<br>ИЛИ
                                ВЫБЕРИТЕ ТОВАР ИЗ КАТАЛОГА
                            </div>
                        </div>
                        <div class="main-banner__content-natural-item">
                            <svg class="main-banner__content-natural-item-icon">
                                <use xlink:href="../images/icons/icons-sprite.svg#truck"></use>
                            </svg>
                            <div class="main-banner__content-natural-item-text">Доставим и растаможим ваш товар<br>или
                                доставляйте самостоятельно
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="main-navigation layout">
                <div class="main-navigation__content">
                    <div class="main-navigation__item">
                        <div class="main-navigation__title">Оставьте заявку на свой товар</div>
                        <div class="main-navigation__desc">Если в каталоге нет подходящего вам товара, вы можете
                            оставить заявку,<br>мы найдем подходящих вам поставщиков
                        </div>
                        @auth
                            <div class="main-navigation__button" id="createNewTenderBtn" data-auth="true">Оставить
                                заявку
                            </div>
                        @endauth
                        @guest
                            <div class="main-navigation__button" id="createNewTenderBtn" data-auth="false">Оставить
                                заявку
                            </div>
                        @endguest

                    </div>
                    <div class="main-navigation__item">
                        <div class="main-navigation__title">Выберите товар из каталога</div>
                        <div class="main-navigation__desc">В нашем каталоге более 10.000 товаров от проверенных
                            поставщиков, выберите лучшие условия для себя!
                        </div>
                        <a class="main-navigation__button main-navigation__button--invert"
                           href="/products">Перейти в каталог</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="layout">
                <div class="title title--small">Предложения недели!</div>
                <div class="products-grid">
                    @foreach($displayProducts->where('type', 2) as $displayProduct_recent)
                        <div class="product-preview product-preview--big"
                             href="/product-card/{{$displayProduct_recent->product->id}}">
                            @if ($displayProduct_recent->product->attachments->first())
                                <img class="product-preview__img"
                                     src="../storage/products/{{$displayProduct_recent->product->attachments->first()->path}}">
                            @else
                                <img class="product-preview__img"
                                     src="../storage/tenderProducts/empty.jpg">
                            @endif
                            <div class="product-preview__desc">
                                <div
                                    class="product-preview__price">{{$displayProduct_recent->product->prices->min('price')}}
                                    - {{$displayProduct_recent->product->prices->max('price')}}₽ шт.
                                </div>
                                <div class="product-preview__minimal">
                                    <div
                                        class="product-preview__minimal-count">{{$displayProduct_recent->product->prices->min('min')}}
                                        шт.
                                    </div>
                                    <div class="product-preview__minimal-desc">Минимальный заказ</div>
                                </div>
                                <a class="product-preview__text"
                                   href="/product-card/{{$displayProduct_recent->product->id}}">{{$displayProduct_recent->product->title}}
                                </a>
                            </div>
                            <div class="product-preview__buttons">
                                <div class="product-preview__button">
                                    <div class="product-preview__button-text">В тендер</div>
                                    <svg class="product-preview__button-icon">
                                        <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                    </svg>
                                </div>
                                <div class="product-preview__button product-preview__button--gray">
                                    <svg class="product-preview__button-icon">
                                        <use xlink:href="../images/icons/icons-sprite.svg#heart"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    @if (count($displayProducts->where('type', 2)) == 0)

                    @endif
                </div>
            </div>
        </section>

        <section class="section">
            <div class="layout">
                <div class="advantages">
                    <div class="advantages__item">
                        <svg class="advantages__icon advantages__icon--1" viewbox="0 0 52 48"
                             xmlns="http://www.w3.org/2000/svg" data-stroke="123">
                            <path
                                d="M15.3333 45.3333V25.3333L26 19.408M26 29.3333L50 16L26 2.66667L2 16L26 29.3333ZM26 29.3333L42.4267 20.208C44.588 25.6962 45.2014 31.6725 44.2 37.4853C37.4362 38.1418 31.0592 40.943 26 45.48C20.9415 40.9435 14.5656 38.1424 7.80267 37.4853C6.80054 31.6725 7.41395 25.6961 9.576 20.208L26 29.3333Z">
                            </path>
                        </svg>
                        <div class="advantages__item-title">Более 10 000</div>
                        <div class="advantages__item-desc">Надежных поставщиков</div>
                    </div>
                    <div class="advantages__item">
                        <svg class="advantages__icon advantages__icon--2" viewbox="0 0 52 52"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.09 1.75A24 24 0 1 0 49.61 28.27H23.09Z"></path>
                            <path d="M49.61 16.38h-15V1.75A24 24 0 0 1 49.24 16.38Z"></path>
                        </svg>
                        <div class="advantages__item-title">Более 100 000</div>
                        <div class="advantages__item-desc">Наименований товаров</div>
                    </div>
                    <div class="advantages__item">
                        <svg class="advantages__icon advantages__icon--3" viewbox="0 0 42 52"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M13 7.33333H7.66671C6.25222 7.33333 4.89567 7.89524 3.89547 8.89543C2.89528 9.89562 2.33337 11.2522 2.33337 12.6667V44.6667C2.33337 46.0812 2.89528 47.4377 3.89547 48.4379C4.89567 49.4381 6.25222 50 7.66671 50H34.3334C35.7479 50 37.1044 49.4381 38.1046 48.4379C39.1048 47.4377 39.6667 46.0812 39.6667 44.6667V12.6667C39.6667 11.2522 39.1048 9.89562 38.1046 8.89543C37.1044 7.89524 35.7479 7.33333 34.3334 7.33333H29M13 7.33333C13 8.74782 13.5619 10.1044 14.5621 11.1046C15.5623 12.1048 16.9189 12.6667 18.3334 12.6667H23.6667C25.0812 12.6667 26.4377 12.1048 27.4379 11.1046C28.4381 10.1044 29 8.74782 29 7.33333M13 7.33333C13 5.91885 13.5619 4.56229 14.5621 3.5621C15.5623 2.5619 16.9189 2 18.3334 2H23.6667C25.0812 2 26.4377 2.5619 27.4379 3.5621C28.4381 4.56229 29 5.91885 29 7.33333M13 31.3333L18.3334 36.6667L29 26">
                            </path>
                        </svg>
                        <div class="advantages__item-title">Гарантия</div>
                        <div class="advantages__item-desc">Официальные поставки</div>
                    </div>
                    <div class="advantages__item">
                        <svg class="advantages__icon advantages__icon--4" viewbox="0 0 52 42"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2 15.6667H50H2ZM12.6667 29H15.3333H12.6667ZM26 29H28.6667H26ZM10 39.6667H42C44.1217 39.6667 46.1566 38.8238 47.6569 37.3235C49.1571 35.8232 50 33.7884 50 31.6667V10.3333C50 8.2116 49.1571 6.17677 47.6569 4.67647C46.1566 3.17618 44.1217 2.33333 42 2.33333H10C7.87827 2.33333 5.84344 3.17618 4.34315 4.67647C2.84286 6.17677 2 8.2116 2 10.3333V31.6667C2 33.7884 2.84286 35.8232 4.34315 37.3235C5.84344 38.8238 7.87827 39.6667 10 39.6667Z">
                            </path>
                        </svg>
                        <div class="advantages__item-title">Оплата</div>
                        <div class="advantages__item-desc">Любые способы</div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="layout">
                <div class="products-grid products-grid--4">
                    <a class="banner" href="#">
                        <img class="banner__img" src="../images/examples/banner/banner.jpg">
                        <div class="banner__desc">
                            <div class="banner__title">Больше товаров<br>Больше выгода!</div>
                            <div class="banner__text">Стоимость единицы товара снижается, в зависимости от его
                                количества в тендере.
                            </div>
                        </div>
                    </a>

                    @foreach($displayProducts->where('type', 3) as $displayProduct_recent)
                        <div class="product-preview product-preview--big"
                             href="/product-card/{{$displayProduct_recent->product->id}}">
                            @if ($displayProduct_recent->product->attachments->first())
                                <img class="product-preview__img"
                                     src="../storage/products/{{$displayProduct_recent->product->attachments->first()->path}}">
                            @else
                                <img class="product-preview__img"
                                     src="../storage/tenderProducts/empty.jpg">
                            @endif
                            <div class="product-preview__desc">
                                <div
                                    class="product-preview__price">{{$displayProduct_recent->product->prices->min('price')}}
                                    - {{$displayProduct_recent->product->prices->max('price')}}₽ шт.
                                </div>
                                <div class="product-preview__minimal">
                                    <div
                                        class="product-preview__minimal-count">{{$displayProduct_recent->product->prices->min('min')}}
                                        шт.
                                    </div>
                                    <div class="product-preview__minimal-desc">Минимальный заказ</div>
                                </div>
                                <a class="product-preview__text"
                                   href="/product-card/{{$displayProduct_recent->product->id}}">{{$displayProduct_recent->product->title}}
                                </a>
                            </div>
                            <div class="product-preview__buttons">
                                <div class="product-preview__button">
                                    <div class="product-preview__button-text">В тендер</div>
                                    <svg class="product-preview__button-icon">
                                        <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                    </svg>
                                </div>
                                <div class="product-preview__button product-preview__button--gray">
                                    <svg class="product-preview__button-icon">
                                        <use xlink:href="../images/icons/icons-sprite.svg#heart"></use>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        {{--
                <section class="section">
                    <div class="layout">
                        <div class="title title--small">Выгодные предложения</div>
                        <div class="categories-preview"><a class="categories-preview__item" href="/_product-cart.html"><img
                                    class="categories-preview__item-img"
                                    src="../images/examples/best-categories/categories-1.jpg">
                                <div class="categories-preview__item-title">Новые поступления</div>
                            </a><a class="categories-preview__item" href="/_product-cart.html"><img
                                    class="categories-preview__item-img"
                                    src="../images/examples/best-categories/categories-2.jpg">
                                <div class="categories-preview__item-title">Туфли <br>и босоножки</div>
                            </a><a class="categories-preview__item" href="/_product-cart.html"><img
                                    class="categories-preview__item-img"
                                    src="../images/examples/best-categories/categories-3.jpg">
                                <div class="categories-preview__item-title">Последние<br>размеры</div>
                            </a><a class="categories-preview__item" href="/_product-cart.html"><img
                                    class="categories-preview__item-img"
                                    src="../images/examples/best-categories/categories-4.jpg">
                                <div class="categories-preview__item-title">100%<br> шерсть</div>
                            </a><a class="categories-preview__item" href="/_product-cart.html"><img
                                    class="categories-preview__item-img"
                                    src="../images/examples/best-categories/categories-1.jpg">
                                <div class="categories-preview__item-title">Новые поступления</div>
                            </a><a class="categories-preview__item" href="/_product-cart.html"><img
                                    class="categories-preview__item-img"
                                    src="../images/examples/best-categories/categories-2.jpg">
                                <div class="categories-preview__item-title">Туфли <br>и босоножки</div>
                            </a><a class="categories-preview__item" href="/_product-cart.html"><img
                                    class="categories-preview__item-img"
                                    src="../images/examples/best-categories/categories-3.jpg">
                                <div class="categories-preview__item-title">Последние<br>размеры</div>
                            </a><a class="categories-preview__item" href="/_product-cart.html"><img
                                    class="categories-preview__item-img"
                                    src="../images/examples/best-categories/categories-4.jpg">
                                <div class="categories-preview__item-title">100%<br> шерсть</div>
                            </a></div>
                    </div>
                </section>
        --}}
        <section class="section">
            <div class="layout">
                <div class="selected-products">
                    <div class="selected-products__block border-block">
                        <div class="selected-products__title">
                            <div class="selected-products__title-text">Лучшее из лучшего</div>
                            <svg class="selected-products__title-icon selected-products__title-icon--star">
                                <use xlink:href="../images/icons/icons-sprite.svg#star"></use>
                            </svg>
                        </div>
                        <div class="selected-products__items">
                            @foreach($displayProducts->where('type', 1) as $displayProduct_best)
                                <a href="/product-card/{{$displayProduct_best->product->id}}"
                                   class="selected-products__item">
                                    @if ($displayProduct_best->product->attachments->first())
                                        <img class="selected-products__item-img"
                                             src="../storage/products/{{$displayProduct_best->product->attachments->first()->path}}">
                                    @else
                                        <img class="selected-products__item-img"
                                             src="../storage/tenderProducts/empty.jpg">
                                    @endif

                                    <div
                                        class="selected-products__item-price">{{$displayProduct_best->product->prices->min('price')}}
                                        - {{$displayProduct_best->product->prices->max('price')}}₽ шт.
                                    </div>
                                    <div class="selected-products__minimal">
                                        <div
                                            class="selected-products__minimal-count">{{$displayProduct_best->product->prices->min('min')}}
                                            шт.
                                        </div>
                                        <div class="selected-products__minimal-desc">Минимальный заказ</div>
                                    </div>
                                </a>
                            @endforeach

                        </div>
                    </div>
                    <div class="selected-products__block border-block">
                        <div class="selected-products__title">
                            <div class="selected-products__title-text">Новинки</div>
                            <svg class="selected-products__title-icon selected-products__title-icon--new-products">
                                <use xlink:href="../images/icons/icons-sprite.svg#new-products"></use>
                            </svg>
                        </div>
                        <div class="selected-products__items">
                            @foreach($displayProducts->where('type', 0) as $displayProduct_new)
                                <a href="/product-card/{{$displayProduct_new->product->id}}"
                                   class="selected-products__item">
                                    @if ($displayProduct_new->product->attachments->first())
                                        <img class="selected-products__item-img"
                                             src="../storage/products/{{$displayProduct_new->product->attachments->first()->path}}">
                                    @else
                                        <img class="selected-products__item-img"
                                             src="../storage/tenderProducts/empty.jpg">
                                    @endif

                                    <div
                                        class="selected-products__item-price">{{$displayProduct_new->product->prices->min('price')}}
                                        - {{$displayProduct_new->product->prices->max('price')}}₽ шт.
                                    </div>
                                    <div class="selected-products__minimal">
                                        <div
                                            class="selected-products__minimal-count">{{$displayProduct_new->product->prices->min('min')}}
                                            шт.
                                        </div>
                                        <div class="selected-products__minimal-desc">Минимальный заказ</div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="layout">
                <div class="title title--small">Категории с самой высокой наценкой</div>
                <div class="categories-labels">
                    @foreach($displayCategories as $displayCategory)
                    <a class="categories-labels__item" href="/products?filter[category]={{$displayCategory->category->id}}">{{$displayCategory->category->name}}</a>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@stop

@section('f_script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        let captchaState = false;

        function captchaCallback() {
            captchaState = true;
        }

        let createTenderBtn = document.getElementById('createNewTenderBtn');
        createTenderBtn.addEventListener('click', (event) => {
            if (event.target.dataset.auth == "true") {
                modals.open('new-tender-products');
            } else {
                document.getElementById('login-hint').style.display = 'block';
                document.getElementById('login-hint-text').innerText = "Перед созданием тендера, войдите в систему.";
                modals.open('login');
            }
        });

        function uploadTender(e) {
            if (e.classList.contains('form-check__button--disabled') || captchaState == false) {
                return
            }

            let formData = new FormData();
            let productId = 0;

            let tenderProdList = document.getElementById('new-tender-products-list');
            tenderProdList.childNodes.forEach((tenderProductListItem, tenderProductListItemIndex) => {
                if (tenderProductListItem.nodeType == 1) {
                    tenderProductListItem.childNodes[3].childNodes.forEach((productItem, productItemIndex) => {
                        if (productItemIndex == 1) {
                            formData.append("tender[products][" + productId + "][title]", productItem.childNodes[1].childNodes[1].value);
                        } else if (productItemIndex == 3) {
                            formData.append("tender[products][" + productId + "][description]", productItem.childNodes[1].childNodes[1].value);
                        } else if (productItemIndex == 5) {
                            formData.append("tender[products][" + productId + "][count]", productItem.childNodes[3].childNodes[1].childNodes[3].value);
                        } else if (productItemIndex == 7) {
                            formData.append("tender[products][" + productId + "][sample]", productItem.childNodes[3].childNodes[1].checked);
                        } else if (productItemIndex == 9) {
                            productItem.childNodes[1].childNodes[1].childNodes.forEach((productImage, productImageIndex) => {
                                if (productImage.tagName == 'LABEL') {
                                    let files = productImage.childNodes[1].childNodes[5].files;
                                    formData.append("tender[products][" + productId + "][attachments_count]", files.length);
                                    for (var i = 0; i < files.length; i++) {
                                        formData.append("tender[products][" + productId + "][attachments][" + i + "][file]", files[i]);
                                    }
                                }
                            });
                        }
                    });
                    productId++;
                }
            });
            console.log('_________________');

            axios({
                method: 'POST',
                url: `{{ route('tender-create') }}`,
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'Content-Type': 'multipart/form-data'
                },
            })
                .then((response) => {
                    console.log("AX");
                    console.log(response.data);
                    modals.close('new-tender-products');
                    modals.open('new-tender-success');
                    //window.location = 'http://188.225.85.66?message=' + response.data;
                })
                .catch((err) => {
                    console.log(err)
                });

        }
    </script>
@stop
