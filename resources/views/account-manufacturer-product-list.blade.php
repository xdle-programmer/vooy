@extends('account-manufacturer')


@section('main_item')

    <div class="account__item border-block">
        <div class="account__item-settings">
            <div class="title-count">
                <div class="title-count__item">Мои товары</div>
                <div class="title-count__desc"></div>
            </div>

            <div class="catalog__items">

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
                                <a href="/product-edit/{{$product->id}}" class="product-preview__buttons">
                                    <div class="product-preview__button">
                                        <div class="product-preview__button-text">Редактировать</div>
                                        <svg class="product-preview__button-icon">
                                            <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>

        </div>

    </div>



@stop
