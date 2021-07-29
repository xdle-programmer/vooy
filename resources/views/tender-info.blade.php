@extends('layouts.app')

@section('h_script')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@stop

@section('content')

    @if ($tender != null)
        <div class="wrapper">
            <section class="section section--small">
                <div class="layout">
                    <div class="breadcrumbs"><a class="breadcrumbs__item" href="/">Главная</a><a
                            class="breadcrumbs__item" href="/tenders">Список тендеров</a>
                        <div class="breadcrumbs__item breadcrumbs__item--active">Тендер {{$tender->id}}</div>
                    </div>
                </div>
            </section>

            <section class="section section--small">
                <div class="layout">
                    <div class="tender-header">
                        <div class="tender-header__main">

                            <div class="tender-header__main-title">
                                <div class="tender-header__main-title-name">Тендер на товары</div>
                                <div class="tender-header__main-title-number">№{{$tender->id}}</div>
                                <div class="tender-header__main-title-status">
                                    <div
                                        class="tender-header__main-title-status-title tender-header__main-title-status-title--gold">{{$tender->status->name}}</div>
                                    <div class="tender-header__main-title-status-line">
                                        <div class="status-line status-line--{{$tender->status_id}}"></div>
                                    </div>
                                </div>
                            </div>

                            @if (Auth::check())
                                <div class="tender-header__main-buttons">
                                    @if($role->slug == 'buyer')

                                        <div data-tender="{{$tender->id}}" onclick="copyTender(this)"
                                             class="tender-header__main-button button">Скопировать
                                            <svg class="button__icon">
                                                <use xlink:href="../images/icons/icons-sprite.svg#copy"></use>
                                            </svg>
                                        </div>

                                    @endif
                                    @if($role->slug == 'provider')

                                        @if(!$tender->reviews->where('provider_id', $user->id ?? 0 )->first())

                                            <div onclick="openReview()"
                                                 class="tender-header__main-button button button--small">Ответить на
                                                тендер
                                                <svg class="button__icon button__icon--small">
                                                    <use
                                                        xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                                </svg>
                                            </div>
                                        @else
                                            @php
                                                $hasReview = App\Models\TenderProductReview::where('provider_id', $user->id)->where('tender_id', $tender->id)->first();
                                            @endphp
                                            @if($hasReview != null)
                                                <div class="tender-header__desc-item-name">Предложение сделано:</div>
                                                <div
                                                    class="tender-header__desc-item-value"> {{$hasReview->created_at->format('d.m.Y')}}</div>
                                            @endif
                                        @endif
                                    @endif
                                </div>
                            @endif
                        </div>

                        <div class="tender-header__desc">
                            <div class="tender-header__desc-item">
                                <div class="tender-header__desc-item-name">Cоздан:</div>
                                <div
                                    class="tender-header__desc-item-value">{{$tender->created_at->format('d.m.Y')}}</div>
                                <div class="tender-header__desc-item-name">Осталось времени:</div>
                                <div class="tender-header__desc-item-value">48ч</div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section class="section section--small">
                <div class="layout">
                    @php
                        $hasTabs = false;
                        if ($tender->buyer_id == $user->id) {
                            $hasTabs = true;
                        }

                    @endphp

                    @if ($hasTabs == false)
                        <div class="tabs--not">
                            @else
                                <div class="tabs--not">
                                    @endif


                                    @if($role != null)
                                        @if( 'provider' == $role->slug)
                                            <div class="buyer">
                                                <div class="buyer__logo" data-name="П"></div>
                                                <div class="buyer__title">{{$tender->buyer->name}}</div>
                                                <div class="buyer__options">
                                                    <div class="buyer__option">
                                                        <div class="buyer__option-name">Город:</div>
                                                        <div
                                                            class="buyer__option-value">{{$tender->buyer->city}}</div>
                                                    </div>
                                                    <div class="buyer__option">
                                                        <div class="buyer__option-name">Тендеров:</div>
                                                        <div class="buyer__option-value">1</div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                        @if( 'buyer' == $role->slug & $tender->status_id == 3 & $hasTabs == true)
                                            <div class="tabs__header">
                                                <div class="tabs__toggle-nav"
                                                     aria-label="Carousel Navigation" tabindex="0"
                                                     style="display: none;">
                                                    <div
                                                        class="tabs__toggle-nav-button tabs__toggle-nav-button--prev"
                                                        aria-controls="tns2"
                                                        tabindex="-1" data-controls="prev">
                                                        <svg class="tabs__toggle-nav-button-icon">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#arrow"></use>
                                                        </svg>
                                                    </div>
                                                    <div
                                                        class="tabs__toggle-nav-button tabs__toggle-nav-button--next"
                                                        aria-controls="tns2"
                                                        tabindex="-1" data-controls="next">
                                                        <svg class="tabs__toggle-nav-button-icon">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#arrow"></use>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="tns-outer" id="tns2-ow">
                                                    <div class="tns-liveregion tns-visually-hidden"
                                                         aria-live="polite"
                                                         aria-atomic="true">
                                                        slide <span class="current">1</span> of 3
                                                    </div>
                                                    <div id="tns2-mw" class="tns-ovh">
                                                        <div class="tns-inner" id="tns2-iw">
                                                            <div class="tabs__toggle-buttons" id="tns2"
                                                                 style="">
                                                                <div
                                                                    class="tabs__toggle-button tns-item tns-slide-active tabs__toggle-button--active"
                                                                    id="tns2-item0">Тендер
                                                                </div>
                                                                <div class="tabs__toggle-button tns-item"
                                                                     id="tns2-item1"
                                                                     aria-hidden="true"
                                                                     tabindex="-1">Ответы (сгруппировать по
                                                                    поставщикам)
                                                                </div>
                                                                <div class="tabs__toggle-button tns-item"
                                                                     id="tns2-item2"
                                                                     aria-hidden="true"
                                                                     tabindex="-1">Ответы (сгруппировать по
                                                                    товарам)
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endif

                                    <div class="tabs__toggle-items">
                                        <div
                                            class="tabs__toggle-item tabs__toggle-item--active tabs__toggle-item--active-effect">
                                            <div class="tender-row tender-row--product tender-row--header">
                                                <div class="tender-row__item">Фото</div>
                                                <div class="tender-row__item">Наименование</div>
                                                <div class="tender-row__item">Количество</div>
                                                <div class="tender-row__item">Необходим образец</div>
                                                <div class="tender-row__item">Брэндинг</div>
                                                <div class="tender-row__item">Упаковка</div>
                                                <div class="tender-row__item">Сертификаты</div>
                                                <div class="tender-row__item tender-row__item--center">
                                                    Комментарий
                                                </div>
                                            </div>
                                            @if ($tender->products)
                                                @foreach ($tender->products as $key => $product)
                                                    <div id="tender-table-product-{{$product->id}}"
                                                         class="tender-row tender-row--product">

                                                        @if ($product->attachments->first())
                                                            @php
                                                                $path = "";
                                                                $photoCount = 0;
                                                            @endphp
                                                            @foreach ($product->attachments as $key => $attachment)
                                                                @php
                                                                    $path .= '../storage/tenderProducts/'.$attachment->path;
                                                                    $photoCount++;
                                                                    if(!$loop->last)
                                                                      $path .= ','
                                                                @endphp
                                                            @endforeach
                                                            <div class="tender-row__item"
                                                                 data-product-img-slider="{{$path}}">
                                                                <div
                                                                    class="tender-row__preview tender-row__preview--zoom">
                                                                    <div
                                                                        class="tender-row__preview-zoom-text">{{$photoCount}}
                                                                        фото
                                                                    </div>
                                                                    <img class="tender-row__preview-img"
                                                                         src="../storage/tenderProducts/{{$product->attachments->first()->path}}">
                                                                </div>
                                                            </div>
                                                        @else
                                                            <div class="tender-row__item"
                                                                 data-product-img-slider="../storage/tenderProducts/empty.jpg">
                                                                <div
                                                                    class="tender-row__preview tender-row__preview--zoom">
                                                                    <div
                                                                        class="tender-row__preview-zoom-text">
                                                                        0 фото
                                                                    </div>
                                                                    <img class="tender-row__preview-img"
                                                                         src="../storage/tenderProducts/empty.jpg">
                                                                </div>
                                                            </div>
                                                        @endif

                                                        <div
                                                            class="tender-row__item tender-row__item--middle">{{$product->title}}</div>
                                                        <div
                                                            class="tender-row__item tender-row__item--big">{{$product->count}}</div>
                                                        <div class="tender-row__item">
                                                            @if ($product->sample)
                                                                <svg
                                                                    class="tender-row__item-icon tender-row__item-icon--check">
                                                                    <use
                                                                        xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                </svg>
                                                            @else
                                                                <svg
                                                                    class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                    <use
                                                                        xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                </svg>
                                                            @endif
                                                        </div>
                                                        <div class="tender-row__item">
                                                            @if ($product->branding)
                                                                <svg
                                                                    class="tender-row__item-icon tender-row__item-icon--check">
                                                                    <use
                                                                        xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                </svg>
                                                            @else
                                                                <svg
                                                                    class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                    <use
                                                                        xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                </svg>
                                                            @endif
                                                        </div>
                                                        <div class="tender-row__item">
                                                            @if ($product->packing)
                                                                <svg
                                                                    class="tender-row__item-icon tender-row__item-icon--check">
                                                                    <use
                                                                        xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                </svg>
                                                            @else
                                                                <svg
                                                                    class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                    <use
                                                                        xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                </svg>
                                                            @endif
                                                        </div>
                                                        <div
                                                            class="tender-row__item tender-row__item--left">
                                                            @foreach($product->sertificats as $sertificat)
                                                                @if($loop->last)
                                                                    {{$sertificat->name}}
                                                                @else
                                                                    {{$sertificat->name}},
                                                                @endif
                                                            @endforeach
                                                        </div>
                                                        <div
                                                            class="tender-row__item tender-row__item--left">{{$product->description}}</div>
                                                    </div>
                                                @endforeach
                                            @else
                                                <h1>Пусто</h1>
                                            @endif
                                        </div>

                                        @if($tender->status_id == 3)
                                            <div id="reviews" class="tabs__toggle-item">
                                                @if($tender->reviews != null)
                                                    @foreach($tender->reviews->where('hidden', 0) as $key => $review)
                                                        <div id="review-{{$review->id}}"
                                                             class="border-block offer tenders-chat">
                                                            {{--CONFIRM REVIEW BUTTONS SECTION--}}
                                                            <div class="offer__manufacturer-buttons">
                                                                @php
                                                                    $state = 0;
                                                                @endphp
                                                                @if($review->provider->subroles->first() != null)
                                                                    @php
                                                                        if($review->provider->subroles->where('id', 4)->first()){
                                                                           $state = 1;
                                                                        }
                                                                        elseif ($review->provider->subroles->where('id', 3)->first()){
                                                                           $state = 2;
                                                                        }
                                                                        elseif ($review->provider->subroles->where('id', 2)->first()){
                                                                           $state = 2;
                                                                        }
                                                                        elseif ($review->provider->subroles->where('id', 1)->first()){
                                                                           $state = 3;
                                                                        }
                                                                    @endphp

                                                                @endif

                                                                @if($state == 1)
                                                                    <div data-type="2"
                                                                         data-review="{{$review->id}}"
                                                                         data-delivery="1" data-country="1"
                                                                         class="offer__manufacturer-button offer__manufacturer-button--green offer__manufacturer-button--accept">
                                                                        <div
                                                                            class="offer__manufacturer-button-text">
                                                                            Меня устраивают
                                                                            условия, выбрать поставщика
                                                                            победителем
                                                                        </div>
                                                                        <svg
                                                                            class="offer__manufacturer-button-icon">
                                                                            <use
                                                                                xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                        </svg>
                                                                    </div>
                                                                @elseif($state == 2)
                                                                    <div data-type="2"
                                                                         data-review="{{$review->id}}"
                                                                         data-delivery="0" data-country="2"
                                                                         class="offer__manufacturer-button offer__manufacturer-button--green offer__manufacturer-button--accept">
                                                                        <div
                                                                            class="offer__manufacturer-button-text">
                                                                            Меня устраивают
                                                                            условия, я заберу товар из Китая
                                                                            сам, выбрать поставщика
                                                                            победителем тендера
                                                                        </div>
                                                                        <svg
                                                                            class="offer__manufacturer-button-icon">
                                                                            <use
                                                                                xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div data-type="2"
                                                                         data-review="{{$review->id}}"
                                                                         data-delivery="1" data-country="1"
                                                                         class="offer__manufacturer-button offer__manufacturer-button--green offer__manufacturer-button--accept">
                                                                        <div
                                                                            class="offer__manufacturer-button-text">
                                                                            Меня устраивают
                                                                            условия, но я хочу забрать товар
                                                                            из России
                                                                        </div>
                                                                        <svg
                                                                            class="offer__manufacturer-button-icon">
                                                                            <use
                                                                                xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                        </svg>
                                                                    </div>
                                                                @elseif($state == 3)
                                                                    <div data-type="1"
                                                                         data-review="{{$review->id}}"
                                                                         data-delivery="0" data-country="2"
                                                                         class="offer__manufacturer-button offer__manufacturer-button--green offer__manufacturer-button--accept">
                                                                        <div
                                                                            class="offer__manufacturer-button-text">
                                                                            Меня устраивают
                                                                            условия, я заберу товар из Китая
                                                                            сам, выбрать поставщика
                                                                            победителем тендера
                                                                        </div>
                                                                        <svg
                                                                            class="offer__manufacturer-button-icon">
                                                                            <use
                                                                                xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                        </svg>
                                                                    </div>
                                                                    <div data-type="1"
                                                                         data-review="{{$review->id}}"
                                                                         data-delivery="1" data-country="1"
                                                                         class="offer__manufacturer-button offer__manufacturer-button--green offer__manufacturer-button--accept">
                                                                        <div
                                                                            class="offer__manufacturer-button-text">
                                                                            Меня устраивают
                                                                            условия, но я хочу забрать товар
                                                                            из России, хочу
                                                                            запросить
                                                                            расчет доставки в Россию из
                                                                            Китая у партнера Vooy
                                                                        </div>
                                                                        <svg
                                                                            class="offer__manufacturer-button-icon">
                                                                            <use
                                                                                xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                        </svg>
                                                                    </div>
                                                                @endif
                                                                {{--CONFIRM REVIEW BUTTONS SECTION--
                                                                <div
                                                                    class="offer__manufacturer-button offer__manufacturer-button--green">
                                                                    <div class="offer__manufacturer-button-text">Выбрать победителем
                                                                    </div>
                                                                    <svg class="offer__manufacturer-button-icon">
                                                                        <use
                                                                            xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                    </svg>
                                                                </div>--}}

                                                                <div
                                                                    class="offer__manufacturer-button offer__manufacturer-button--gray">
                                                                    <div onclick="hideReview(this)"
                                                                         data-review="{{$review->id}}"
                                                                         class="offer__manufacturer-button-text">
                                                                        Скрыть из списка
                                                                    </div>
                                                                    <svg
                                                                        class="offer__manufacturer-button-icon offer__manufacturer-button-icon--small">
                                                                        <use
                                                                            xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                    </svg>
                                                                </div>
                                                                <div
                                                                    class="offer__manufacturer-button offer__manufacturer-button--message tenders-chat__button"
                                                                    data-chat="1">
                                                                    <div
                                                                        class="offer__manufacturer-button-text tenders-chat__button-text tenders-chat__button-text--default">
                                                                        Написать поставщику
                                                                    </div>
                                                                    <div
                                                                        class="offer__manufacturer-button-text tenders-chat__button-text tenders-chat__button-text--active">
                                                                        Скрыть переписку
                                                                    </div>
                                                                    <div
                                                                        class="offer__manufacturer-button-message">
                                                                        <svg
                                                                            class="offer__manufacturer-button-message-icon">
                                                                            <use
                                                                                xlink:href="../images/icons/icons-sprite.svg#message"></use>
                                                                        </svg>
                                                                        <div
                                                                            class="offer__manufacturer-button-message-count">
                                                                            <div
                                                                                class="offer__manufacturer-button-message-count-inner">
                                                                                <div
                                                                                    class="offer__manufacturer-button-message-count-inner-number">
                                                                                    3
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="offer__header">
                                                                <div class="manufacturer">
                                                                    <div class="manufacturer__logo"
                                                                         data-name="{{substr($review->provider->name,0,2)}}"></div>
                                                                    <div
                                                                        class="manufacturer__title">{{$review->provider->name}}
                                                                        @if($review->provider->subroles->first() != null)
                                                                            (
                                                                            @foreach($review->provider->subroles as $subrole)
                                                                                @if($loop->last)
                                                                                    {{@$subrole->name}}
                                                                                @else
                                                                                    {{@$subrole->name}},
                                                                                @endif
                                                                            @endforeach
                                                                             )
                                                                        @endif
                                                                    </div>
                                                                    <div class="manufacturer__options">
                                                                        <div class="manufacturer__option">
                                                                            <div
                                                                                class="manufacturer__option-name">
                                                                                Город:
                                                                            </div>
                                                                            <div
                                                                                class="manufacturer__option-value">{{$review->provider->city}}</div>
                                                                        </div>
                                                                        <div class="manufacturer__option">
                                                                            <div
                                                                                class="manufacturer__option-name">
                                                                                Категория:
                                                                            </div>
                                                                            <div
                                                                                class="manufacturer__option-value">
                                                                                Мужская одежда
                                                                            </div>
                                                                        </div>
                                                                        <div class="manufacturer__option">
                                                                            <div
                                                                                class="manufacturer__option-name">
                                                                                Побед в тендерах:
                                                                            </div>
                                                                            <div
                                                                                class="manufacturer__option-value">
                                                                                120
                                                                            </div>
                                                                        </div>
                                                                        <div class="manufacturer__option">
                                                                            <div
                                                                                class="manufacturer__option-name">
                                                                                Товаров в
                                                                                наличии:
                                                                            </div>
                                                                            <div
                                                                                class="manufacturer__option-value">
                                                                                340
                                                                            </div>
                                                                        </div>

                                                                        <div class="manufacturer__option">
                                                                            <div
                                                                                class="manufacturer__option-name">
                                                                                Поставка из:
                                                                            </div>
                                                                            @if($review->from_country == 1)
                                                                                <div
                                                                                    class="manufacturer__option-value">
                                                                                    России
                                                                                </div>
                                                                            @elseif($review->from_country == 2)
                                                                                <div
                                                                                    class="manufacturer__option-value">
                                                                                    Китая
                                                                                </div>
                                                                            @endif
                                                                        </div>

                                                                    </div>
                                                                    <div class="manufacturer__reviews">
                                                                        <div class="reviews">
                                                                            <div class="reviews__desc">
                                                                                <div class="reviews__item">
                                                                                    <div
                                                                                        class="reviews__item-value">
                                                                                        4.93
                                                                                    </div>
                                                                                    <svg
                                                                                        class="reviews__item-star">
                                                                                        <use
                                                                                            xlink:href="../images/icons/icons-sprite.svg#star"></use>
                                                                                    </svg>
                                                                                </div>
                                                                                <div class="reviews__count">
                                                                                    34 отзыва
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="reviews__button button">
                                                                                Посмотреть отзывы
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="tender-row tender-row--offer tender-row--header">
                                                                <div class="tender-row__item">Фото</div>
                                                                <div class="tender-row__item">Наименование
                                                                </div>
                                                                <div class="tender-row__item">Количество
                                                                </div>
                                                                <div class="tender-row__item">Стоимость
                                                                </div>
                                                                <div class="tender-row__item">Срок
                                                                    реализации
                                                                </div>
                                                                <div class="tender-row__item">Предоставим
                                                                    образец
                                                                </div>
                                                                <div class="tender-row__item">Брэндинг</div>
                                                                <div class="tender-row__item">Упаковка</div>
                                                                <div
                                                                    class="tender-row__item tender-row__item--center">
                                                                    Комментарий
                                                                    поставщика
                                                                </div>
                                                            </div>
                                                            @if($review->items != null)
                                                                @foreach($review->items as $itemKey => $item)
                                                                    <div
                                                                        class="tender-row tender-row--offer">
                                                                        @if ($item->attachments->first())
                                                                            @php
                                                                                $path = "";
                                                                                $photoCount = 0;
                                                                            @endphp
                                                                            @foreach ($item->attachments as $key => $attachment)
                                                                                @php
                                                                                    $path .= '../storage/reviewProducts/'.$attachment->path;
                                                                                    $photoCount++;
                                                                                    if(!$loop->last)
                                                                                      $path .= ','
                                                                                @endphp
                                                                            @endforeach
                                                                            <div class="tender-row__item"
                                                                                 data-product-img-slider="{{$path}}">
                                                                                <div
                                                                                    class="tender-row__preview tender-row__preview--zoom">
                                                                                    <div
                                                                                        class="tender-row__preview-zoom-text">{{$photoCount}}
                                                                                        фото
                                                                                    </div>
                                                                                    <img
                                                                                        class="tender-row__preview-img"
                                                                                        src="../storage/reviewProducts/{{$item->attachments->first()->path}}">
                                                                                </div>
                                                                            </div>
                                                                        @else
                                                                            <div class="tender-row__item"
                                                                                 data-product-img-slider="../storage/tenderProducts/empty.jpg">
                                                                                <div
                                                                                    class="tender-row__preview tender-row__preview--zoom">
                                                                                    <div
                                                                                        class="tender-row__preview-zoom-text">
                                                                                        0
                                                                                        фото
                                                                                    </div>
                                                                                    <img
                                                                                        class="tender-row__preview-img"
                                                                                        src="../storage/tenderProducts/empty.jpg">
                                                                                </div>
                                                                            </div>
                                                                        @endif

                                                                        <div
                                                                            class="tender-row__item tender-row__item--middle">{{$item->name}}
                                                                        </div>
                                                                        <div
                                                                            class="tender-row__item tender-row__item--big">{{$item->count}}</div>
                                                                        <div
                                                                            @php
                                                                                $price = $item->price . " RUB";
                                                                                if ($item->currency_id != null) {
                                                                                     if ($item->currency_id != 1){
                                                                                         $currency = App\Models\Currency::find($item->currency_id);
                                                                                         $formatedPrice = $currency->price_back * $item->price;
                                                                                         $price = round($formatedPrice, 2) .' RUB'. ' ('. $item->price .' '.$currency->code.')';
                                                                                     }

                                                                                    }
                                                                            @endphp
                                                                            class="tender-row__item tender-row__item--big">
                                                                            {{$price}}
                                                                        </div>
                                                                        <div
                                                                            class="tender-row__item tender-row__item--big">{{$item->release_time}}</div>
                                                                        <div class="tender-row__item">
                                                                            @if ($item->sample)
                                                                                <svg
                                                                                    class="tender-row__item-icon tender-row__item-icon--check">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                                </svg>
                                                                            @else
                                                                                <svg
                                                                                    class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                                </svg>
                                                                            @endif
                                                                        </div>

                                                                        <div class="tender-row__item">
                                                                            @if ($item->branding)
                                                                                <svg
                                                                                    class="tender-row__item-icon tender-row__item-icon--check">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                                </svg>
                                                                            @else
                                                                                <svg
                                                                                    class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                                </svg>
                                                                            @endif
                                                                        </div>

                                                                        <div class="tender-row__item">
                                                                            @if ($item->packing)
                                                                                <svg
                                                                                    class="tender-row__item-icon tender-row__item-icon--check">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                                </svg>
                                                                            @else
                                                                                <svg
                                                                                    class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                                </svg>
                                                                            @endif
                                                                        </div>
                                                                        <div
                                                                            class="tender-row__item tender-row__item--left">{{$item->description}}
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                            <div class="tenders-chat__wrapper">
                                                                <div class="tenders-chat__content"
                                                                     data-chat-name="1">
                                                                    <div class="chat">
                                                                        <div class="chat__title">Переговоры
                                                                            с "Первый поставщик"
                                                                        </div>
                                                                        <div class="chat__messages">
                                                                            <div class="chat__date">
                                                                                08.05.2021
                                                                            </div>
                                                                            <div class="chat__message">
                                                                                <div
                                                                                    class="chat__message-content">
                                                                                    <div
                                                                                        class="chat__message-content-text">
                                                                                        Уверены,
                                                                                        что
                                                                                        уложитесь в
                                                                                        сроки? Куртка будет
                                                                                        выглядеть точно так?
                                                                                    </div>
                                                                                    <div
                                                                                        class="chat__message-content-images">
                                                                                        <img
                                                                                            class="chat__message-content-image"
                                                                                            src="images/examples/products-preview/products-preview-3.jpg">
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="chat__message-time">
                                                                                    13:15
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="chat__message chat__message--invert">
                                                                                <div
                                                                                    class="chat__message-content">
                                                                                    <div
                                                                                        class="chat__message-content-text">
                                                                                        Нет,
                                                                                        такой
                                                                                        ткани
                                                                                        нет
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="chat__message-time">
                                                                                    13:15
                                                                                </div>
                                                                            </div>
                                                                            <div class="chat__message">
                                                                                <div
                                                                                    class="chat__message-content">
                                                                                    <div
                                                                                        class="chat__message-content-text">
                                                                                        Понял
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="chat__message-time">
                                                                                    13:15
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="chat__form">
                                                                            <div class="chat__form-wrapper">
                                                        <textarea class="chat__form-wrapper-input"
                                                                  placeholder="Введите сообщение"></textarea>
                                                                            </div>
                                                                            <div
                                                                                class="chat__form-file-preview chat__form-file-preview--empty">
                                                                                <div
                                                                                    class="chat__message-content-images"></div>
                                                                                <div
                                                                                    class="chat__message-content-files"></div>
                                                                            </div>
                                                                            <div class="chat__form-buttons">
                                                                                <label
                                                                                    class="chat__form-file-input-label">
                                                                                    <div
                                                                                        class="chat__form-file-input-text">
                                                                                        Прикрепить
                                                                                        файл
                                                                                    </div>
                                                                                    <svg
                                                                                        class="chat__form-file-input-icon">
                                                                                        <use
                                                                                            xlink:href="../images/icons/icons-sprite.svg#upload"></use>
                                                                                    </svg>
                                                                                    <input
                                                                                        class="chat__form-file-input"
                                                                                        type="file"
                                                                                        multiple="">
                                                                                </label>
                                                                                <div
                                                                                    class="chat__form-send button button--small">
                                                                                    Отправить
                                                                                    сообщение
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    @endforeach
                                                    <div class="toggle-show-block">
                                                        <div class="section section--small section--center">
                                                            <div
                                                                class="toggle-show-block__button button button--invert button--auto-width">
                                                                <div
                                                                    class="toggle-show-block__button-text toggle-show-block__button-text--default">
                                                                    Показать скрытых поставщиков
                                                                </div>
                                                                <div
                                                                    class="toggle-show-block__button-text toggle-show-block__button-text--active">
                                                                    Скрыть поставщиков
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="hidden-reviews"
                                                             class="toggle-show-block__item">
                                                            <div class="title-separator">Скрытые
                                                                поставщики
                                                            </div>

                                                            @foreach($tender->reviews->where('hidden', 1) as $key => $review)
                                                                <div id="review-{{$review->id}}"
                                                                     class="border-block offer tenders-chat">

                                                                    {{--CONFIRM REVIEW BUTTONS SECTION--}}
                                                                    <div
                                                                        class="offer__manufacturer-buttons">
                                                                        @php
                                                                            $state = 0;
                                                                        @endphp
                                                                        @if($review->provider->subroles->first() != null)
                                                                            @php
                                                                                if($review->provider->subroles->where('id', 4)->first()){
                                                                                   $state = 1;
                                                                                }
                                                                                elseif ($review->provider->subroles->where('id', 3)->first()){
                                                                                   $state = 2;
                                                                                }
                                                                                elseif ($review->provider->subroles->where('id', 2)->first()){
                                                                                   $state = 2;
                                                                                }
                                                                                elseif ($review->provider->subroles->where('id', 1)->first()){
                                                                                   $state = 3;
                                                                                }
                                                                            @endphp

                                                                        @endif

                                                                        @if($state == 1)
                                                                            <div
                                                                                class="offer__manufacturer-button offer__manufacturer-button--green">
                                                                                <div
                                                                                    class="offer__manufacturer-button-text">
                                                                                    Меня
                                                                                    устраивают
                                                                                    условия, выбрать
                                                                                    поставщика победителем
                                                                                </div>
                                                                                <svg
                                                                                    class="offer__manufacturer-button-icon">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                                </svg>
                                                                            </div>
                                                                        @elseif($state == 2)
                                                                            <div
                                                                                class="offer__manufacturer-button offer__manufacturer-button--green">
                                                                                <div
                                                                                    class="offer__manufacturer-button-text">
                                                                                    Меня
                                                                                    устраивают
                                                                                    условия, я заберу товар
                                                                                    из Китая сам, выбрать
                                                                                    поставщика
                                                                                    победителем тендера
                                                                                </div>
                                                                                <svg
                                                                                    class="offer__manufacturer-button-icon">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                                </svg>
                                                                            </div>
                                                                            <div
                                                                                class="offer__manufacturer-button offer__manufacturer-button--green">
                                                                                <div
                                                                                    class="offer__manufacturer-button-text">
                                                                                    Меня
                                                                                    устраивают
                                                                                    условия, но я хочу
                                                                                    забрать товар из России
                                                                                </div>
                                                                                <svg
                                                                                    class="offer__manufacturer-button-icon">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                                </svg>
                                                                            </div>
                                                                        @elseif($state == 3)
                                                                            <div
                                                                                class="offer__manufacturer-button offer__manufacturer-button--green">
                                                                                <div
                                                                                    class="offer__manufacturer-button-text">
                                                                                    Меня
                                                                                    устраивают условия, я
                                                                                    заберу товар из Китая
                                                                                    сам,
                                                                                    выбрать поставщика
                                                                                    победителем тендера
                                                                                </div>
                                                                                <svg
                                                                                    class="offer__manufacturer-button-icon">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                                </svg>
                                                                            </div>
                                                                            <div
                                                                                class="offer__manufacturer-button offer__manufacturer-button--green">
                                                                                <div
                                                                                    class="offer__manufacturer-button-text">
                                                                                    Меня
                                                                                    устраивают условия, но я
                                                                                    хочу забрать товар из
                                                                                    России, хочу запросить
                                                                                    расчет доставки в Россию
                                                                                    из Китая у партнера Vooy
                                                                                </div>
                                                                                <svg
                                                                                    class="offer__manufacturer-button-icon">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                                </svg>
                                                                            </div>
                                                                        @endif
                                                                        {{--CONFIRM REVIEW BUTTONS SECTION--

                                                                                <div
                                                                                    class="offer__manufacturer-button offer__manufacturer-button--green">
                                                                                    <div class="offer__manufacturer-button-text">Выбрать2
                                                                                        победителем
                                                                                    </div>
                                                                                    <svg class="offer__manufacturer-button-icon">
                                                                                        <use
                                                                                            xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
                                                                                    </svg>
                                                                                </div>--}}

                                                                        <div
                                                                            class="offer__manufacturer-button offer__manufacturer-button--gray">
                                                                            <div
                                                                                onclick="unhideReview(this)"
                                                                                data-review="{{$review->id}}"
                                                                                class="offer__manufacturer-button-text">
                                                                                Вернуть в
                                                                                список
                                                                            </div>
                                                                            <svg
                                                                                class="offer__manufacturer-button-icon">
                                                                                <use
                                                                                    xlink:href="../images/icons/icons-sprite.svg#return"></use>
                                                                            </svg>
                                                                        </div>
                                                                        <div
                                                                            class="offer__manufacturer-button offer__manufacturer-button--message tenders-chat__button"
                                                                            data-chat="1">
                                                                            <div
                                                                                class="offer__manufacturer-button-text tenders-chat__button-text tenders-chat__button-text--default">
                                                                                Написать поставщику
                                                                            </div>
                                                                            <div
                                                                                class="offer__manufacturer-button-text tenders-chat__button-text tenders-chat__button-text--active">
                                                                                Скрыть переписку
                                                                            </div>
                                                                            <div
                                                                                class="offer__manufacturer-button-message">
                                                                                <svg
                                                                                    class="offer__manufacturer-button-message-icon">
                                                                                    <use
                                                                                        xlink:href="../images/icons/icons-sprite.svg#message"></use>
                                                                                </svg>
                                                                                <div
                                                                                    class="offer__manufacturer-button-message-count">
                                                                                    <div
                                                                                        class="offer__manufacturer-button-message-count-inner">
                                                                                        <div
                                                                                            class="offer__manufacturer-button-message-count-inner-number">
                                                                                            3
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="offer__header">
                                                                        <div class="manufacturer">
                                                                            <div class="manufacturer__logo"
                                                                                 data-name="{{substr($review->provider->name,0,2)}}"></div>
                                                                            {{--<img class="manufacturer__logo" src="images/examples/manufacturer/logo/manufacturer-logo-1.jpg">--}}
                                                                            <div
                                                                                class="manufacturer__title">{{$review->provider->name}}

                                                                                @if($review->provider->subroles->first() != null)
                                                                                    (
                                                                                    @foreach($review->provider->subroles as $subrole)
                                                                                        @if($loop->last)
                                                                                            {{@$subrole->name}}
                                                                                        @else
                                                                                            {{@$subrole->name}}
                                                                                            ,
                                                                                        @endif
                                                                                    @endforeach
                                                                                     )
                                                                                @endif

                                                                            </div>
                                                                            <div
                                                                                class="manufacturer__options">
                                                                                <div
                                                                                    class="manufacturer__option">
                                                                                    <div
                                                                                        class="manufacturer__option-name">
                                                                                        Город:
                                                                                    </div>
                                                                                    <div
                                                                                        class="manufacturer__option-value">{{$review->provider->city}}</div>
                                                                                </div>
                                                                                <div
                                                                                    class="manufacturer__option">
                                                                                    <div
                                                                                        class="manufacturer__option-name">
                                                                                        Категория:
                                                                                    </div>
                                                                                    <div
                                                                                        class="manufacturer__option-value">
                                                                                        Мужская
                                                                                        одежда
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="manufacturer__option">
                                                                                    <div
                                                                                        class="manufacturer__option-name">
                                                                                        Побед в
                                                                                        тендерах:
                                                                                    </div>
                                                                                    <div
                                                                                        class="manufacturer__option-value">
                                                                                        120
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="manufacturer__option">
                                                                                    <div
                                                                                        class="manufacturer__option-name">
                                                                                        Товаров в
                                                                                        наличии:
                                                                                    </div>
                                                                                    <div
                                                                                        class="manufacturer__option-value">
                                                                                        340
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="manufacturer__option">
                                                                                    <div
                                                                                        class="manufacturer__option-name">
                                                                                        Поставка
                                                                                        из:
                                                                                    </div>
                                                                                    @if($review->from_country == 1)
                                                                                        <div
                                                                                            class="manufacturer__option-value">
                                                                                            России
                                                                                        </div>
                                                                                    @elseif($review->from_country == 2)
                                                                                        <div
                                                                                            class="manufacturer__option-value">
                                                                                            Китая
                                                                                        </div>
                                                                                    @endif
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="manufacturer__reviews">
                                                                                <div class="reviews">
                                                                                    <div
                                                                                        class="reviews__desc">
                                                                                        <div
                                                                                            class="reviews__item">
                                                                                            <div
                                                                                                class="reviews__item-value">
                                                                                                4.93
                                                                                            </div>
                                                                                            <svg
                                                                                                class="reviews__item-star">
                                                                                                <use
                                                                                                    xlink:href="../images/icons/icons-sprite.svg#star"></use>
                                                                                            </svg>
                                                                                        </div>
                                                                                        <div
                                                                                            class="reviews__count">
                                                                                            34 отзыва
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="reviews__button button">
                                                                                        Посмотреть
                                                                                        отзывы
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="tender-row tender-row--offer tender-row--header">
                                                                        <div class="tender-row__item">Фото
                                                                        </div>
                                                                        <div class="tender-row__item">
                                                                            Наименование
                                                                        </div>
                                                                        <div class="tender-row__item">
                                                                            Количество
                                                                        </div>
                                                                        <div class="tender-row__item">
                                                                            Стоимость
                                                                        </div>
                                                                        <div class="tender-row__item">Срок
                                                                            реализации
                                                                        </div>
                                                                        <div class="tender-row__item">
                                                                            Предоставим образец
                                                                        </div>
                                                                        <div class="tender-row__item">
                                                                            Брэндинг
                                                                        </div>
                                                                        <div class="tender-row__item">
                                                                            Упаковка
                                                                        </div>
                                                                        <div
                                                                            class="tender-row__item tender-row__item--center">
                                                                            Комментарий
                                                                            поставщика
                                                                        </div>
                                                                    </div>
                                                                    @if($review->items != null)
                                                                        @foreach($review->items as $itemKey => $item)
                                                                            <div
                                                                                class="tender-row tender-row--offer">
                                                                                @if ($item->attachments->first())
                                                                                    @php
                                                                                        $path = "";
                                                                                        $photoCount = 0;
                                                                                    @endphp
                                                                                    @foreach ($item->attachments as $key => $attachment)
                                                                                        @php
                                                                                            $path .= '../storage/reviewProducts/'.$attachment->path;
                                                                                            $photoCount++;
                                                                                            if(!$loop->last)
                                                                                              $path .= ','
                                                                                        @endphp
                                                                                    @endforeach
                                                                                    <div
                                                                                        class="tender-row__item"
                                                                                        data-product-img-slider="{{$path}}">
                                                                                        <div
                                                                                            class="tender-row__preview tender-row__preview--zoom">
                                                                                            <div
                                                                                                class="tender-row__preview-zoom-text">{{$photoCount}}
                                                                                                фото
                                                                                            </div>
                                                                                            <img
                                                                                                class="tender-row__preview-img"
                                                                                                src="../storage/reviewProducts/{{$item->attachments->first()->path}}">
                                                                                        </div>
                                                                                    </div>
                                                                                @else
                                                                                    <div
                                                                                        class="tender-row__item"
                                                                                        data-product-img-slider="../storage/tenderProducts/empty.jpg">
                                                                                        <div
                                                                                            class="tender-row__preview tender-row__preview--zoom">
                                                                                            <div
                                                                                                class="tender-row__preview-zoom-text">
                                                                                                0
                                                                                                фото
                                                                                            </div>
                                                                                            <img
                                                                                                class="tender-row__preview-img"
                                                                                                src="../storage/tenderProducts/empty.jpg">
                                                                                        </div>
                                                                                    </div>
                                                                                @endif

                                                                                <div
                                                                                    class="tender-row__item tender-row__item--middle">{{$item->name}}
                                                                                </div>
                                                                                <div
                                                                                    class="tender-row__item tender-row__item--big">{{$item->count}}</div>
                                                                                <div
                                                                                    @php
                                                                                        $price = $item->price . " RUB";
                                                                                        if ($item->currency_id != null) {
                                                                                             if ($item->currency_id != 1){
                                                                                                 $currency = App\Models\Currency::find($item->currency_id);
                                                                                                 $formatedPrice = $currency->price_back * $item->price;
                                                                                                 $price = round($formatedPrice, 2) .' RUB'. ' ('. $item->price .' '.$currency->code.')';
                                                                                             }

                                                                                            }
                                                                                    @endphp
                                                                                    class="tender-row__item tender-row__item--big">
                                                                                    {{$price}}
                                                                                </div>
                                                                                <div
                                                                                    class="tender-row__item tender-row__item--big">{{$item->release_time}}</div>
                                                                                <div
                                                                                    class="tender-row__item">
                                                                                    @if ($item->sample)
                                                                                        <svg
                                                                                            class="tender-row__item-icon tender-row__item-icon--check">
                                                                                            <use
                                                                                                xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                                        </svg>
                                                                                    @else
                                                                                        <svg
                                                                                            class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                                            <use
                                                                                                xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                                        </svg>
                                                                                    @endif
                                                                                </div>
                                                                                <div
                                                                                    class="tender-row__item">
                                                                                    @if ($item->branding)
                                                                                        <svg
                                                                                            class="tender-row__item-icon tender-row__item-icon--check">
                                                                                            <use
                                                                                                xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                                        </svg>
                                                                                    @else
                                                                                        <svg
                                                                                            class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                                            <use
                                                                                                xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                                        </svg>
                                                                                    @endif
                                                                                </div>

                                                                                <div
                                                                                    class="tender-row__item">
                                                                                    @if ($item->packing)
                                                                                        <svg
                                                                                            class="tender-row__item-icon tender-row__item-icon--check">
                                                                                            <use
                                                                                                xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                                        </svg>
                                                                                    @else
                                                                                        <svg
                                                                                            class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                                            <use
                                                                                                xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                                        </svg>
                                                                                    @endif
                                                                                </div>
                                                                                <div
                                                                                    class="tender-row__item tender-row__item--left">{{$item->description}}
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    @endif
                                                                    <div class="tenders-chat__wrapper">
                                                                        <div class="tenders-chat__content"
                                                                             data-chat-name="1">
                                                                            <div class="chat">
                                                                                <div class="chat__title">
                                                                                    Переговоры с "Первый
                                                                                    поставщик"
                                                                                </div>
                                                                                <div class="chat__messages">
                                                                                    <div class="chat__date">
                                                                                        08.05.2021
                                                                                    </div>
                                                                                    <div
                                                                                        class="chat__message">
                                                                                        <div
                                                                                            class="chat__message-content">
                                                                                            <div
                                                                                                class="chat__message-content-text">
                                                                                                Уверены, что
                                                                                                уложитесь в
                                                                                                сроки?
                                                                                                Куртка будет
                                                                                                выглядеть
                                                                                                точно
                                                                                                так?
                                                                                            </div>
                                                                                            <div
                                                                                                class="chat__message-content-images">
                                                                                                <img
                                                                                                    class="chat__message-content-image"
                                                                                                    src="images/examples/products-preview/products-preview-3.jpg">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="chat__message-time">
                                                                                            13:15
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="chat__message chat__message--invert">
                                                                                        <div
                                                                                            class="chat__message-content">
                                                                                            <div
                                                                                                class="chat__message-content-text">
                                                                                                Нет,
                                                                                                такой
                                                                                                ткани
                                                                                                нет
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="chat__message-time">
                                                                                            13:15
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="chat__message">
                                                                                        <div
                                                                                            class="chat__message-content">
                                                                                            <div
                                                                                                class="chat__message-content-text">
                                                                                                Понял
                                                                                            </div>
                                                                                        </div>
                                                                                        <div
                                                                                            class="chat__message-time">
                                                                                            13:15
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="chat__form">
                                                                                    <div
                                                                                        class="chat__form-wrapper">
                                                        <textarea class="chat__form-wrapper-input"
                                                                  placeholder="Введите сообщение"></textarea>
                                                                                    </div>
                                                                                    <div
                                                                                        class="chat__form-file-preview chat__form-file-preview--empty">
                                                                                        <div
                                                                                            class="chat__message-content-images"></div>
                                                                                        <div
                                                                                            class="chat__message-content-files"></div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="chat__form-buttons">
                                                                                        <label
                                                                                            class="chat__form-file-input-label">
                                                                                            <div
                                                                                                class="chat__form-file-input-text">
                                                                                                Прикрепить
                                                                                                файл
                                                                                            </div>
                                                                                            <svg
                                                                                                class="chat__form-file-input-icon">
                                                                                                <use
                                                                                                    xlink:href="../images/icons/icons-sprite.svg#upload"></use>
                                                                                            </svg>
                                                                                            <input
                                                                                                class="chat__form-file-input"
                                                                                                type="file"
                                                                                                multiple="">
                                                                                        </label>
                                                                                        <div
                                                                                            class="chat__form-send button button--small">
                                                                                            Отправить
                                                                                            сообщение
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                @else
                                                    <h2>Пусто</h2>
                                                @endif
                                            </div>

                                            <div class="tabs__toggle-item">
                                                @if ($tender->products)
                                                    @foreach ($tender->products as $key => $product)
                                                        <div class="border-block offer tenders-chat">
                                                            <div class="offer__header">
                                                                <div class="offer__header-product">

                                                                    @if ($product->attachments->first())
                                                                        @php
                                                                            $path = "";
                                                                            $photoCount = 0;
                                                                        @endphp
                                                                        @foreach ($product->attachments as $key => $attachment)
                                                                            @php
                                                                                $path .= '../storage/tenderProducts/'.$attachment->path;
                                                                                $photoCount++;
                                                                                if(!$loop->last)
                                                                                  $path .= ','
                                                                            @endphp
                                                                        @endforeach
                                                                        <div class="offer__header-preview"
                                                                             data-product-img-slider="{{$path}}">
                                                                            <div
                                                                                class="offer__header-preview-zoom-text">{{$photoCount}}
                                                                                фото
                                                                            </div>
                                                                            <img
                                                                                class="offer__header-preview-img"
                                                                                src="../storage/tenderProducts/{{$product->attachments->first()->path}}">
                                                                        </div>
                                                                    @else
                                                                        <div class="offer__header-preview"
                                                                             data-product-img-slider="../storage/tenderProducts/empty.jpg">
                                                                            <div
                                                                                class="offer__header-preview-zoom-text">
                                                                                0
                                                                                фото
                                                                            </div>
                                                                            <img
                                                                                class="offer__header-preview-img"
                                                                                src="../storage/tenderProducts/empty.jpg">
                                                                        </div>
                                                                    @endif
                                                                    <div
                                                                        class="offer__header-title">{{$product->title}}</div>
                                                                    <div class="offer__header-options">
                                                                        <div class="offer__header-option">
                                                                            <div
                                                                                class="offer__header-option-name">
                                                                                Количество:
                                                                            </div>
                                                                            <div
                                                                                class="offer__header-option-value">{{$product->count}}</div>
                                                                        </div>
                                                                        <div class="offer__header-option">
                                                                            <div
                                                                                class="offer__header-option-name">
                                                                                Образец:
                                                                            </div>
                                                                            @if($product->sample)
                                                                                <div
                                                                                    class="offer__header-option-value">
                                                                                    Обязателен
                                                                                </div>
                                                                            @else
                                                                                <div
                                                                                    class="offer__header-option-value">
                                                                                    Необязателен
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                        <div class="offer__header-option">
                                                                            <div
                                                                                class="offer__header-option-name">
                                                                                Комментарий:
                                                                            </div>
                                                                            <div
                                                                                class="offer__header-option-value">{{$product->description}}</div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="tender-row tender-row--offer-with-manufacturer tender-row--header">
                                                                <div class="tender-row__item">Фото</div>
                                                                <div class="tender-row__item">Предложение
                                                                </div>
                                                                <div class="tender-row__item">Количество
                                                                </div>
                                                                <div class="tender-row__item">Стоимость
                                                                </div>
                                                                <div class="tender-row__item">Срок
                                                                    реализации
                                                                </div>
                                                                <div class="tender-row__item">Предоставим
                                                                    образец
                                                                </div>
                                                                <div class="tender-row__item">Брэндинг</div>
                                                                <div class="tender-row__item">Упаковка</div>
                                                                <div class="tender-row__item"></div>
                                                                <div class="tender-row__item"></div>
                                                            </div>
                                                            @foreach($product->reviews as $revKey => $item)
                                                                <div
                                                                    class="tender-row tender-row--offer-with-manufacturer">

                                                                    @if ($item->attachments->first())
                                                                        @php
                                                                            $path = "";
                                                                            $photoCount = 0;
                                                                        @endphp
                                                                        @foreach ($item->attachments as $key => $attachment)
                                                                            @php
                                                                                $path .= '../storage/reviewProducts/'.$attachment->path;
                                                                                $photoCount++;
                                                                                if(!$loop->last)
                                                                                  $path .= ','
                                                                            @endphp
                                                                        @endforeach
                                                                        <div class="tender-row__item"
                                                                             data-product-img-slider="{{$path}}">
                                                                            <div
                                                                                class="tender-row__preview tender-row__preview--zoom">
                                                                                <div
                                                                                    class="tender-row__preview-zoom-text">{{$photoCount}}
                                                                                    фото
                                                                                </div>
                                                                                <img
                                                                                    class="tender-row__preview-img"
                                                                                    src="../storage/reviewProducts/{{$item->attachments->first()->path}}">
                                                                            </div>
                                                                        </div>
                                                                    @else
                                                                        <div class="tender-row__item"
                                                                             data-product-img-slider="../storage/tenderProducts/empty.jpg">
                                                                            <div
                                                                                class="tender-row__preview tender-row__preview--zoom">
                                                                                <div
                                                                                    class="tender-row__preview-zoom-text">
                                                                                    0
                                                                                    фото
                                                                                </div>
                                                                                <img
                                                                                    class="tender-row__preview-img"
                                                                                    src="../storage/tenderProducts/empty.jpg">
                                                                            </div>
                                                                        </div>
                                                                    @endif
                                                                    <div
                                                                        class="tender-row__item tender-row__item--middle">
                                                                        <div
                                                                            class="tender-row__item-options">
                                                                            <div
                                                                                class="tender-row__item-option">
                                                                                <div
                                                                                    class="tender-row__item-text tender-row__item-text--bold">
                                                                                    {{$item->review->provider->name}}
                                                                                </div>
                                                                            </div>
                                                                            <div
                                                                                class="tender-row__item-option">
                                                                                <div
                                                                                    class="tender-row__item-title">
                                                                                    Предложение
                                                                                </div>
                                                                                <div
                                                                                    class="tender-row__item-text">{{$item->title}}</div>
                                                                            </div>
                                                                            <div
                                                                                class="tender-row__item-option">
                                                                                <div
                                                                                    class="tender-row__item-title">
                                                                                    Комментарий
                                                                                </div>
                                                                                <div
                                                                                    class="tender-row__item-text">{{$item->description}}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div
                                                                        class="tender-row__item tender-row__item--big">{{$item->count}}</div>
                                                                    <div
                                                                        class="tender-row__item tender-row__item--big">{{$item->price}}
                                                                        ₽
                                                                    </div>
                                                                    <div
                                                                        class="tender-row__item tender-row__item--big">{{$item->release_time}}
                                                                        дней
                                                                    </div>
                                                                    <div class="tender-row__item">
                                                                        @if ($item->sample)
                                                                            <svg
                                                                                class="tender-row__item-icon tender-row__item-icon--check">
                                                                                <use
                                                                                    xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                            </svg>
                                                                        @else
                                                                            <svg
                                                                                class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                                <use
                                                                                    xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                            </svg>
                                                                        @endif
                                                                    </div>

                                                                    <div class="tender-row__item">
                                                                        @if ($item->branding)
                                                                            <svg
                                                                                class="tender-row__item-icon tender-row__item-icon--check">
                                                                                <use
                                                                                    xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                            </svg>
                                                                        @else
                                                                            <svg
                                                                                class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                                <use
                                                                                    xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                            </svg>
                                                                        @endif
                                                                    </div>

                                                                    <div class="tender-row__item">
                                                                        @if ($item->packing)
                                                                            <svg
                                                                                class="tender-row__item-icon tender-row__item-icon--check">
                                                                                <use
                                                                                    xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                                                            </svg>
                                                                        @else
                                                                            <svg
                                                                                class="tender-row__item-icon tender-row__item-icon--not-check">
                                                                                <use
                                                                                    xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                                                            </svg>
                                                                        @endif
                                                                    </div>

                                                                    <div class="tender-row__item">
                                                                        <div
                                                                            class="offer__manufacturer-button offer__manufacturer-button--center offer__manufacturer-button--green">
                                                                            <div
                                                                                class="offer__manufacturer-button-text">
                                                                                Выбрать
                                                                                победителем
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="tender-row__item">
                                                                        <div
                                                                            class="offer__manufacturer-button offer__manufacturer-button--center offer__manufacturer-button--message tenders-chat__button"
                                                                            data-chat="1">
                                                                            <div
                                                                                class="offer__manufacturer-button-text offer__manufacturer-button-text--center tenders-chat__button-text">
                                                                                <div
                                                                                    class="offer__manufacturer-button-message offer__manufacturer-button-message--center">
                                                                                    <svg
                                                                                        class="offer__manufacturer-button-message-icon">
                                                                                        <use
                                                                                            xlink:href="../images/icons/icons-sprite.svg#message"></use>
                                                                                    </svg>
                                                                                    <div
                                                                                        class="offer__manufacturer-button-message-count">
                                                                                        <div
                                                                                            class="offer__manufacturer-button-message-count-inner">
                                                                                            <div
                                                                                                class="offer__manufacturer-button-message-count-inner-number">
                                                                                                3
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="tenders-chat__wrapper tenders-chat__wrapper--in-row">
                                                                    <div class="tenders-chat__content"
                                                                         data-chat-name="1">
                                                                        <div class="chat">
                                                                            <div class="chat__title">
                                                                                Переговоры с "Первый
                                                                                поставщик"
                                                                            </div>
                                                                            <div class="chat__messages">
                                                                                <div class="chat__date">
                                                                                    08.05.2021
                                                                                </div>
                                                                                <div class="chat__message">
                                                                                    <div
                                                                                        class="chat__message-content">
                                                                                        <div
                                                                                            class="chat__message-content-text">
                                                                                            Уверены,
                                                                                            что
                                                                                            уложитесь в
                                                                                            сроки? Куртка
                                                                                            будет выглядеть
                                                                                            точно
                                                                                            так?
                                                                                        </div>
                                                                                        <div
                                                                                            class="chat__message-content-images">
                                                                                            <img
                                                                                                class="chat__message-content-image"
                                                                                                src="images/examples/products-preview/products-preview-3.jpg">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="chat__message-time">
                                                                                        13:15
                                                                                    </div>
                                                                                </div>
                                                                                <div
                                                                                    class="chat__message chat__message--invert">
                                                                                    <div
                                                                                        class="chat__message-content">
                                                                                        <div
                                                                                            class="chat__message-content-text">
                                                                                            Нет,
                                                                                            такой ткани
                                                                                            нет
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="chat__message-time">
                                                                                        13:15
                                                                                    </div>
                                                                                </div>
                                                                                <div class="chat__message">
                                                                                    <div
                                                                                        class="chat__message-content">
                                                                                        <div
                                                                                            class="chat__message-content-text">
                                                                                            Понял
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="chat__message-time">
                                                                                        13:15
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="chat__form">
                                                                                <div
                                                                                    class="chat__form-wrapper">
                                                        <textarea class="chat__form-wrapper-input"
                                                                  placeholder="Введите сообщение"></textarea>
                                                                                </div>
                                                                                <div
                                                                                    class="chat__form-file-preview chat__form-file-preview--empty">
                                                                                    <div
                                                                                        class="chat__message-content-images"></div>
                                                                                    <div
                                                                                        class="chat__message-content-files"></div>
                                                                                </div>
                                                                                <div
                                                                                    class="chat__form-buttons">
                                                                                    <label
                                                                                        class="chat__form-file-input-label">
                                                                                        <div
                                                                                            class="chat__form-file-input-text">
                                                                                            Прикрепить файл
                                                                                        </div>
                                                                                        <svg
                                                                                            class="chat__form-file-input-icon">
                                                                                            <use
                                                                                                xlink:href="../images/icons/icons-sprite.svg#upload"></use>
                                                                                        </svg>
                                                                                        <input
                                                                                            class="chat__form-file-input"
                                                                                            type="file"
                                                                                            multiple="">
                                                                                    </label>
                                                                                    <div
                                                                                        class="chat__form-send button button--small">
                                                                                        Отправить
                                                                                        сообщение
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach
                                                @else
                                                    <h1>Пусто</h1>
                                                @endif
                                            </div>
                                        @endif
                                    </div>

                                </div>

                        </div>
                </div>
        </section>
        </div>
    @else
        <div class="wrapper">
            <section class="section section--small">
                <div class="layout">
                    <div class="breadcrumbs"><a class="breadcrumbs__item" href="/_index.html">Главная</a><a
                            class="breadcrumbs__item" href="/_tenders-list.html">Список тендеров</a>
                        <div class="breadcrumbs__item breadcrumbs__item--active"></div>
                    </div>
                </div>
            </section>
            <section class="section section--small">
                <div class="layout">
                    <div class="tender-header">
                        <div class="tender-header__main">
                            <div class="tender-header__main-title">
                                <div class="tender-header__main-title-name">Тендер не найден</div>
                                <div class="tender-header__main-title-number"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endif
