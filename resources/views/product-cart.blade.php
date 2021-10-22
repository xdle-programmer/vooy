<!--
Миксины
Строка тендера: Товар, название, дата, номер, количество, стоимость, статус, опционально оценка
Строка товара в тендере: Товар, название, количество, образец, комментарий
Строка предложения товара: Товар, название, количество, стоимость, срок, образец, комментарий поставщика
Строка предложения поставщика: Лого, поставщик, количество, стоимость, срок, образец, комментарий поставщика, победитель, чат

-->
<!--
Роль: Посетитель
Страница: Общий список, миксины: Строка тендера
Страница: Страница тендера, миксины: Строка товара в тендере
Страница: Страница поставщика, миксины: Строка тендера (с оценкой)

-->
<!--
Роль: Покупатель
Страница: Общий список, миксины: Строка тендера
Страница: Страница поиска поставщика, миксины: Строка товара в тендере, Строка предложения товара, Строка предложения поставщика
Страница: Страница тендера в реализации, миксины: Строка предложения товара
Страница: Страница архивного тендера, миксины: Строка предложения товара

-->
<!--
Роль: Производитель
Страница: Общий список Строка тендера
Страница: Страница тендера без ответа, миксины: Строка товара в тендере
Страница: Страница тендера с ответом, миксины: Товар на странице тендера, Строка предложения товара
Страница: Страница тендера в реализации, миксины: Строка предложения товара
Страница: Страница архивного тендера, миксины: Строка предложения товара


-->
<!--Строка тендера (заголовок)-->
<!--Строка тендера-->
<!--Строка товара в тендере (заголовок)-->
<!--Строка товара в тендере-->
<!--Строка предложения товара-->
<!--Строка предложения поставщика-->
@extends('layouts.app')
@section('h_script')
@stop

