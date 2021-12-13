@extends('layouts.app')

@section('h_script')

@stop

@section('content')
    <div class="wrapper">
        <section class="section ">
            <div class="layout">
                <div class="title title--small">Последние тендеры</div>
                    <div class="layout layout__overflow-x border-block">
                        <div class="tender-row tender-row--header tender-row--without-status">
                            <div class="tender-row__item">Фото</div>
                            <div class="tender-row__item">Наименование</div>
                            <div class="tender-row__item">Товары</div>
                            <div class="tender-row__item">Дата создания</div>
                            <div class="tender-row__item">Количество товаров</div>
                            <div class="tender-row__item">Коментарий</div>
                            <div class="tender-row__item">Осталось времени</div>
                        </div>

                        @foreach ($lastTenders as $key => $tender)
                            @php
                                $dataFilter = "";
                                if ($tender->status_id == 5)
                                $dataFilter .= "archive";
                                else
                                $dataFilter .= "active";

                                if ($tender->provider_id == Auth::user()->id)
                                $dataFilter .= ", my";

                                $timeLeft = "Завершен";
                                if($tender->date_end != null)
                                     $timeLeft = Carbon\Carbon::parse($tender->date_end)->diffInHours(Carbon\Carbon::now('UTC')) . "ч";
                            @endphp
                            <div class="filter__item" data-filter="{{$dataFilter}}">

                                @if ($tender->provider_id == Auth::user()->id)
                                    <div class="tender-row tender-row--without-status tender-row--selected">
                                        @else
                                            <div class="tender-row tender-row--without-status ">
                                                @endif

                                                @if ($tender->products->first())
                                                    <div class="tender-row__item">
                                                        @if ($tender->products->first()->attachments->first())
                                                            <img class="tender-row__preview"
                                                                 src="../storage/tenderProducts/{{$tender->products->first()->attachments->first()->path}}">
                                                        @else
                                                            <img class="tender-row__preview"
                                                                 src="../storage/tenderProducts/empty.jpg">
                                                        @endif
                                                    </div>
                                                @else
                                                    <div class="tender-row__item"><img class="tender-row__preview" src="../storage/tenderProducts/empty.jpg">
                                                    </div>
                                                @endif
                                                <a class="tender-row__item tender-row__item--left tender-row__item--link tender-row__item--middle"
                                                   href="{{route('tenders-info', ['id' => $tender->id])}}">Тендер #{{$tender->id}}</a>

                                                <div class="tender-row__item tender-row__item--small">
                                                    @foreach($tender->products as $product)
                                                        {{$product->title}}@if(!$loop->last),@endif
                                                    @endforeach
                                                </div>

                                                <div class="tender-row__item tender-row__item--small">{{$tender->created_at->format('d.m.Y')}}</div>
                                                @if ($tender->products->first())
                                                    <div
                                                        class="tender-row__item tender-row__item--big">{{$tender->products->sum('count')}}</div>
                                                @else
                                                    <div class="tender-row__item tender-row__item--big">нет</div>
                                                @endif

                                                <div class="tender-row__item tender-row__item--small">{{$tender->description}}</div>

                                                <div class="tender-row__item tender-row__item">{{$timeLeft}}</div>

                                            </div>
                                    </div>
                                    @endforeach
                            </div>
                    </div>
            </div>
        </section>

        <section class="section ">
            <div class="layout">
                <div class="title title--small">Тендеры с вашими ответами</div>
                <div class="layout layout__overflow-x border-block">
                    <div class="tender-row tender-row--header tender-row--without-assessment">
                        <div class="tender-row__item">Фото</div>
                        <div class="tender-row__item">Наименование</div>
                        <div class="tender-row__item">Товары</div>
                        <div class="tender-row__item">Дата создания</div>
                        <div class="tender-row__item">Количество товаров</div>
                        <div class="tender-row__item">Коментарий</div>
                        <div class="tender-row__item">Осталось времени</div>
                        <div class="tender-row__item">Статус</div>
                    </div>

                    @foreach ($myTenders as $key => $tender)
                        @php
                            $dataFilter = "";
                            if ($tender->status_id == 5)
                            $dataFilter .= "archive";
                            else
                            $dataFilter .= "active";

                            if ($tender->provider_id == Auth::user()->id)
                            $dataFilter .= ", my";

                            $timeLeft = "Завершен";
                            if($tender->date_end != null)
                                 $timeLeft = Carbon\Carbon::parse($tender->date_end)->diffInHours(Carbon\Carbon::now('UTC')) . "ч";
                        @endphp
                        <div class="filter__item" data-filter="{{$dataFilter}}">

                            @if ($tender->provider_id == Auth::user()->id)
                                <div class="tender-row tender-row--without-assessment tender-row--selected">
                                    @else
                                        <div class="tender-row tender-row--without-assessment">
                                            @endif

                                            @if ($tender->products->first())
                                                <div class="tender-row__item">
                                                    @if ($tender->products->first()->attachments->first())
                                                        <img class="tender-row__preview"
                                                             src="../storage/tenderProducts/{{$tender->products->first()->attachments->first()->path}}">
                                                    @else
                                                        <img class="tender-row__preview"
                                                             src="../storage/tenderProducts/empty.jpg">
                                                    @endif
                                                </div>
                                            @else
                                                <div class="tender-row__item"><img class="tender-row__preview" src="../storage/tenderProducts/empty.jpg">
                                                </div>
                                            @endif
                                            <a class="tender-row__item tender-row__item--left tender-row__item--link tender-row__item--middle"
                                               href="{{route('tenders-info', ['id' => $tender->id])}}">Тендер #{{$tender->id}}</a>

                                            <div class="tender-row__item tender-row__item--small">
                                                @foreach($tender->products as $product)
                                                    {{$product->title}}@if(!$loop->last),@endif
                                                @endforeach
                                            </div>

                                            <div class="tender-row__item tender-row__item--small">{{$tender->created_at->format('d.m.Y')}}</div>
                                            @if ($tender->products->first())
                                                <div
                                                    class="tender-row__item tender-row__item--big">{{$tender->products->sum('count')}}</div>
                                            @else
                                                <div class="tender-row__item tender-row__item--big">нет</div>
                                            @endif

                                            <div class="tender-row__item tender-row__item--small">{{$tender->description}}</div>

                                            <div class="tender-row__item tender-row__item">{{$timeLeft}}</div>

                                            <div class="tender-row__item">
                                                <div class="tender-row__status">
                                                    <div
                                                        class="tender-row__status-title">{{$tender->status->name}}</div>
                                                    <div class="tender-row__status-line">
                                                        <div
                                                            class="status-line status-line--{{$tender->status_id}}"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                @endforeach
                        </div>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="layout">
                <div class="title title--small">Последние товары</div>
                <div class="products-grid products-grid--4">

                    @foreach($lastProducts as $lastProduct)
                        <div class="product-preview product-preview--big"
                             href="/product-card/{{$lastProduct->id}}">
                            @if ($lastProduct->attachments->first())
                                <a href="/product-card/{{$lastProduct->id}}">
                                <img class="product-preview__img"
                                     src="../storage/products/{{$lastProduct->attachments->first()->path}}">
                                </a>
                            @else
                                <a href="/product-card/{{$lastProduct->id}}">
                                <img class="product-preview__img"
                                     src="../storage/tenderProducts/empty.jpg">
                                </a>
                            @endif
                            <div class="product-preview__desc">
                                <div
                                    class="product-preview__price">{{$lastProduct->prices->min('price')}}
                                    - {{$lastProduct->prices->max('price')}}₽ шт.
                                </div>
                                <div class="product-preview__minimal">
                                    <div
                                        class="product-preview__minimal-count">{{$lastProduct->prices->min('min')}}
                                        шт.
                                    </div>
                                    <div class="product-preview__minimal-desc">Минимальный заказ</div>
                                </div>
                                <a class="product-preview__text"
                                   href="/product-card/{{$lastProduct->id}}">{{$lastProduct->title}}
                                </a>
                            </div>
                        </div>
                    @endforeach
                        <div class="banner banner--product">
                                <div class="banner__title">Больше товаров Больше выгода!</div>
                                <div class="banner__text">Стоимость единицы товара снижается, в зависимости от его
                                    количества в тендере.
                                </div>
                            <div class="banner__button" data-modal-open="new-product-file">
                                Добавить товар
                            </div>
                        </div>
                </div>
            </div>
        </section>
    </div>

@stop
