@extends('layouts.app')
@section('h_script')
@stop

@section('content')
    <div class="wrapper">
        <section class="section section--small">
            <div class="layout">
                <div class="breadcrumbs">
                    <a class="breadcrumbs__item" href="/">Главная</a>
                    <div class="breadcrumbs__item breadcrumbs__item--active">Избраное</div>
                </div>
                <div class="title-count">
                    <div class="title-count__item">Количество избранных товаров</div>
                    <div class="title-count__desc">{{$products->count()}}</div>
                </div>
            </div>
        </section>
        <section class="section section--small">
            <div class="layout">
                <div class="catalog catalog__single">
                    <div class="catalog__items">

                        {{--
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
                      --}}
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
                                            @auth
                                                <div data-product="{{$product->id}}"
                                                     class="product-preview__button product-add-btn">
                                                    <div class="product-preview__button-text">В тендер</div>
                                                    <svg class="product-preview__button-icon">
                                                        <use
                                                            xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                                    </svg>
                                                </div>
                                                @if ($product->product_favorites->where('id', auth()->user()->id)->first() != null)
                                                    <div data-fav="true" data-product="{{$product->id}}"
                                                         class="product-preview__button product-favorite-btn">
                                                        <svg class="product-preview__button-icon">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#heart"></use>
                                                        </svg>
                                                    </div>
                                                @else
                                                    <div data-fav="false" data-product="{{$product->id}}"
                                                         class="product-preview__button product-preview__button--gray product-favorite-btn">
                                                        <svg class="product-preview__button-icon">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#heart"></use>
                                                        </svg>
                                                    </div>
                                                @endif
                                            @else
                                                <div class="product-preview__button" data-modal-open="login">
                                                    <div class="product-preview__button-text">В тендер</div>
                                                    <svg class="product-preview__button-icon">
                                                        <use
                                                            xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                                    </svg>
                                                </div>
                                            @endauth

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
