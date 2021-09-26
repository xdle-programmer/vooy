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
                <div class="breadcrumbs"><a class="breadcrumbs__item" href="/">Главная</a>
                    <div class="breadcrumbs__item breadcrumbs__item--active">Список товаров</div>
                </div>
                <div class="title-count">
                    <div class="title-count__item">Количество товаров</div>
                    <div class="title-count__desc">{{$products->count()}}</div>
                </div>
            </div>
        </section>
        <section class="section section--small">
            <div class="layout">
                <div class="catalog">
                    <div class="catalog__filters border-block">
                        <form method="GET" action="{{ route('product-list') }}">
                            <div class="catalog__filters-group">
                                <div class="catalog__filters-title">Категория</div>
                                <div class="catalog__filters-group-item">
                                    @foreach($categories as $category)
                                        <button name="filter[category]" value="{{$category->id}}"
                                                class="catalog__filters-link-counter">
                                            <div class="catalog__filters-link-counter-text">{{$category->name}}</div>
                                            @if ($category->products->count() != 0)
                                                <div class="catalog__filters-link-counter-count">
                                                    ({{$category->products->count()}})
                                                </div>
                                            @endif
                                        </button>
                                    @endforeach
                                </div>
                            </div>
                            <div class="catalog__filters-group">
                                <div class="catalog__filters-title">Цена</div>
                                <div class="catalog__filters-group-item">
                                    <div class="catalog__filters-item">
                                        <div class="min-max-slider">
                                            <div class="min-max-slider__inputs">
                                                <div class="min-max-slider__input-wrapper placeholder">
                                                    <input
                                                        @if ($saveFilter != null)
                                                        value="{{$saveFilter['price']['min']}}"
                                                        @endif
                                                        name="filter[price][min]"
                                                        class="input placeholder__input min-max-slider__input min-max-slider__input--min"
                                                        placeholder="Мин.">
                                                    <div class="placeholder__item">Мин.</div>
                                                </div>
                                                <div class="min-max-slider__input-wrapper placeholder">
                                                    <input
                                                        @if ($saveFilter != null)
                                                        value="{{$saveFilter['price']['max']}}"
                                                        @endif
                                                        name="filter[price][max]"
                                                        class="input placeholder__input min-max-slider__input min-max-slider__input--max"
                                                        placeholder="Макс.">
                                                    <div class="placeholder__item">Макс.</div>
                                                </div>
                                            </div>
                                            <div class="min-max-slider__range"
                                                 data-min="{{App\Models\ProductPrice::min('price')}}"
                                                 data-max="{{App\Models\ProductPrice::max('price')}}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="catalog__filters-group">
                                <div class="catalog__filters-title">Мин.заказ</div>
                                <div class="catalog__filters-group-item">
                                    <div class="catalog__filters-item">
                                        <div class="min-max-slider">
                                            <div class="min-max-slider__inputs">
                                                <div class="min-max-slider__input-wrapper placeholder">
                                                    <input
                                                        @if ($saveFilter != null)
                                                        value="{{$saveFilter['order']['min']}}"
                                                        @endif
                                                        name="filter[order][min]"
                                                        class="input placeholder__input min-max-slider__input min-max-slider__input--min"
                                                        placeholder="Мин.">
                                                    <div class="placeholder__item">Мин.</div>
                                                </div>
                                                <div class="min-max-slider__input-wrapper placeholder">
                                                    <input
                                                        @if ($saveFilter != null)
                                                        value="{{$saveFilter['order']['max']}}"
                                                        @endif
                                                        name="filter[order][max]"
                                                        class="input placeholder__input min-max-slider__input min-max-slider__input--max"
                                                        placeholder="Макс.">
                                                    <div class="placeholder__item">Макс.</div>
                                                </div>
                                            </div>
                                            <div class="min-max-slider__range"
                                                 data-min="{{App\Models\ProductPrice::min('min')}}"
                                                 data-max="{{App\Models\ProductPrice::max('min')}}"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="catalog__filters-group">
                                @if ($characteristics != null)
                                    @foreach($characteristics->characteristics as $characteristic)
                                        @php
                                            $savedSelect = null;
                                            if (array_key_exists('characteristic', $saveFilter)){
                                               if (array_key_exists($characteristic->id, $saveFilter['characteristic'])) {
                                                      $savedSelect = $saveFilter['characteristic'][$characteristic->id];
                                               }
                                            }
                                        @endphp
                                        <div class="catalog__filters-title">{{$characteristic->name}} </div>
                                        @if ($characteristic->type == 1)
                                            <input
                                                value="{{$savedSelect}}"
                                                name="filter[characteristic][{{$characteristic->id}}]"
                                                class="input">
                                        @elseif ($characteristic->type == 2)
                                            <input type="number"
                                                   value="{{$savedSelect}}"
                                                   name="filter[characteristic][{{$characteristic->id}}]"
                                                   class="input">
                                        @elseif ($characteristic->type == 3)
                                            <div class="catalog__filters-group-item">
                                                @foreach($characteristic->selects as $select)
                                                    <div class="catalog__filters-item">
                                                        <label class="checkbox">
                                                            <input
                                                                @if($savedSelect != null)
                                                                @if (array_key_exists($select->id, $savedSelect))
                                                                checked
                                                                @endif
                                                                @endif
                                                                name="filter[characteristic][{{$characteristic->id}}][{{$select->id}}]"
                                                                class="checkbox__input" type="checkbox">
                                                            <span class="checkbox__item">
                                                            <svg class="checkbox__icon">
                                                                <use
                                                                    xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                            </svg>
                                                            <span class="checkbox__text">{{$select->name}}</span>
                                                        </span>
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif

                                    @endforeach
                                @endif
                            </div>
                        </form>
                    </div>

                    <div class="catalog__items">
                        <div class="catalog__items-lead lead border-block"><img class="lead__icon"
                                                                                src="images/icons/illustrations/hands-compass.png">
                            <div class="lead__desc">
                                <div class="lead__desc-title">Полный спект услуг</div>
                                <div class="lead__desc-text">Мы можем организовать доставку по Китаю и России,
                                    растаможку в
                                    России, а так же поможем в переговорах с поставщиками
                                </div>
                            </div>
                        </div>
                        <div class="catalog__items-header">
                            <div class="catalog__sort">
                                <div class="catalog__sort-title">Сортрировать по</div>
                                <select class="catalog__sort-select">
                                    <option value="0" selected="">популярности</option>
                                    <option value="1">количеству побед</option>
                                    <option value="2">количеству товаров</option>
                                </select>
                            </div>
                        </div>

                        <div class="catalog__items-list catalog__items-list--products">
                            @if ($products != null)
                                @foreach($products as $product)
                                    <div class="product-preview product-preview--big"
                                       href="/product-card/{{$product->id}}">
                                        @if ($product->attachments->first())
                                            <img class="product-preview__img"
                                                 src="../storage/products/{{$product->attachments->first()->path}}">
                                        @else
                                            <img class="product-preview__img"
                                                 src="../storage/tenderProducts/empty.jpg">
                                        @endif
                                        <div class="product-preview__desc">
                                            <div class="product-preview__price">{{$product->prices->min('price')}}
                                                - {{$product->prices->max('price')}}₽ шт.
                                            </div>
                                            <div class="product-preview__minimal">
                                                <div
                                                    class="product-preview__minimal-count">{{$product->prices->min('min')}}
                                                    шт.
                                                </div>
                                                <div class="product-preview__minimal-desc">Минимальный заказ</div>
                                            </div>
                                            <a class="product-preview__text"
                                               href="/product-card/{{$product->id}}">{{$product->title}}
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
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        $FILTER = {!! json_encode($saveFilter) !!};
        console.log($FILTER)
    </script>
@stop

