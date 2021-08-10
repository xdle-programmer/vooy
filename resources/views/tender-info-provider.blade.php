@extends('layouts.app')

@section('content')
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
                                    class="tender-header__main-title-status-title tender-header__main-title-status-title--green">
                                    {{$tender->status->name}}
                                    @if ($tender->substatus != null)
                                        ({{$tender->substatus->name}})
                                    @endif
                                </div>
                                <div class="tender-header__main-title-status-line">
                                    <div class="status-line status-line--{{$tender->status_id}}"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{--
                    <div class="tender-header__desc">
                        <div class="tender-header__desc-item">
                            <div class="tender-header__desc-item-name">Cоздан:</div>
                            <div class="tender-header__desc-item-value">24.02.2020</div>
                        </div>
                        <div class="tender-header__desc-item">
                            <div class="tender-header__desc-item-name">В реализации с:</div>
                            <div class="tender-header__desc-item-value">28.02.2020</div>
                        </div>
                    </div>--}}
                </div>
            </div>
        </section>

        <section class="section section--small">
            <div class="layout">
                <div class="tender-header__main-buttons">
                    @php
                        $hasReview = App\Models\TenderProductReview::where('provider_id', $user->id)->where('tender_id', $tender->id)->first();
                    @endphp
                    @if($hasReview != null)
                        <div class="tender-header__desc-item-name">Предложение сделано:</div>
                        <div
                            class="tender-header__desc-item-value"> {{$hasReview->created_at->format('d.m.Y')}}</div>
                    @endif
                </div>

                @if ($tender->substatus != null)
                    @if (($tender->deliveryman_id == null && $tender->negotiator_id == $user->id) || ($tender->deliveryman_id == $user->id))
                        @if ($tender->substatus->id == 2)
                            <form method="POST" action="{{ route('tender-substatus-next') }}">
                                @csrf
                                <input type="hidden" name="substatus_id" value="{{$tender->substatus->id}}">
                                <input type="hidden" name="tender_id" value="{{$tender->id}}">
                                <x-button class="modal__button button button--invert form-check__button">Счёт
                                    выставлен
                                </x-button>
                            </form>
                        @endif
                            @if ($tender->substatus->id == 3)
                                <form method="POST" action="{{ route('tender-substatus-next') }}">
                                    @csrf
                                    <input type="hidden" name="substatus_id" value="{{$tender->substatus->id}}">
                                    <input type="hidden" name="tender_id" value="{{$tender->id}}">
                                    <x-button class="modal__button button button--invert form-check__button">Счёт
                                        оплачен
                                    </x-button>
                                </form>
                            @endif
                    @endif
                @endif

                <div class="buyer">
                    <div class="buyer__logo" data-name="П"></div>
                    <div class="buyer__title">{{$tender->buyer->name}}</div>
                    <div class="buyer__options">
                        <div class="buyer__option">
                            <div class="buyer__option-name">Город:</div>
                            <div class="buyer__option-value">{{$tender->buyer->city}}</div>
                        </div>
                        <div class="buyer__option">
                            <div class="buyer__option-name">Тендеров:</div>
                            <div class="buyer__option-value">1</div>
                        </div>
                    </div>
                </div>
                <div class="tabs">
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
                            <div class="tabs__toggle-button">Тендер</div>
                            <div class="tabs__toggle-button tabs__toggle-button--active">Мой ответ</div>
                        </div>
                    </div>
                    <div class="tabs__toggle-items">
                        <div class="tabs__toggle-item">
                            <section class="section section--small">
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
                            </section>
                        </div>
                        <div class="tabs__toggle-item tabs__toggle-item--active tabs__toggle-item--active-effect">
                            <div class="border-block offer">
                                <div class="tender-row tender-row--offer tender-row--header">
                                    <div class="tender-row__item">Фото</div>
                                    <div class="tender-row__item">Наименование</div>
                                    <div class="tender-row__item">Количество</div>
                                    <div class="tender-row__item">Стоимость</div>
                                    <div class="tender-row__item">Срок реализации</div>
                                    <div class="tender-row__item">Предоставим образец</div>
                                    <div class="tender-row__item">Брэндинг</div>
                                    <div class="tender-row__item">Упаковка</div>
                                    <div class="tender-row__item tender-row__item--center">Комментарий</div>
                                </div>
                                @if($review != null)
                                @if($review->items != null)
                                    @foreach($review->items as $itemKey => $item)
                                        <div class="tender-row tender-row--offer">
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
                                                        <img class="tender-row__preview-img"
                                                             src="../storage/reviewProducts/{{$item->attachments->first()->path}}">
                                                    </div>
                                                </div>
                                            @else
                                                <div class="tender-row__item"
                                                     data-product-img-slider="../storage/tenderProducts/empty.jpg">
                                                    <div
                                                        class="tender-row__preview tender-row__preview--zoom">
                                                        <div class="tender-row__preview-zoom-text">0 фото
                                                        </div>
                                                        <img class="tender-row__preview-img"
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
                                @endif
                            </div>
                            <div class="border-block">
                                <div class="chat">
                                    <div class="chat__title">Переговоры с &quot;Петр Иванов&quot;</div>
                                    <div class="chat__messages">
                                        <div class="chat__date">08.05.2021</div>
                                        <div class="chat__message">
                                            <div class="chat__message-content">
                                                <div class="chat__message-content-text">Уверены, что уложитесь в сроки?
                                                    Куртка будет выглядеть точно так?
                                                </div>
                                                <div class="chat__message-content-images"><img
                                                        class="chat__message-content-image"
                                                        src="images/examples/products-preview/products-preview-3.jpg">
                                                </div>
                                            </div>
                                            <div class="chat__message-time">13:15</div>
                                        </div>
                                        <div class="chat__message chat__message--invert">
                                            <div class="chat__message-content">
                                                <div class="chat__message-content-text">Да, у нас производство налажено.
                                                    Вот фотографии производства, посмотрите
                                                </div>
                                                <div class="chat__message-content-images"><img
                                                        class="chat__message-content-image"
                                                        src="images/examples/manufacturer/production/production-1.jpg"><img
                                                        class="chat__message-content-image"
                                                        src="images/examples/manufacturer/production/production-2.jpg"><img
                                                        class="chat__message-content-image"
                                                        src="images/examples/manufacturer/production/production-3.jpg"><img
                                                        class="chat__message-content-image"
                                                        src="images/examples/manufacturer/production/production-4.jpg">
                                                </div>
                                            </div>
                                            <div class="chat__message-time">13:15</div>
                                        </div>
                                        <div class="chat__message">
                                            <div class="chat__message-content">
                                                <div class="chat__message-content-text">Отлично, выбираю вас
                                                    победителем. Пришлите договор
                                                </div>
                                            </div>
                                            <div class="chat__message-time">13:15</div>
                                        </div>
                                        <div class="chat__date">09.05.2021</div>
                                        <div class="chat__message chat__message--invert">
                                            <div class="chat__message-content">
                                                <div class="chat__message-content-text">Сегодня подготовим</div>
                                            </div>
                                            <div class="chat__message-time">13:15</div>
                                        </div>
                                        <div class="chat__message chat__message--invert">
                                            <div class="chat__message-content">
                                                <div class="chat__message-content-text">Высылаю договор</div>
                                                <div class="chat__message-content-files"><a
                                                        class="chat__message-content-file" href="#">
                                                        <svg class="chat__message-content-file-icon">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#file"></use>
                                                        </svg>
                                                        <div class="chat__message-content-file-text">Договор.docx</div>
                                                    </a><a class="chat__message-content-file" href="#">
                                                        <svg class="chat__message-content-file-icon">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#file"></use>
                                                        </svg>
                                                        <div class="chat__message-content-file-text">Приложение.docx
                                                        </div>
                                                    </a></div>
                                            </div>
                                            <div class="chat__message-time">13:15</div>
                                        </div>
                                        <div class="chat__message">
                                            <div class="chat__message-content">
                                                <div class="chat__message-content-text">Получил, сегодня подпишу</div>
                                            </div>
                                            <div class="chat__message-time">13:15</div>
                                        </div>
                                    </div>
                                    <div class="chat__form">
                                        <div class="chat__form-wrapper">
                                            <textarea class="chat__form-wrapper-input"
                                                      placeholder="Введите сообщение"></textarea>
                                        </div>
                                        <div class="chat__form-file-preview chat__form-file-preview--empty">
                                            <div class="chat__message-content-images"></div>
                                            <div class="chat__message-content-files"></div>
                                        </div>
                                        <div class="chat__form-buttons">
                                            <label class="chat__form-file-input-label">
                                                <div class="chat__form-file-input-text">Прикрепить файл</div>
                                                <svg class="chat__form-file-input-icon">
                                                    <use xlink:href="../images/icons/icons-sprite.svg#upload"></use>
                                                </svg>
                                                <input class="chat__form-file-input" type="file" multiple>
                                            </label>
                                            <div class="chat__form-send button button--small">Отправить сообщение</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