@section('content')
    <div class="wrapper">
        <section class="section section--small">
            <div class="layout">
                <div class="breadcrumbs">
                    <a class="breadcrumbs__item" href="/">Главная</a>
                    <a class="breadcrumbs__item" href="/products">Каталог</a>
                    <div class="breadcrumbs__item breadcrumbs__item--active">{{$product->title}}</div>
                </div>
                <div class="product-cart">
                    <div class="product-cart__title">
                        <div class="product-cart__title-text">{{$product->title}}
                        </div>
                        <div class="product-cart__title-code">Код товара: {{$product->id}}</div>
                    </div>
                    <div class="product-cart__block border-block">
                        <div class="product-cart__img">
                            @if ($product->attachments->first())
                                <div class="product-cart__slider-wrapper">
                                    <svg
                                        class="product-cart__slider-navigation-button product-cart__slider-navigation-button--prev">
                                        <use xlink:href="/images/icons/icons-sprite.svg#arrow"></use>
                                    </svg>
                                    <div class="product-cart__slider">
                                        @foreach($product->attachments as $att)
                                            <div class="product-cart__slide"><img class="product-cart__slide-img"
                                                                                  src="/storage/products/{{$att->path}}"
                                                                                  data-preview-url="/storage/products/{{$att->path}}">
                                            </div>
                                        @endforeach
                                    </div>
                                    <svg
                                        class="product-cart__slider-navigation-button product-cart__slider-navigation-button--next">
                                        <use xlink:href="/images/icons/icons-sprite.svg#arrow"></use>
                                    </svg>
                                </div>
                            @endif

                            @if ($product->attachments->first())
                                <div class="product-cart__img-preview-wrapper"><img class="product-cart__img-preview"
                                                                                    src="/storage/products/{{$product->attachments->first()->path}}">
                                </div>
                            @else
                                <div class="product-cart__img-preview-wrapper"><img class="product-cart__img-preview"
                                                                                    src="/storage/tenderProducts/empty.jpg">
                                </div>
                            @endif
                        </div>
                        <div class="product-cart__desc">
                            @if ($product->prices != null)
                                <div class="product-cart__price-block">
                                    @foreach($product->prices as $price)
                                        <div class="product-cart__price-item">
                                            <div class="product-cart__price-count">{{$price->min}} - {{$price->max}} шт.</div>
                                            <div class="product-cart__price-value">{{$price->price}} ₽</div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif


                            <div class="product-cart__buttons-wrapper">
                                <div class="product-cart__buttons">
                                    <div class="product-cart__button">
                                        <div class="product-cart__button-text">Добавить в тендер</div>
                                        <svg class="product-cart__button-icon">
                                            <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                        </svg>
                                    </div>
                                    <div class="product-cart__button product-cart__button--gray">
                                        <svg class="product-cart__button-icon">
                                            <use xlink:href="../images/icons/icons-sprite.svg#heart"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="product-cart__buttons-hint">После публикации тендера поставщики предложат
                                    свои
                                    цены на товар
                                </div>
                            </div>
                            <div class="product-cart__hint">
                                <div class="hint">
                                    <svg class="hint__icon">
                                        <use xlink:href="../images/icons/icons-sprite.svg#exclamation"></use>
                                    </svg>
                                    <div class="hint__text">Мы можем организовать доставку по Китаю и России, помочь с
                                        расстаможкой и в переговорах с поставщиком
                                    </div>
                                </div>
                            </div>

                            <div class="product-cart__tabs">
                                <div class="tabs tabs--small">
                                    <div class="tabs__header">
                                        <div class="tabs__toggle-nav">
                                            <div class="tabs__toggle-nav-button tabs__toggle-nav-button--prev">
                                                <svg class="tabs__toggle-nav-button-icon">
                                                    <use xlink:href="../images/icons/icons-sprite.svg#arrow"></use>
                                                </svg>
                                            </div>
                                            <div class="tabs__toggle-nav-button tabs__toggle-nav-button--next">
                                                <svg class="tabs__toggle-nav-button-icon">
                                                    <use xlink:href="../images/icons/icons-sprite.svg#arrow"></use>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="tabs__toggle-buttons">
                                            <div class="tabs__toggle-button tabs__toggle-button--active">Характеристики
                                            </div>
                                            <div class="tabs__toggle-button">Описание</div>
                                        </div>
                                    </div>
                                    <div class="tabs__toggle-items">
                                        <div
                                            class="tabs__toggle-item tabs__toggle-item--active tabs__toggle-item--active-effect">
                                            <div class="options">
                                                @foreach($product->characteristics as $characteristic)
                                                    <div class="options__item">
                                                        <div class="options__item-name">{{$characteristic->characteristic->name}}:</div>
                                                        @if ($characteristic->characteristic->type == 3)
                                                            @foreach($characteristic->characteristic->selects as $select)
                                                                @php
                                                                    $curCb = $select->productselects->where('product_id', $product->id)->first();
                                                                @endphp
                                                                @if($curCb != null)
                                                                    @if($curCb->value == 'true')
                                                                        {{$select->name}}@if(!$loop->last),@endif
                                                                    @endif
                                                                @endif
                                                            @endforeach
                                                        @else
                                                            <div class="options__item-value">{{$characteristic->value}}</div>
                                                        @endif

                                                    </div>
                                                @endforeach

                                            </div>
                                        </div>
                                        <div class="tabs__toggle-item">
                                            <div class="product-cart__text">{{$product->description}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="product-cart__footnote">Информация о технических характеристиках и внешнем виде
                                товара носит справочный характер и основывается на последних доступных сведениях от
                                производителя
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--small">
            <div class="layout">
                <div class="lead m-col border-block"><img class="lead__icon" src="images/icons/illustrations/hands-box.png">
                    <div class="lead__desc">
                        <div class="lead__desc-title">Не можете найти нужный вам товар?</div>
                        <div class="lead__desc-text">Оставьте заявку на свой товар, и мы поможем вам найти, заказать,
                            привезти нужный вам товар в любом количестве!
                        </div>
                    </div>
                    <div class="lead__button button">Оставьте заявку</div>
                </div>
            </div>
        </section>
        <section class="section">
            <div class="layout">
                <div class="title title--small">Похожие товары!</div>
                <div class="products-grid">
                    <div class="product-preview" href="/">
                        <img class="product-preview__img" src="/images/examples/products-preview/products-preview-0.jpg">
                        <div class="product-preview__desc">
                            <div class="product-preview__price">3999 - 6000 ₽ шт.</div>
                            <div class="product-preview__minimal">
                                <div class="product-preview__minimal-count">500 шт.</div>
                                <div class="product-preview__minimal-desc">Минимальный заказ</div>
                            </div>
                            <a class="product-preview__text" href="/_product-cart.html">Дешевая мода 2020, оптовая
                                продажа,
                                комплекты детской</a>
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
                    <div class="product-preview" href="/">
                        <img class="product-preview__img" src="/images/examples/products-preview/products-preview-0.jpg">
                        <div class="product-preview__desc">
                            <div class="product-preview__price">3999 - 6000 ₽ шт.</div>
                            <div class="product-preview__minimal">
                                <div class="product-preview__minimal-count">500 шт.</div>
                                <div class="product-preview__minimal-desc">Минимальный заказ</div>
                            </div>
                            <a class="product-preview__text" href="/_product-cart.html">Дешевая мода 2020, оптовая
                                продажа,
                                комплекты детской</a>
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
                    <div class="product-preview" href="/">
                        <img class="product-preview__img" src="/images/examples/products-preview/products-preview-0.jpg">
                        <div class="product-preview__desc">
                            <div class="product-preview__price">3999 - 6000 ₽ шт.</div>
                            <div class="product-preview__minimal">
                                <div class="product-preview__minimal-count">500 шт.</div>
                                <div class="product-preview__minimal-desc">Минимальный заказ</div>
                            </div>
                            <a class="product-preview__text" href="/_product-cart.html">Дешевая мода 2020, оптовая
                                продажа,
                                комплекты детской</a>
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
                    <div class="product-preview" href="/">
                        <img class="product-preview__img" src="/images/examples/products-preview/products-preview-0.jpg">
                        <div class="product-preview__desc">
                            <div class="product-preview__price">3999 - 6000 ₽ шт.</div>
                            <div class="product-preview__minimal">
                                <div class="product-preview__minimal-count">500 шт.</div>
                                <div class="product-preview__minimal-desc">Минимальный заказ</div>
                            </div>
                            <a class="product-preview__text" href="/_product-cart.html">Дешевая мода 2020, оптовая
                                продажа,
                                комплекты детской</a>
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
                    <div class="product-preview" href="/">
                        <img class="product-preview__img" src="/images/examples/products-preview/products-preview-0.jpg">
                        <div class="product-preview__desc">
                            <div class="product-preview__price">3999 - 6000 ₽ шт.</div>
                            <div class="product-preview__minimal">
                                <div class="product-preview__minimal-count">500 шт.</div>
                                <div class="product-preview__minimal-desc">Минимальный заказ</div>
                            </div>
                            <a class="product-preview__text" href="/_product-cart.html">Дешевая мода 2020, оптовая
                                продажа,
                                комплекты детской</a>
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

                </div>
            </div>
        </section>
    </div>

    <script>
        let PRODUCT
             = {!! json_encode($product) !!};


        console.log(PRODUCT)
    </script>
@stop
