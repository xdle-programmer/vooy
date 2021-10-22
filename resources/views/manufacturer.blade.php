@extends('layouts.app')

@section('content')
    <div class="wrapper">
        <section class="section section--small">
            <div class="layout">
                <div class="breadcrumbs"><a class="breadcrumbs__item" href="/_index.html">Главная</a><a
                        class="breadcrumbs__item" href="/_manufacturer-list.html">Список поставщиков</a>
                    <div class="breadcrumbs__item breadcrumbs__item--active">Название поставщика</div>
                </div>
                <div class="manufacturer">
                    @if ($provider->photo != null)
                        <img class="manufacturer__logo" src="../storage/users/{{$provider->id}}/{{$provider->photo}}">
                    @else
                        <img class="manufacturer__logo" data-name="A">
                    @endif


                    <div class="manufacturer__title">{{$provider->name}}</div>
                    <div class="manufacturer__options">
                        <div class="manufacturer__option">
                            <div class="manufacturer__option-name">Город:</div>
                            <div class="manufacturer__option-value">{{$provider->city}}</div>
                        </div>
                        <div class="manufacturer__option">
                            <div class="manufacturer__option-name">Компания:</div>
                            <div
                                class="manufacturer__option-value">{{$provider->provider_infos->first()->company ?? ' '}}</div>
                        </div>
                        <div class="manufacturer__option">
                            <div class="manufacturer__option-name">Побед в тендерах:</div>
                            <div
                                class="manufacturer__option-value">{{$provider->tenders_provider->where('status_id', '>=', 4)->count()}}</div>
                        </div>
                        <div class="manufacturer__option">
                            <div class="manufacturer__option-name">Товаров в наличии:</div>
                            <div class="manufacturer__option-value">{{$provider->provider_products->count()}}</div>
                        </div>
                    </div>
                    <div class="manufacturer__reviews">
                        <div class="reviews">
                            <div class="reviews__desc">
                                <div class="reviews__item">
                                    @if ($provider->user_reviews->count() < 1)
                                        <div class="reviews__item-value">0</div>
                                    @else
                                        <div class="reviews__item-value">{{$provider->user_reviews->avg('grade')}}</div>
                                    @endif
                                    <svg class="reviews__item-star">
                                        <use xlink:href="../images/icons/icons-sprite.svg#star"></use>
                                    </svg>
                                </div>
                                <div class="reviews__count">{{$provider->user_reviews->count()}} отзыва</div>
                            </div>
                            <div data-id="{{$provider->id}}" class="reviews__button button">Посмотреть отзывы</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section--small">
            <div class="layout">
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
                            <div class="tabs__toggle-button tabs__toggle-button--active">Товары</div>
                            <div class="tabs__toggle-button">Тендеры</div>
                            <div class="tabs__toggle-button">Заводы</div>
                        </div>
                    </div>
                    <div class="tabs__toggle-items">
                        <div class="tabs__toggle-item tabs__toggle-item--active tabs__toggle-item--active-effect">
                            <div class="products-grid">
                                @foreach($provider->provider_products as $product)
                                    <div class="product-preview" href="/product-card/{{$product->id}}">
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
                                               href="/product-card/{{$product->id}}">{{$product->title}}</a>
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

                            </div>
                        </div>
                        <div class="tabs__toggle-item">
                            <div class="tender-row tender-row--header">
                                <div class="tender-row__item">Фото</div>
                                <div class="tender-row__item">Наименование</div>
                                <div class="tender-row__item">Дата создания</div>
                                <div class="tender-row__item">Номер</div>
                                <div class="tender-row__item">Количество</div>
                                <div class="tender-row__item">Статус</div>
                                <div class="tender-row__item tender-row__item--right">Оценка</div>
                            </div>

                            @foreach($provider->tenders_provider as $tender)
                                <div class="tender-row  ">
                                    <div class="tender-row__item">
                                        @if ($tender->products->first()->attachments->first())
                                            <img class="tender-row__preview"
                                                 src="../storage/tenderProducts/{{$tender->products->first()->attachments->first()->path}}">
                                        @else
                                            <img class="tender-row__preview"
                                                 src="../storage/tenderProducts/empty.jpg">
                                        @endif
                                    </div>
                                    <a class="tender-row__item tender-row__item--left tender-row__item--link tender-row__item--middle"
                                       href="{{route('tenders-info', ['id' => $tender->id])}}">{{$tender->products->first()->title ?? ' '}}</a>
                                    <div
                                        class="tender-row__item tender-row__item--small">{{$tender->created_at->format('d.m.Y')}}</div>
                                    <div class="tender-row__item tender-row__item--small">{{$tender->id}}</div>
                                    <div
                                        class="tender-row__item tender-row__item--big">{{$tender->products->sum('count')}}</div>
                                    <div class="tender-row__item">
                                        <div class="tender-row__status">
                                            <div class="tender-row__status-title">{{$tender->status->name}}</div>
                                            <div class="tender-row__status-line">
                                                <div class="status-line status-line--{{$tender->status_id}}"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tender-row__item">
                                        <div class="tender-row__item-assessment">
                                            <div
                                                class="tender-row__item-assessment-value">{{$tender->rating->where('user_id', $provider->id)->first()->grade ?? ' '}}</div>
                                            <svg class="tender-row__item-assessment-star">
                                                <use xlink:href="../images/icons/icons-sprite.svg#star"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        <div class="tabs__toggle-item">
                            @foreach($provider->provider_factories as $factory)
                            <div class="border-block offer tenders-chat">
                                <div class="offer__header">
                                    <div class="manufacturer">


                                        @if ($factory->logo != null)
                                            <img class="manufacturer__logo"
                                                 src="../storage/factories/{{$factory->id}}/{{$factory->logo}}">
                                        @else
                                            <div class="manufacturer__logo" data-name="{{substr($factory->title, 0, 2)}}"></div>
                                        @endif

                                        <div class="manufacturer__title">{{$factory->title}}
                                        </div>
                                        <div class="manufacturer__options">
                                            <div class="manufacturer__option">
                                                <div class="manufacturer__option-name">
                                                    Город:
                                                </div>
                                                <div class="manufacturer__option-value">{{$factory->city}}</div>
                                            </div>
                                            <div class="manufacturer__option">
                                                <div class="manufacturer__option-name">
                                                    Адрес:
                                                </div>
                                                <div class="manufacturer__option-value">
                                                    {{$factory->address}}
                                                </div>
                                            </div>
                                        </div>
                                        {{--
                                        <div class="manufacturer__reviews">
                                            <div class="reviews">
                                                <div class="reviews__desc">
                                                    <div class="reviews__item">
                                                        <div class="reviews__item-value">
                                                            3.8
                                                        </div>
                                                        <svg class="reviews__item-star">
                                                            <use
                                                                xlink:href="../images/icons/icons-sprite.svg#star"></use>
                                                        </svg>
                                                    </div>
                                                    <div class="reviews__count">
                                                        5
                                                        отзыва
                                                    </div>
                                                </div>
                                                <div data-id="7" class="reviews__button button">
                                                    Посмотреть отзывы
                                                </div>
                                            </div>
                                        </div>
                                        --}}
                                    </div>
                                </div>
                                <div class="factory__attachments" >
                                    @foreach($factory->attachments as $attachment)
                                        <img class="factory__attachments-photo" src="../storage/factories_attachments/{{$attachment->path}}">
                                    @endforeach
                                </div>
                                {{--
                                <div class="tender-row tender-row--offer tender-row--header">
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
                                    <div class="tender-row__item tender-row__item--center">
                                        Комментарий
                                        поставщика
                                    </div>
                                </div>
                                <div class="tender-row tender-row--offer">
                                    <div class="tender-row__item"
                                         data-product-img-slider="../storage/reviewProducts/23/01627841118.jpg,../storage/reviewProducts/23/11627841118.jpg,../storage/reviewProducts/23/21627841118.jpg,../storage/reviewProducts/23/31627841118.jpg,../storage/reviewProducts/23/41627841118.jpg,../storage/reviewProducts/23/51627841118.jpg,../storage/reviewProducts/23/61627841118.jpg">
                                        <div class="tender-row__preview tender-row__preview--zoom">
                                            <div class="tender-row__preview-zoom-text">7
                                                фото
                                            </div>
                                            <img class="tender-row__preview-img"
                                                 src="../storage/reviewProducts/23/01627841118.jpg">
                                        </div>
                                    </div>

                                    <div class="tender-row__item tender-row__item--middle">Тестовое предложение от
                                        коннектора дистрибьютера
                                    </div>
                                    <div class="tender-row__item tender-row__item--big">100</div>
                                    <div class="tender-row__item tender-row__item--big">
                                        7301630 RUB (100000 USD)
                                    </div>
                                    <div class="tender-row__item tender-row__item--big">10</div>
                                    <div class="tender-row__item">
                                        <svg class="tender-row__item-icon tender-row__item-icon--check">
                                            <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                        </svg>
                                    </div>

                                    <div class="tender-row__item">
                                        <svg class="tender-row__item-icon tender-row__item-icon--check">
                                            <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                        </svg>
                                    </div>

                                    <div class="tender-row__item">
                                        <svg class="tender-row__item-icon tender-row__item-icon--check">
                                            <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                        </svg>
                                    </div>
                                    <div class="tender-row__item tender-row__item--left">Тестовое предложение от
                                        коннектора дистрибьютера
                                    </div>
                                </div>
                                --}}
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@stop
@section('f_script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let reviewModal = document.getElementById('user-reviews-list');
        let reviewModalTemplate = document.getElementById('user-review-template');
        document.querySelectorAll('.reviews__button').forEach(btn => {
            btn.addEventListener('click', e => {
                axios({
                    method: 'GET',
                    url: location.origin + '/user-review/get-rating/' + e.target.dataset.id,
                    headers: {
                        'Content-Type': 'application/json'
                    },
                }).then((response) => {
                    console.log(response.data)

                    let curTemplate = reviewModalTemplate.content;
                    let curContainer = reviewModal.querySelector('.modal__content-message')

                    response.data.forEach(data => {
                        curTemplate.querySelector('.modal__user-review__logo').dataset.name = data.from_user.name.substr(0, 1);
                        curTemplate.querySelector('.modal__user-review__title > .modal__user-review__title-name').innerHTML = data.from_user.name;
                        curTemplate.querySelector('.modal__user-review__options > .modal__user-review__option > .modal__user-review__option-value').innerHTML = data.comment

                        let stars = curTemplate.querySelectorAll('.modal__user-review__title > .rate > label');
                        stars.forEach(star => {
                            star.classList.remove('rate__star-checked')
                        })
                        for (i = 0; i < parseInt(data.grade); i++) {

                            stars[4 - i].classList.add('rate__star-checked')
                        }

                        let remplateClone = document.importNode(reviewModalTemplate.content, true);
                        curContainer.appendChild(remplateClone);
                    })
                    modals.open('user-reviews-list')
                })
            })

        })

    </script>

@stop
