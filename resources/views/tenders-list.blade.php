@extends('layouts.app')

@section('content')

    <div class="wrapper">
        <section class="section section--small">
            <div class="layout-m">
                <div class="breadcrumbs"><a class="breadcrumbs__item" href="/">Главная</a>
                    <div class="breadcrumbs__item breadcrumbs__item--active">Тендеры</div>
                </div>
                <div class="title-count">
                    <div class="title-count__item">Список тендеров</div>
                    <div class="title-count__desc">{{$tenders->count()}}</div>
                </div>
            </div>
        </section>
        <div class="filter">
            <section class="section section--small">
                <div class="layout-m">
                    <form id="filterForm" class="" action="tenders" method="get">
                        <input type="hidden" name="filtered" value="true">

                        <div class="header-checkbox">
                            <div class="header-checkbox__item">
                                <label class="checkbox">
                                    <input
                                        @if ($onlyActive == 'on')
                                        checked
                                        @endif
                                        name="onlyActive" class="checkbox__input" type="checkbox"><span
                                        class="checkbox__item">
                  <svg class="checkbox__icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                  </svg><span class="checkbox__text">Только активные</span></span>
                                </label>
                            </div>
                            <div class="header-checkbox__item">
                                <label class="checkbox">
                                    <input
                                        @if ($onlyArchive == 'on')
                                        checked
                                        @endif
                                        name="onlyArchive" class="checkbox__input" type="checkbox"><span
                                        class="checkbox__item">
                  <svg class="checkbox__icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                  </svg><span class="checkbox__text">Только архивные</span></span>
                                </label>
                            </div>
                            @if ($buyer_id != 0)
                                @if($role->slug == 'provider')

                                    <div class="header-checkbox__item">
                                        <label class="checkbox">
                                            <input
                                                @if ($onlyMyProvider == 'on')
                                                checked
                                                @endif
                                                name="onlyMyProvider" class="checkbox__input" type="checkbox"><span
                                                class="checkbox__item">
                  <svg class="checkbox__icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                  </svg><span class="checkbox__text">Только с моими предложениями</span></span>
                                        </label>
                                    </div>
                                @endif
                                @if($role->slug == 'buyer')
                                    <div class="header-checkbox__item">
                                        <label class="checkbox">
                                            <input
                                                @if ($onlyMy == 'on')
                                                checked
                                                @endif
                                                name="onlyMy" class="checkbox__input" type="checkbox"><span
                                                class="checkbox__item">
                  <svg class="checkbox__icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                  </svg><span class="checkbox__text">Только мои</span></span>
                                        </label>
                                    </div>
                                @endif
                            @endif
                            <button id="filterFormBtn" type="submit" class="button">Применить</button>
                        </div>
                    </form>
                </div>
            </section>
            <section class="section section--small">
                <div class="layout layout__overflow-x">
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

                    @foreach ($tenders as $key => $tender)
                        @php
                            $dataFilter = "";
                            if ($tender->status_id == 5)
                            $dataFilter .= "archive";
                            else
                            $dataFilter .= "active";

                            if ($tender->buyer_id == $buyer_id)
                            $dataFilter .= ", my";

                            $timeLeft = "Завершен";
                            if($tender->date_end != null)
                                 $timeLeft = Carbon\Carbon::parse($tender->date_end)->diffInHours(Carbon\Carbon::now('UTC')) . "ч";
                        @endphp
                        <div class="filter__item" data-filter="{{$dataFilter}}">

                            @if ($tender->buyer_id == $buyer_id)
                                <div class="tender-row tender-row--without-assessment tender-row--selected">
                                    @else
                                        <div class="tender-row tender-row--without-assessment ">
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
                        <!--START PAG -->
                    {!! $tenders->appends(Request::except('page'))->links('pagination.default') !!}
                    <!--END PAG-->
                </div>
            </section>
        </div>
    </div>


@stop

@section('f_script')

@stop
