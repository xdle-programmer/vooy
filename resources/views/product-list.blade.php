@extends('layouts.app')
@section('h_script')
@stop

@section('content')
    <div class="wrapper">
        <section class="section section--small">
            <div class="layout">
                <div class="breadcrumbs">
                    <a class="breadcrumbs__item" href="/">Главная</a>
                    @if ($saveFilter != null)

                        @if (isset($saveFilter['category']) && $saveFilter['category'] != "0")
                            <a  class="breadcrumbs__item" href="/products">Список товаров</a>
                            <div class="breadcrumbs__item breadcrumbs__item--active">{{\App\Models\Category::find($saveFilter['category'])->name}}</div>
                        @else
                            <div class="breadcrumbs__item breadcrumbs__item--active">Список товаров</div>
                        @endif
                    @else
                    <div class="breadcrumbs__item breadcrumbs__item--active">Список товаров</div>
                    @endif
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
                                <input type="hidden" name="filter[category]" id="category-hidden"
                                       @if ($saveFilter != null)
                                       value="{{$saveFilter['category'] ?? 0}}"
                                       @else
                                       value="0"
                                       @endif>
                                <div id="filter-categories" class="catalog__filters-group-item">

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
                                                        value="{{$saveFilter['price']['min'] ?? null}}"
                                                        @endif
                                                        name="filter[price][min]"
                                                        class="input placeholder__input min-max-slider__input min-max-slider__input--min"
                                                        placeholder="Мин.">
                                                    <div class="placeholder__item">Мин.</div>
                                                </div>
                                                <div class="min-max-slider__input-wrapper placeholder">
                                                    <input
                                                        @if ($saveFilter != null)
                                                        value="{{$saveFilter['price']['max'] ?? null}}"
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
                                                        value="{{$saveFilter['order']['min'] ?? null}}"
                                                        @endif
                                                        name="filter[order][min]"
                                                        class="input placeholder__input min-max-slider__input min-max-slider__input--min"
                                                        placeholder="Мин.">
                                                    <div class="placeholder__item">Мин.</div>
                                                </div>
                                                <div class="min-max-slider__input-wrapper placeholder">
                                                    <input
                                                        @if ($saveFilter != null)
                                                        value="{{$saveFilter['order']['max'] ?? null}}"
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

                            <div class="catalog__filters-group-buttons">
                                <div  @if ($saveFilter != null)
                                      onclick="clearFilter()"
                                      @endif

                                    class="catalog__filters-group-button catalog__filters-group-button-red">
                                    <svg class="product-preview__button-icon">
                                        <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                    </svg>
                                </div>
                                <button class="catalog__filters-group-button">
                                    <div class="product-preview__button-text">Применить</div>

                                </button>
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
                        {{--
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
                        --}}
                        <div class="catalog__items-list catalog__items-list--products">
                            @if ($products != null)
                                @foreach($products as $product)
                                    <div class="product-preview product-preview--big"
                                         href="/product-card/{{$product->id}}">
                                        @if ($product->attachments->first())
                                            <a href="/product-card/{{$product->id}}">
                                            <img class="product-preview__img"
                                                 src="../storage/products/{{$product->attachments->first()->path}}">
                                            </a>
                                        @else
                                            <a href="/product-card/{{$product->id}}">
                                            <img class="product-preview__img"
                                                 src="../storage/tenderProducts/empty.jpg">
                                            </a>
                                        @endif
                                        <div class="product-preview__desc">
                                            @if ($product->prices->min('price') == $product->prices->max('price'))
                                                <div class="product-preview__price">{{$product->prices->min('price')}}₽ шт.
                                                </div>
                                            @else
                                                <div class="product-preview__price">{{$product->prices->min('price')}}
                                                    - {{$product->prices->max('price')}}₽ шт.
                                                </div>
                                            @endif

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
                                            @auth
                                                @if (Auth::user()->whereHas('roles', function ($q) {
                                                        $q->where('slug', 'provider');
                                                        })->where('id', Auth::user()->id)->first() != null)
                                                    <div style="display: none;" data-product="{{$product->id}}" class="product-preview__button product-add-btn">
                                                        <div class="product-preview__button-text" >В тендер</div>
                                                        <svg class="product-preview__button-icon">
                                                            <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                                        </svg>
                                                    </div>
                                                @else
                                                    <div data-product="{{$product->id}}" class="product-preview__button product-add-btn">
                                                        <div class="product-preview__button-text" >В тендер</div>
                                                        <svg class="product-preview__button-icon">
                                                            <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                                        </svg>
                                                    </div>
                                                    @if ($product->product_favorites->where('id', auth()->user()->id)->first() != null)
                                                        <div data-fav="true" data-product="{{$product->id}}"
                                                             class="product-preview__button product-favorite-btn">
                                                            <svg class="product-preview__button-icon">
                                                                <use xlink:href="../images/icons/icons-sprite.svg#heart"></use>
                                                            </svg>
                                                        </div>
                                                    @else
                                                        <div data-fav="false" data-product="{{$product->id}}"
                                                             class="product-preview__button product-preview__button--gray product-favorite-btn">
                                                            <svg class="product-preview__button-icon">
                                                                <use xlink:href="../images/icons/icons-sprite.svg#heart"></use>
                                                            </svg>
                                                        </div>
                                                    @endif
                                                @endif
                                            @else
                                                <div  class="product-preview__button" data-modal-open="login">
                                                    <div class="product-preview__button-text" >В тендер</div>
                                                    <svg class="product-preview__button-icon">
                                                        <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                                    </svg>
                                                </div>
                                            @endauth

                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                        <!--START PAG -->
                         {!! $products->appends(Request::except('page'))->links('pagination.default') !!}
                        <!--END PAG-->
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        let CATEGORIES = {!! json_encode($categories) !!};
        let FILTER = {!! json_encode($saveFilter) !!};
        console.log(FILTER)
        console.log(CATEGORIES)
        let $categories = document.getElementById('filter-categories');
        let parrentCategories = CATEGORIES.filter((i) => {
            return i.parrent_id == null;
        });
        let categoryHidden = document.getElementById('category-hidden');

        parrentCategories.forEach(category => {
            fillCategory(category);
            console.log('fill')
        })

        function fillCategory(category, parrentNode = $categories) {
            let childCategories = CATEGORIES.filter((i) => {
                return i.parrent_id == category.id;
            });
            let arrowHtml = ``;
            let currentCategoryHtml =``;

            if (FILTER != null){
                if (category.id == FILTER.category)
                    currentCategoryHtml = `catalog__filters-link-counter-current`;
            }


            if (childCategories.length > 0)
                arrowHtml = `<div class="catalog__icon-arrow" data-parrent="${category.id}" onclick="openContainer(this)">
                    <svg viewBox="0 0 24 24" fill="currentColor" class="filterIcon-0-2-297 icon-0-2-31"><path d="M17.2946 9.29462C16.9053 8.90534 16.2743 8.905 15.8846 9.29385L12 13.17L8.11538 9.29385C7.72569 8.905 7.09466 8.90534 6.70538 9.29462C6.31581 9.68419 6.31581 10.3158 6.70538 10.7054L12 16L17.2946 10.7054C17.6842 10.3158 17.6842 9.68419 17.2946 9.29462Z"></path></svg>
                </div>`
//onclick="setCurrentCategory(this)"
            let categoryHtml = `
               <div class="catalog__filters-category-container">
               <a name="filter[category]"  data-value="${category.id}" href="products?filter[category]=${category.id}" class="catalog__filters-link-counter ${currentCategoryHtml}">
                    <div class="catalog__filters-link-counter-text">${category.name}</div>
                    <div class="catalog__filters-link-counter-count">(${category.products.length})</div>
               </a>
                    ${arrowHtml}
                </div>`
            parrentNode.insertAdjacentHTML('beforeend', categoryHtml);


            if (childCategories.length > 0) {
                let parrentDiv = document.createElement('div');
                parrentDiv.classList.add('catalog__filters-category-container-sub-close')
                //parrentDiv.classList.add('catalog__filters-category-container-sub-open')
                parrentDiv.classList.add('parrent-category-' + category.id)
                parrentNode.appendChild(parrentDiv);

                childCategories.forEach(cCategory => {
                    fillCategory(cCategory, parrentDiv);
                })
            }

        }

        function setCurrentCategory(e){
            //log.e.target

            console.log(e.dataset.value)
            categoryHidden.value = e.dataset.value;
            document.querySelectorAll('.catalog__filters-link-counter-current').forEach(item=>{
                item.classList.remove('catalog__filters-link-counter-current')
            })
            e.classList.add('catalog__filters-link-counter-current')

        }

        function openContainer(container){
            let $container = document.querySelector('.parrent-category-' + container.dataset.parrent)

            if ($container.classList.contains('catalog__filters-category-container-sub-close'))
            {
                $container.classList.add('catalog__filters-category-container-sub-open')
                $container.classList.remove('catalog__filters-category-container-sub-close')
                container.classList.add('catalog__icon-arrow-revert')
            }
            else if ($container.classList.contains('catalog__filters-category-container-sub-open'))
            {
                $container.classList.add('catalog__filters-category-container-sub-close')
                $container.classList.remove('catalog__filters-category-container-sub-open')
                container.classList.remove('catalog__icon-arrow-revert')
            }

        }

        function clearFilter(){
            window.location =  window.location.origin + window.location.pathname
        }
    </script>
@stop
{{--
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
--}}