@stop

@section('f_script')
    @php
        $countryFrom = false;
                    if ($user != null) {
                             $userChRole = $user->subroles->where('id', '!=', '4')->first();
                    $userRuRole = $user->subroles->where('id', '=' ,'4')->first();

                    if ($userChRole != null && $userRuRole != null){
                        $countryFrom = 2;
                    }
                    elseif ($userChRole != null && $userRuRole == null){
                        $countryFrom = 2;
                    }
                    elseif ($userChRole == null && $userRuRole != null){
                        $countryFrom = 1;
                    }
                    }


    @endphp

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script>
        let cb = document.getElementById('tender-copy-btn');
        let isCopy = false;
        let isReview = false;
        let captchaState = false;
        let tender = {!! json_encode($tender) !!};
        let COUNTRY = {!! json_encode($countryFrom) !!};


        console.log(tender)
        fromCountry = COUNTRY

        document.querySelectorAll('.offer__manufacturer-button--accept').forEach(btn => {
            btn.addEventListener('click', e => {

                let dealType = e.currentTarget.dataset.type;
                let reviewId = e.currentTarget.dataset.review;
                let delivery = e.currentTarget.dataset.delivery;
                let country = e.currentTarget.dataset.country;

                if (dealType == 1)
                    console.log('Найти переговорщика')
                else if (dealType == 2)
                    console.log('Выбрать текущего переговорщика')
                console.log('Отзыв: ', reviewId);

                if (dealType == null || reviewId == null || delivery == null || country == null)
                    return;

                console.log('type:', dealType);
                console.log('delivery:', delivery);
                axios({
                    method: 'POST',
                    url: `{{ route('tender-setWinner') }}`,
                    data: {
                        tender_id: tender.id,
                        review_id: reviewId,
                        deal_type: dealType,
                        delivery: delivery,
                        country: country,
                    },
                    headers: {
                        'Content-Type': 'application/json'
                    },
                }).then((response) => {
                    console.log(response.data);


                    document.getElementById('modal-winner-success-providerName').innerText =
                        response.data.provider.provider_infos[0].company;
                    modals.open('winner-success');

                    if (dealType == 1 && delivery == 1) {
                        console.log("DELIVERY MESSAGE")

                        let mailData = {
                            title: 'Покупатель выбрал вас поставщиком на тендер id: ' + response.data.tender.id,
                            body: 'Покупатель ' + response.data.buyer.name + '(' + response.data.buyer.email + ') выбрал поставщика и ждёт выбора ответственных за доставку',
                            email: response.data.provider.email,
                        }
                        sendMessageToEmail(mailData);

                        mailData = {
                            title: 'Покупатель выбрал поставщика на тендер id: ' + response.data.tender.id,
                            body: 'Покупатель ' + response.data.buyer.name + '(' + response.data.buyer.email + ') выбрал поставщика и ждёт выбора ответственных за доставку',
                        }
                        sendMessageToEmail(mailData);

                    } else if (dealType == 1 && delivery == 0) {
                        let mailData = {
                            title: 'Покупатель выбрал поставщика на тендер id: ' + response.data.tender.id,
                            body: 'Покупатель ' + response.data.buyer.name + '(' + response.data.buyer.email + ') выбрал поставщика и сам заберёт товар',
                            email: response.data.provider.email,
                        }
                        sendMessageToEmail(mailData);
                    } else if (dealType == 2 && delivery == 1) {
                        let mailData = {
                            title: 'Покупатель выбрал поставщика на тендер id: ' + response.data.tender.id,
                            body: 'Покупатель ' + response.data.buyer.name + '(' + response.data.buyer.email + ') выбрал поставщика и хочет от вас доставку',
                            email: response.data.provider.email,
                        }
                        sendMessageToEmail(mailData);
                    } else if (dealType == 2 && delivery == 0) {
                        let mailData = {
                            title: 'Покупатель выбрал поставщика на тендер id: ' + response.data.tender.id,
                            body: 'Покупатель ' + response.data.buyer.name + '(' + response.data.buyer.email + ') выбрал поставщика  и сам заберёт товар',
                            email: response.data.provider.email,
                        }
                        sendMessageToEmail(mailData);
                    }

                })


            })
        });

        function sendMessageToEmail(data) {
            axios({
                method: 'POST',
                url: `{{ route('email-send') }}`,
                data: {
                    title: data.title,
                    body: data.body,
                    email: data.email,
                },
                headers: {
                    'Content-Type': 'application/json'
                },
            }).then((response) => {
                console.log(response.data)
            })
        }

        function hideReview(e) {
            let revirwId = e.dataset.review;
            console.log(revirwId);

            axios({
                method: 'POST',
                url: `{{ route('review-hide') }}`,
                data: {
                    id: revirwId
                },
                headers: {
                    'Content-Type': 'application/json'
                },
            }).then((response) => {
                e.innerText = 'Вернуть в список';
                e.setAttribute('onclick', 'unhideReview(this)')
                e.nextElementSibling.innerHTML = `<use xlink:href="../images/icons/icons-sprite.svg#return"></use>`
                document.getElementById('hidden-reviews').appendChild(document.getElementById('review-' + revirwId));
            }).catch((err) => {
                console.log(err)
            });
        }

        function unhideReview(e) {
            let revirwId = e.dataset.review;
            console.log(revirwId);

            axios({
                method: 'POST',
                url: `{{ route('review-unhide') }}`,
                data: {
                    id: revirwId
                },
                headers: {
                    'Content-Type': 'application/json'
                },
            }).then((response) => {
                e.innerText = 'Скрыть из списка';
                e.setAttribute('onclick', 'hideReview(this)')
                e.nextElementSibling.innerHTML = `<use xlink:href="../images/icons/icons-sprite.svg#close"></use>`
                console.log(document.getElementById('reviews'))
                document.getElementById('reviews').prepend(document.getElementById('review-' + revirwId));
            }).catch((err) => {
                console.log(err)
            });
        }

        function captchaCallback() {
            captchaState = true;
        }

        function copyTender(e) {
            let tenderId = e.dataset.tender;
            axios({
                method: 'GET',
                url: location.origin + '/tender/get/' + tenderId
            }).then((result) => {
                console.log(result.data);
                showCopy(result.data);
            }).catch((err) => {
                console.log(err);
            });
        }

        async function openReview() {

            if (!isReview) {
                isReview = true;
                await loadReviewModal();
            }

            modals.open('new-offer-tender-products');
        }

        function loadReviewModal() {
            let modalItems = document.getElementById('tender-offer-items');
            let template = document.getElementById('tender-offer-item-template');
            template.removeAttribute('id');

            console.log(tender)

            tender.products.forEach((product) => {
                let newProduct = template.cloneNode(true);
                let newProductHeader = document.getElementById('tender-table-product-' + product.id).cloneNode(true);
                newProduct.prepend(newProductHeader);
                newProduct.setAttribute('data-product', product.id)
                modalItems.appendChild(newProduct);
            });
            template.remove();
            productsInTenderFunc.get('new-offer-tender-products-form').refreshOffersPhotoUpload();
            productsInTenderFunc.get('new-offer-tender-products-form').refreshFormCheck();
        }

        function uploadReview() {
            let modalItems = document.getElementById('tender-offer-items');
            let formData = new FormData();
            let itemId = 0;

            document.getElementById('review-upload-btn').classList.add('button--loading');

            formData.append("review[tender_id]", tender.id);

            formData.append("review[from_country]", fromCountry);

            modalItems.childNodes.forEach((product) => {
                if (product.nodeType == 1) {
                    let reviewForm = product.querySelector('.product-in-tender__item-inputs')
                    console.log(reviewForm)

                    formData.append("review[item][" + itemId + "][product_id]", product.dataset.product);

                    console.log('name', reviewForm.querySelector('.product-in-tender__item-input-name > div > input').value);
                    formData.append("review[item][" + itemId + "][name]",
                        reviewForm.querySelector('.product-in-tender__item-input-name > div > input').value);

                    console.log('price', reviewForm.querySelector('.product-in-tender__item-input-name--price > div > input').value);
                    formData.append("review[item][" + itemId + "][price]",
                        reviewForm.querySelector('.product-in-tender__item-input-name--price > div > input').value);

                    console.log('currency', reviewForm.querySelector('.product-in-tender__item-input-name--price > div > select').value);
                    formData.append("review[item][" + itemId + "][currency]",
                        reviewForm.querySelector('.product-in-tender__item-input-name--price > div > select').value);


                    console.log('description', reviewForm.querySelector('.product-in-tender__item-input-comment > div > textarea').value);
                    formData.append("review[item][" + itemId + "][description]",
                        reviewForm.querySelector('.product-in-tender__item-input-comment > div > textarea').value);

                    console.log('count', reviewForm.querySelector('.product-in-tender__item-input-count--offer > .product-in-tender__item-input-count-item  > div > input').value);
                    formData.append("review[item][" + itemId + "][count]",
                        reviewForm.querySelector('.product-in-tender__item-input-count--offer > .product-in-tender__item-input-count-item  > div > input').value)

                    console.log('release_time', reviewForm.querySelector('.product-in-tender__item-input-count--term > .product-in-tender__item-input-count-item  > div > input').value);
                    formData.append("review[item][" + itemId + "][release_time]",
                        reviewForm.querySelector('.product-in-tender__item-input-count--term > .product-in-tender__item-input-count-item  > div > input').value);

                    console.log('sample', reviewForm.querySelector('.product-in-tender__item-input-example > label > input').checked);
                    formData.append("review[item][" + itemId + "][sample]",
                        reviewForm.querySelector('.product-in-tender__item-input-example > label > input').checked);

                    console.log('branding', reviewForm.querySelector('.product-in-tender__item-input-branding > label > input').checked);
                    formData.append("review[item][" + itemId + "][branding]",
                        reviewForm.querySelector('.product-in-tender__item-input-branding > label > input').checked);


                    console.log('packing', reviewForm.querySelector('.product-in-tender__item-input-packing > label > input').checked);
                    formData.append("review[item][" + itemId + "][packing]",
                        reviewForm.querySelector('.product-in-tender__item-input-packing > label > input').checked);


                    let reviewImages = reviewForm.querySelector('.product-in-tender__item-input-images > .photo-upload > .photo-upload__items > .photo-upload__label-wrapper > .photo-upload__label > .photo-upload__input');
                    console.log(reviewImages);
                    for (var i = 0; i < reviewImages.files.length; i++) {
                        console.log(reviewImages.files[i])
                        formData.append("review[item][" + itemId + "][attachments][" + i + "][file]",
                            reviewImages.files[i]);
                    }
                    itemId++;
                }
            });

            axios({
                method: 'POST',
                url: `{{ route('tender-review-create') }}`,
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
                    modals.close('new-offer-tender-products');
                    modals.close('new-tender-products');
                    modals.open('new-tender-success');
                })
                .catch((err) => {
                    console.log(err)
                });

        }


        function showCopy(data) {
            modals.open('new-tender-products');
            if (isCopy)
                return
            isCopy = true;

            for (var i = 0; i < data.products.length - 1; i++) {
                document.getElementById('tender_add_product_btn').click();
            }

            let productId = 0;
            let tenderProdList = document.getElementById('new-tender-products-list');
            tenderProdList.childNodes.forEach((tenderProductListItem, tenderProductListItemIndex) => {
                if (tenderProductListItem.nodeType == 1) {
                    tenderProductListItem.childNodes[3].childNodes.forEach((productItem, productItemIndex) => {
                        if (productItemIndex == 1) {
                            productItem.childNodes[1].childNodes[1].value = data.products[productId].title;
                        } else if (productItemIndex == 3) {
                            productItem.childNodes[1].childNodes[1].value = data.products[productId].description
                        } else if (productItemIndex == 5) {
                            productItem.childNodes[3].childNodes[1].childNodes[3].value = data.products[productId].count
                        } else if (productItemIndex == 7) {
                            productItem.childNodes[3].childNodes[1].checked = data.products[productId].sample
                        } else if (productItemIndex == 9) {
                            if (data.products[productId].attachments.length != 0) {
                                let imgContainer = productItem.childNodes[1].childNodes[1];
                                data.products[productId].attachments.forEach((att, attIndex) => {
                                    let div = document.createElement("div");
                                    div.className = "photo-upload__preview-wrapper";
                                    div.setAttribute("data-upload-preview", '');
                                    div.setAttribute("data-copied", 'true');
                                    div.setAttribute("data-path", att.path);
                                    imgContainer.prepend(div);

                                    let div2 = document.createElement("div");
                                    div2.className = "photo-upload__preview-item";
                                    div.appendChild(div2);

                                    let img = document.createElement("img");
                                    img.className = "photo-upload__preview";
                                    img.src = "../storage/tenderProducts/" + att.path;
                                    div2.appendChild(img);

                                });
                            }
                        }
                    });
                    productId++;
                }
            });
        }

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
                            let copyIndex = 0;
                            productItem.childNodes[1].childNodes[1].childNodes.forEach((productImage, productImageIndex) => {
                                if (productImage.tagName == 'DIV') {
                                    if (productImage.dataset.copied) {
                                        console.log(productImage.dataset.path);
                                        formData.append("tender[products][" + productId + "][copied_attachments][" + copyIndex + "]", productImage.dataset.path);
                                        copyIndex++;
                                    }
                                } else if (productImage.tagName == 'LABEL') {
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

@endsection
