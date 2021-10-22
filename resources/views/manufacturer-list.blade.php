@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <section class="section section--small">
            <div class="layout">
                <div class="breadcrumbs"><a class="breadcrumbs__item" href="/_index.html">Главная</a>
                    <div class="breadcrumbs__item breadcrumbs__item--active">Список поставщиков</div>
                </div>
                <div class="title-input-wrapper">
                    <div class="title-input-wrapper__item">
                        <div class="title-count">
                            <div class="title-count__item">Список поставщиков</div>
                            <div class="title-count__desc">201</div>
                        </div>
                    </div>
                    <div class="title-input-wrapper__input-wrapper placeholder">
                        <input class="input placeholder__input" placeholder="Поиск поставщика">
                        <div class="placeholder__item">Поиск поставщика</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section--small">
            <div class="layout">
                <div class="catalog catalog__no-nav">
                    {{--
                    <div class="catalog__filters border-block">
                        <div class="catalog__filters-group">
                            <div class="catalog__filters-title">Категория</div>
                            <div class="catalog__filters-group-item"><a class="catalog__filters-link-counter" href="#">
                                    <div class="catalog__filters-link-counter-text">Футболки и майки</div>
                                    <div class="catalog__filters-link-counter-count">(234)</div>
                                </a><a class="catalog__filters-link-counter" href="#">
                                    <div class="catalog__filters-link-counter-text">Джинсы</div>
                                    <div class="catalog__filters-link-counter-count">(56)</div>
                                </a><a class="catalog__filters-link-counter" href="#">
                                    <div class="catalog__filters-link-counter-text">Брюки</div>
                                    <div class="catalog__filters-link-counter-count">(12)</div>
                                </a><a class="catalog__filters-link-counter" href="#">
                                    <div class="catalog__filters-link-counter-text">Рубашки</div>
                                    <div class="catalog__filters-link-counter-count">(789)</div>
                                </a><a class="catalog__filters-link-counter" href="#">
                                    <div class="catalog__filters-link-counter-text">Свитшоты</div>
                                    <div class="catalog__filters-link-counter-count">(667)</div>
                                </a><a class="catalog__filters-link-counter" href="#">
                                    <div class="catalog__filters-link-counter-text">Верхняя одежда</div>
                                    <div class="catalog__filters-link-counter-count">(9)</div>
                                </a></div>
                        </div>
                        <div class="catalog__filters-group">
                            <div class="catalog__filters-title">Отзывы</div>
                            <div class="catalog__filters-group-item">
                                <label class="checkbox">
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__item">
                      <svg class="checkbox__icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                      </svg><span class="checkbox__text">Только с отзывами</span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    --}}
                    <div class="catalog__items">
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

                        <div class="catalog__items-list">
                            @foreach($providers as $provider)
                            <a class="manufacturer-preview border-block" href="/manufacturer/{{$provider->id}}">
                                @if($provider->photo != null)
                                    <img class="manufacturer-preview__img" src="../storage/users/{{$provider->id}}/{{$provider->photo}}">
                                @else
                                    <div class="manufacturer-preview__img" data-name="{{substr($provider->name, 0, 2)}}"></div>
                                @endif
                                <div class="manufacturer-preview__desc">
                                    <div class="manufacturer-preview__desc-title">{{$provider->name}}</div>
                                    <div class="manufacturer-preview__assessment">
                                        @if ($provider->user_reviews->count() < 1)
                                            <div class="manufacturer-preview__assessment-value">0</div>
                                        @else
                                            <div class="manufacturer-preview__assessment-value">{{$provider->user_reviews->avg('grade')}}</div>
                                        @endif
                                        <svg class="manufacturer-preview__assessment-star">
                                            <use xlink:href="../images/icons/icons-sprite.svg#star"></use>
                                        </svg>
                                    </div>
                                    <div class="manufacturer-preview__desc-counters">
                                        <div class="manufacturer-preview__desc-counter">
                                            <div class="manufacturer-preview__desc-counter-number">{{$provider->tenders_provider->where('status_id', '>=', 4)->count()}}</div>
                                            <div class="manufacturer-preview__desc-counter-text">побед в тендерах</div>
                                        </div>
                                        <div class="manufacturer-preview__desc-counter">
                                            <div class="manufacturer-preview__desc-counter-number">{{$provider->provider_products->count()}}</div>
                                            <div class="manufacturer-preview__desc-counter-text">товаров</div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
