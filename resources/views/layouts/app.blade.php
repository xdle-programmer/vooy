<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('main.css') }}">

    <!-- Scripts -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://d3js.org/d3.v4.min.js">
    </script>
    {{--<script type="text/javascript" src="{{ asset('main.js') }}"></script>--}}
    @yield('h_script')


</head>
<body class="font-sans antialiased">

<!-- HEADER -->
<header class="header">
    <div class="header__main-wrapper">
        {{--
        <div class="header__main-block layout">
            <a class="header__logo" href="{{route('home')}}">
                <div class="logo"><img class="logo__img" src="../images/icons/logo.svg" alt="Логотип Vooy">
                    <div class="logo__line"></div>
                    <div class="logo__text">Товары оптом</div>
                </div>
            </a>
            <div class="header__catalog">
                <a href="/products" class="header__catalog-button">
                    <div class="header__catalog-button-text">Каталог</div>
                    <svg class="header__catalog-button-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#menu"></use>
                    </svg>
                </a>
            </div>
            <div class="header__search-box-wrapper">
                <div class="header__search-box"></div>
                <div class="header__search-select">
                    <select class="search-select">
                        <option value="0" selected="">Все категории</option>
                        <option value="1">Мужская одежда</option>
                        <option value="2">Женская одежда</option>
                        <option value="3">Детская одежда</option>
                        <option value="4">Аксессуары</option>
                        <option value="5">Мониторы</option>
                        <option value="6">Компы</option>
                        <option value="7">Ноуты</option>
                        <option value="8">Телефоны</option>
                    </select>
                </div>
            </div>
            <div class="header__controls">
                <a class="header__control" href="/_favorites-products.html">
                    <svg class="header__control-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#heart"></use>
                    </svg>
                    <div class="header__control-text">Избранное</div>
                </a>
                <a class="header__control" href="/_basket.html">
                    <svg class="header__control-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                    </svg>
                    <div class="header__control-text">Мой тендер</div>
                </a>
            </div>
            @if (Route::has('login'))
                @auth
                    <a class="header__control" href="/account">
                        <div class="header__control-text">{{ Auth::user()->email}}</div>
                    </a>

                    <div class="header__control">

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                             onclick="event.preventDefault();
                              this.closest('form').submit();">
                                <div class="header__control-text">Выйти</div>
                            </x-dropdown-link>
                        </form>
                    </div>
                @else
                    <div class="header__control" data-modal-open="login">
                        <div class="header__control-text">Войти</div>
                    </div>
                    @if (Route::has('register'))
                        <div class="header__control" data-modal-open="register">
                            <div class="header__control-text">Регистрация</div>
                        </div>
                    @endif
                @endauth
            @endif
        </div>--}}

        <div class="header__main-block layout-m">
            <a class="header__logo" href="{{route('home')}}">
                <div class="logo"><img class="logo__img" src="../images/icons/logo.svg" alt="Логотип Vooy">
                    <div class="logo__line"></div>
                    <div class="logo__text">Товары оптом</div>
                </div>
            </a>

            <div class="header__catalog">
                <a href="/products" class="header__catalog-button">
                    <div class="header__catalog-button-text">Каталог</div>
                    <svg class="header__catalog-button-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#menu"></use>
                    </svg>
                </a>
            </div>

            <div class="header__search-box-wrapper">
                <div class="header__search-box"></div>
                <div class="header__search-select">
                    <select class="search-select">
                        <option value="0" selected="">Все категории</option>
                        <option value="1">Мужская одежда</option>
                        <option value="2">Женская одежда</option>
                        <option value="3">Детская одежда</option>
                        <option value="4">Аксессуары</option>
                        <option value="5">Мониторы</option>
                        <option value="6">Компы</option>
                        <option value="7">Ноуты</option>
                        <option value="8">Телефоны</option>
                    </select>
                </div>
            </div>

            <div class="header__menu">
                <a id="mobile-navbar-btn" class="header__menu-button">
                    <svg class="header__catalog-button-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#menu"></use>
                    </svg>
                </a>
            </div>

            <div class="header__controls">
                <a class="header__control" href="/_favorites-products.html">
                    <svg class="header__control-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#heart"></use>
                    </svg>
                    <div class="header__control-text">Избранное</div>
                </a>
                <a class="header__control" href="/_basket.html">
                    <svg class="header__control-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                    </svg>
                    <div class="header__control-text">Мой тендер</div>
                </a>

                @if (Route::has('login'))
                    @auth
                        <a class="header__control" href="/account">
                            <div class="header__control-text">{{ Auth::user()->email}}</div>
                        </a>

                        <div class="header__control">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                              this.closest('form').submit();">
                                    <div class="header__control-text">Выйти</div>
                                </x-dropdown-link>
                            </form>
                        </div>
                    @else
                        <div class="header__control" data-modal-open="login">
                            <div class="header__control-text">Войти</div>
                        </div>
                        @if (Route::has('register'))
                            <div class="header__control" data-modal-open="register">
                                <div class="header__control-text">Регистрация</div>
                            </div>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </div>

    <div class="header__natural-wrapper">
        <div class="header__natural-block layout-m">
            <div class="header__natural-controls-mini">
                @if (Route::has('login'))
                    @auth
                        <a class="header__natural-link" href="/account">
                            {{ Auth::user()->email}}
                        </a>

                        <div class="header__natural-link">

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                              this.closest('form').submit();">
                                    Выйти
                                </x-dropdown-link>
                            </form>
                        </div>
                    @else
                        <div class="header__natural-link" data-modal-open="login">
                            Войти
                        </div>
                        @if (Route::has('register'))
                            <div class="header__natural-link" data-modal-open="register">
                                Регистрация
                            </div>
                        @endif
                    @endauth
                @endif
                <a class="header__natural-link" href="/_favorites-products.html">
                    Избранное
                </a>
                <a class="header__natural-link" href="/_basket.html">
                    Мой тендер
                </a>
                <a href="/products" class="header__natural-link">
                    Каталог товаров
                </a>
            </div>
            <div class="header__natural-links">
                <a class="header__natural-link" href="#">Как заказать?</a>
                <a class="header__natural-link
                    @if (\Request::route()->getName() == 'tenders-list')
                    header__natural-link-active
                    @endif"
                   href="{{route('tenders-list')}}">Тендеры</a>
                <a class="header__natural-link
                    @if (\Request::route()->getName() == 'manufacturer-list')
                    header__natural-link-active
                    @endif" href="/manufacturer-list">Поставщики</a>

                @auth
                    <div id="createTenderHeaderBtn" data-auth="true"
                         class="header__natural-link header__natural-link--blue"
                    >Тендер на свой товар
                    </div>
                @endauth
                @guest
                    <div id="createTenderHeaderBtn" data-auth="false"
                         class="header__natural-link header__natural-link--blue"
                    >Тендер на свой товар
                    </div>
                @endguest

            </div>
            <div class="header__natural-phone">
                <svg class="header__natural-phone-icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#phone"></use>
                </svg>
                <div class="header__natural-phone-text">8-800-77-77-777</div>
            </div>
        </div>
    </div>

</header>

<!-- Page Content -->
{{--
<div style="display: none">--}}
@yield('content')
{{--
</div>--}}
{{--
<div style="width: 100%; height: 2000px; background: #3FB8AF">

</div>--}}


<!-- MODAL -->
<div class="modal" id="login">
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="modal__content form-check">
            <div class="modal__header">
                <div class="modal__header-title">Вход</div>
                <div class="modal__header-close" data-modal-close>
                    <svg class="modal__header-close-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                    </svg>
                </div>
            </div>
            <!-- Session Status
                                                  <x-auth-session-status class="mb-4" :status="session('status')" />-->

            <!-- Validation Errors
                                                  <x-auth-validation-errors class="mb-4" :errors="$errors" />-->

            @if ($errors->has('failed') || $errors->has('email'))
                <div class="modal__error">
                    <div class="modal__error-item">
                        Неправильная почта или пароль
                    </div>
                </div>

                <script>
                    document.addEventListener("DOMContentLoaded", () => {
                        modals.open('login');
                    });
                </script>
            @endif

            <div class="modal__content-items">
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <x-input placeholder="Почта" id="login-email" class="input placeholder__input" type="text"
                                 name="email" :value="old('email')" required autofocus/>
                        <div class="placeholder__item">Почта</div>
                    </div>
                </div>

                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <x-input id="login-password" class="input placeholder__input" placeholder="Пароль"
                                 type="password" name="password" required autocomplete="current-password"/>

                        <div class="placeholder__item">Пароль</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <a href="{{ route('password.request') }}">
                        <div class="modal__link">
                            Не помню пароль
                        </div>
                    </a>
                </div>
                <div id="login-hint" style="display: none;" class="modal__content-item">
                    <div class="hint">
                        <svg class="hint__icon">
                            <use xlink:href="../images/icons/icons-sprite.svg#exclamation"></use>
                        </svg>
                        <div id="login-hint-text" class="hint__text">Этот телефон уже используется на другом
                            аккаунте
                        </div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="modal__two-buttons">
                        <div data-modal-open="register" id="login-to-register-btn"
                             class="modal__button button button--invert">
                            Зарегистрироваться
                        </div>
                        <x-button class="modal__button button button--invert form-check__button">Войти</x-button>
                    </div>
                </div>
            </div>


            <div class="modal__footer">
                <div class="modal__link">Политика конфиденцальности</div>
            </div>
        </div>
    </form>
</div>
<div class="modal" id="register">
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="modal__content form-check">
            <div class="modal__header">
                <div class="modal__header-title">Регистрация</div>
                <div class="modal__header-close" data-modal-close>
                    <svg class="modal__header-close-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                    </svg>
                </div>
            </div>

            <input type="hidden" name="email" value="testmail@mai.com"/>
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>

            <div class="modal__content-items">
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input name="name" required class="input placeholder__input" placeholder="Имя">
                        <div for="name" class="placeholder__item">Имя</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input name="email" required class="input placeholder__input" placeholder="Почта">
                        <div for="email" class="placeholder__item">Почта</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input name="phone" required class="input placeholder__input" placeholder="Телефон">
                        <div for="phone" class="placeholder__item">Телефон</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input name="password" required type="password" class="input placeholder__input"
                               placeholder="Пароль">
                        <div for="password" class="placeholder__item">Пароль</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input class="input placeholder__input" placeholder="Реферальный код">
                        <div name="referal" class="placeholder__item">Реферальный код</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <label class="checkbox">
                        <input class="checkbox__input" type="checkbox"><span class="checkbox__item">
                        <svg class="checkbox__icon">
                          <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                        </svg><span class="checkbox__text">Я согласен на обработку Персональных данных</span></span>
                    </label>
                </div>
                <div style="display: none;" class="modal__content-item">
                    <div class="hint">
                        <svg class="hint__icon">
                            <use xlink:href="../images/icons/icons-sprite.svg#exclamation"></use>
                        </svg>
                        <div class="hint__text">Этот телефон уже используется на другом аккаунте</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <button class="modal__button button button--invert form-check__button">Зарегистрироваться</button>
                </div>
            </div>
            <div class="modal__footer">
                <div class="modal__link">Политика конфиденцальности</div>
            </div>
        </div>
    </form>
</div>
<div class="modal" id="register-manufacturer">
    <form method="POST" action="{{ route('register-provider') }}">
        @csrf
        <div class="modal__content form-check">
            <div class="modal__header">
                <div class="modal__header-title">Регистрация поставщика</div>
                <div class="modal__header-close" data-modal-close>
                    <svg class="modal__header-close-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                    </svg>
                </div>
            </div>
            <div class="modal__content-items">
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input class="input placeholder__input" name="name" placeholder="Имя">
                        <div class="placeholder__item">Имя</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input class="input placeholder__input" name="company" placeholder="Название компании">
                        <div class="placeholder__item">Название компании</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input class="input placeholder__input" name="email" placeholder="Почта">
                        <div class="placeholder__item">Почта</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input class="input placeholder__input" name="phone" placeholder="Телефон">
                        <div class="placeholder__item">Телефон</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input required type="password" class="input placeholder__input" name="password"
                               placeholder="Пароль">
                        <div class="placeholder__item">Пароль</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="modal__content-item-checkbox-group">
                        <div class="modal__content-item-checkbox-group-title">Выберите, какие услуги вы можете
                            оказывать
                        </div>
                        <div class="modal__content-item-checkbox-group-items">
                            @php
                                $services = App\Models\ProviderService::all();
                            @endphp
                            @foreach ($services as $key => $service)
                                <div class="modal__content-item-checkbox-group-item">
                                    <label class="checkbox">
                                        <input id="service-{{$service->id}}" onchange="providerServiceCheck(this)"
                                               name="service[{{$service->id}}]" class="checkbox__input" type="checkbox"><span
                                            class="checkbox__item">
                              <svg class="checkbox__icon">
                                <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                              </svg><span class="checkbox__text">{{$service->name}}</span></span>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="modal__content-item-checkbox-group">
                        <div class="modal__content-item-checkbox-group-items">
                            <div class="modal__content-item-checkbox-group-item">
                                <label class="checkbox">
                                    <input onchange="providerServiceCheck(this)" id="service-ru" name="can_RLE"
                                           class="checkbox__input" type="checkbox"><span
                                        class="checkbox__item">
                            <svg class="checkbox__icon">
                              <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                            </svg><span class="checkbox__text">Есть российское юр. лицо</span></span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                        <input name="referal" class="input placeholder__input" placeholder="Реферальный код">
                        <div class="placeholder__item">Реферальный код</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <label class="checkbox">
                        <input class="checkbox__input" type="checkbox"><span class="checkbox__item">
                      <svg class="checkbox__icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                      </svg><span class="checkbox__text">Я согласен на обработку Персональных данных</span></span>
                    </label>
                </div>
                <div style="display: none;" class="modal__content-item">
                    <div class="hint">
                        <svg class="hint__icon">
                            <use xlink:href="../images/icons/icons-sprite.svg#exclamation"></use>
                        </svg>
                        <div class="hint__text">Этот телефон уже используется на другом аккаунте</div>
                    </div>
                </div>
                <div class="modal__content-item">
                    <button class="modal__button button button--invert form-check__button">Зарегистрироваться</button>
                </div>
            </div>
            <div class="modal__footer">
                <div class="modal__link">Политика конфиденцальности</div>
            </div>
        </div>
    </form>
</div>
<div class="modal" id="check-phone">
    <div class="modal__content form-check">
        <div class="modal__header">
            <div class="modal__header-title">Подтвердить телефон</div>
            <div class="modal__header-close" data-modal-close>
                <svg class="modal__header-close-icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                </svg>
            </div>
        </div>
        <div class="modal__content-items">
            <div class="modal__content-item">
                <div class="modal__content-item-subtitle">Мы отправили на номер +79051234567 код для подтверждения,
                    введите его в поле ниже.
                </div>
                <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                    <input class="input placeholder__input" placeholder="Код подтвреждения*">
                    <div class="placeholder__item">Код подтвреждения*</div>
                </div>
            </div>
            <div class="modal__content-item">
                <div class="hint">
                    <svg class="hint__icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#exclamation"></use>
                    </svg>
                    <div class="hint__text">Неправильный код</div>
                </div>
            </div>
            <div class="modal__content-item">
                <div class="modal__button button button--invert form-check__button">Подтвердить</div>
            </div>
        </div>
        <div class="modal__footer">
            <div class="modal__link">Политика конфиденцальности</div>
        </div>
    </div>
</div>
<div class="modal" id="product-img-slider-modal">
    <div class="modal__content">
        <div class="modal__close" data-modal-close>
            <svg class="modal__close-icon">
                <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
            </svg>
        </div>
        <div class="product-img-slider">
            <svg class="product-img-slider__button product-img-slider__button--prev">
                <use xlink:href="../images/icons/icons-sprite.svg#arrow"></use>
            </svg>
            <div class="product-img-slider__items">
                <div class="product-img-slider__item"></div>
            </div>
            <svg class="product-img-slider__button product-img-slider__button--next">
                <use xlink:href="../images/icons/icons-sprite.svg#arrow"></use>
            </svg>
        </div>
    </div>
</div>
<div class="modal modal--wide" id="new-tender">
    <div class="modal__content form-check">
        <div class="modal__header">
            <div class="modal__header-title">Заявка на товар</div>
            <div class="modal__header-close" data-modal-close>
                <svg class="modal__header-close-icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                </svg>
            </div>
        </div>
        <div class="modal__content-items modal__content-items--two-col">
            <div class="modal__content-item">
                <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                    <input class="input placeholder__input" placeholder="Ваше имя">
                    <div class="placeholder__item">Ваше имя</div>
                </div>
            </div>
            <div class="modal__content-item">
                <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                    <input class="input placeholder__input" placeholder="Номер телефона">
                    <div class="placeholder__item">Номер телефона</div>
                </div>
            </div>
        </div>
        <div class="modal__content-section-title">Информация о товаре</div>
        <div class="modal__content-items modal__content-items--two-col">
            <div class="modal__content-item">
                <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                    <input class="input placeholder__input" placeholder="Наименование товара">
                    <div class="placeholder__item">Наименование товара</div>
                </div>
            </div>
            <div class="modal__content-item">
                <div class="modal__content-counter">
                    <div class="modal__content-counter-title">Количество</div>
                    <div class="counter">
                        <div class="counter__button counter__button--minus">
                            <svg class="counter__button-icon">
                                <use xlink:href="../images/icons/icons-sprite.svg#minus"></use>
                            </svg>
                        </div>
                        <input class="counter__input" value="100">
                        <div class="counter__button counter__button--plus">
                            <svg class="counter__button-icon">
                                <use xlink:href="../images/icons/icons-sprite.svg#plus"></use>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal__content-items modal__content-items--two-col">
            <div class="modal__content-item">
                <div class="photo-upload">
                    <div class="photo-upload__items">
                        <div class="photo-upload__preview-wrapper" data-upload-preview>
                            <div class="photo-upload__preview-item"><img class="photo-upload__preview"
                                                                         src="../images/examples/products-preview/products-preview-1.jpg">
                            </div>
                        </div>
                        <div class="photo-upload__preview-wrapper" data-upload-preview>
                            <div class="photo-upload__preview-item"><img class="photo-upload__preview"
                                                                         src="../images/examples/products-preview/products-preview-0.jpg">
                            </div>
                        </div>
                        <label class="photo-upload__label-wrapper">
                            <div class="photo-upload__label">
                                <div class="photo-upload__input-icon-wrapper">
                                    <svg class="photo-upload__input-icon">
                                        <use xlink:href="../images/icons/icons-sprite.svg#upload"></use>
                                    </svg>
                                </div>
                                <div class="photo-upload__input-text">Загрузите фото</div>
                                <input class="photo-upload__input" type="file" multiple accept="image/*">
                            </div>
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal__content-items modal__content-items--two-col modal__content-items--bottom">
            <div class="modal__content-item">
                <div class="placeholder form-check__field" data-elem="textarea" data-rule="input-empty">
                    <textarea class="input input--textarea placeholder__input" placeholder="Ваш комментарий"></textarea>
                    <div class="placeholder__item">Ваш комментарий</div>
                </div>
            </div>
            <div class="modal__content-item">
                <div class="modal__content-item-captcha">
                    <div class="captcha"><img class="captcha__img" src="../images/examples/captcha/captcha.jpg"></div>
                </div>
                <div class="modal__content-item-hint">
                    <div class="hint hint--inner">
                        <svg class="hint__icon">
                            <use xlink:href="../images/icons/icons-sprite.svg#exclamation"></use>
                        </svg>
                        <div class="hint__text">Стоимость минимального заказа 500$</div>
                    </div>
                </div>
                <div class="modal__button button button--invert form-check__button">Отправить заявку</div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="new-tender-success">
    <div class="modal__content">
        <div class="modal__close" data-modal-close>
            <svg class="modal__close-icon">
                <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
            </svg>
        </div>
        <div class="modal__content-message">
            <svg class="modal__content-message-icon">
                <use xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
            </svg>
            <div class="modal__content-message-text">Ваш тендер успешно опубликован!</div>
            <div class="modal__content-message-two-buttons">
                <div data-modal-close onclick="window.location = window.location"
                     class="button button--small button--invert">ЗАКРЫТЬ
                </div>
                <a class="button button--small" href="{{route('tenders-list')}}">В ТЕНДЕРЫ</a>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="new-review-success">
    <div class="modal__content">
        <div class="modal__content-message">
            <svg class="modal__content-message-icon">
                {{--<use xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>--}}
            </svg>
            <div class="modal__content-message-text">Ваш ответ на тендер успешно отправлен!</div>
            <div class="modal__content-message-two-buttons">
                <div onclick="window.location = window.location" class="button button--small">ОК</div>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="tender-copied">
    <div class="modal__content">
        <div class="modal__close" data-modal-close>
            <svg class="modal__close-icon">
                <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
            </svg>
        </div>
        <div class="modal__content-message">
            <svg class="modal__content-message-icon">
                <use xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
            </svg>
            <div class="modal__content-message-text">Тендер успешно скопирован</div>
            <div class="modal__content-message-one-button">
                <div class="button button--small">Ок</div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="changes-saved">
    <div class="modal__content">
        <div class="modal__close" data-modal-close>
            <svg class="modal__close-icon">
                <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
            </svg>
        </div>
        <div class="modal__content-message">
            <svg class="modal__content-message-icon">
                <use xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
            </svg>
            <div class="modal__content-message-text">Изменения успешно сохранены</div>
            <div class="modal__content-message-one-button">
                <div class="button button--small">Ок</div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="winner-question">
    <div class="modal__content">
        <div class="modal__close" data-modal-close>
            <svg class="modal__close-icon">
                <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
            </svg>
        </div>
        <div class="modal__content-message">
            <svg class="modal__content-message-icon">
                <use xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>
            </svg>
            <div class="modal__content-message-text">Выбрать победителем
                <div class="modal__content-message-text-inner">Название поставщика?</div>
            </div>
            <div class="modal__content-message-two-buttons">
                <div class="button button--small button--invert">Отмена</div>
                <div class="button button--small">Да, выбрать победителем</div>
            </div>
        </div>
    </div>
</div>

<div class="modal modal--wide" id="file-product-creation">
    <div class="modal__content form-check">
        <div class="modal__header">
            <div class="modal__header-title">Загрузить товары?</div>
            <div class="modal__header-close" data-modal-close="">
                <svg class="modal__header-close-icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                </svg>
            </div>
        </div>

        <div class="product-in-file product-in-file--editable form-check">

            <div class="product-in-file__wrapper">
                <div class="product-in-file__items" id="file-products-wrapper">
                    <template id="file-product-prices-template">
                        <div class="form__copy-item">
                            <div class="form__item-group-items">
                                <div class="form__item-group-item">
                                    <div class="placeholder form-check__field placeholder--empty" data-elem="input" data-rule="input-empty">
                                        <input name="min" class="input placeholder__input check-progress__input input-min-count" placeholder="Минимум">
                                        <div class="placeholder__item">Минимальный заказ</div>
                                        <div class="form-check__error">Обязательное поле</div></div>
                                </div>
                                <div class="form__item-group-item">
                                    <div class="placeholder form-check__field placeholder--empty" data-elem="input" data-rule="input-empty">
                                        <input name="max" class="input placeholder__input check-progress__input input-max-count" placeholder="Максимум">
                                        <div class="placeholder__item">Минимальный заказ</div>
                                        <div class="form-check__error">Обязательное поле</div></div>
                                </div>
                                <div class="form__item-group-item">
                                    <div class="placeholder form-check__field placeholder--empty" data-elem="input" data-rule="input-empty">
                                        <input name="price" class="input placeholder__input check-progress__input input-price" placeholder="Стоимость">
                                        <div class="placeholder__item">Стоимость</div>
                                        <div class="form-check__error">Обязательное поле</div></div>
                                </div>
                            </div>
                        </div>
                    </template>
                    <template id="file-product-template">
                        <div class="product-in-file__item">

                            <div class="product-in-file__item-header">
                                <div class="product-in-file__item-header-title">
                                    <div class="product-in-file__item-header-title-name">Товар</div>
                                    <div class="product-in-file__item-header-title-number">1</div>
                                </div>
                            </div>

                            <div class="product-in-file__item-input-images">
                                <div class="photo-upload">
                                    <div class="photo-upload__items">
                                        <label class="photo-upload__label-wrapper">
                                            <div class="photo-upload__label">
                                                <div class="photo-upload__input-icon-wrapper">
                                                    <svg class="photo-upload__input-icon">
                                                        <use xlink:href="../images/icons/icons-sprite.svg#upload"></use>
                                                    </svg>
                                                </div>
                                                <div class="photo-upload__input-text">Загрузите фото</div>
                                                <input class="photo-upload__input" type="file" multiple="" accept="image/*">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>



                            <div class="product-in-file__item-inputs">
                                <div class="product-in-file__item-inputs-collumn ">
                                    <div class="product-in-file__item-input-name">
                                        <div class="placeholder form-check__field placeholder--empty" data-elem="input" data-rule="input-empty">
                                            <input class="input placeholder__input" placeholder="Наименование товара">
                                            <div class="placeholder__item">Наименование товара</div>
                                            <div class="form-check__error">Обязательное поле</div><div class="form-check__error"></div><div class="form-check__error"></div></div>
                                    </div>
                                    <div class="product-in-file__item-input-comment">
                                        <div class="placeholder form-check__field placeholder--empty" data-elem="textarea" data-rule="input-empty">
                                            <textarea class="input input--textarea placeholder__input" placeholder="Ваш комментарий"></textarea>
                                            <div class="placeholder__item">Ваш комментарий</div>
                                            <div class="form-check__error">Обязательное поле</div><div class="form-check__error"></div><div class="form-check__error"></div></div>
                                    </div>
                                    <div class="product-in-file__item-input-time">
                                        <div class="placeholder form-check__field placeholder--empty" data-elem="input" data-rule="input-empty">
                                            <input type="number" class="input placeholder__input" placeholder="Время изготовления">
                                            <div class="placeholder__item">Время изготовления</div>
                                            <div class="form-check__error">Обязательное поле</div><div class="form-check__error"></div><div class="form-check__error"></div></div>
                                    </div>
                                </div>

                                <div class="product-in-file__item-input-count">
                                    <div class="form__item-group">
                                        <div class="form__copy-wrapper">

                                            <div class="form__copy-items">

                                            </div>

                                        </div>

                                    </div>
                                </div>


                            </div>

                        </div>
                    </template>

                </div>
            </div>


            <div class="product-in-file__footer">
                <div id="product-in-file-btn" class="button form-check__button">
                    Опубликовать товары
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="user-reviews-list">
    <div class="modal__content">
        <div class="modal__header">
            <div class="modal__header-title">Отзывы</div>
            <div class="modal__header-close" data-modal-close="user-reviews-list">
                <svg class="modal__header-close-icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                </svg>
            </div>
        </div>
        <template id="user-review-template">
            <div class="offer__header">
                <div class="modal__user-review ">
                    <div class="modal__user-review__logo" data-name="Т"></div>
                    <div class="modal__user-review__title">
                        <div class="modal__user-review__title-name">Тестовый пользователь</div>
                        <div class="rate rate-unclicked">
                            <label title="text">5 stars</label>
                            <label title="text">4 stars</label>
                            <label title="text">3 stars</label>
                            <label title="text">2 stars</label>
                            <label title="text">1 star</label>
                        </div>
                    </div>
                    <div class="modal__user-review__options">
                        <div class="modal__user-review__option">
                            <div class="modal__user-review__option-name">
                                Сообщение:
                            </div>
                            <div class="modal__user-review__option-value"> Сообщение Сообщен иеСо
                                общениеС ообщениеСообщен иеСообщениеС ообщениеСообщениеСообщ
                                ениеСообщениеСообще ниеСообщениеСо общениеСообщен иеСообщениеСообще
                                ниеСообщениеСооб щениеСооб щениеСообщениеСоо бщениеСообщениеСообщени
                                еСообщениеСообще
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </template>

        <div class="modal__content-rating">
            <div class="modal__content-message">

            </div>
        </div>
    </div>
</div>
<div class="modal" id="winner-success">
    <div class="modal__content">
        <div class="modal__content-message">
            <svg class="modal__content-message-icon">
                {{--<use xlink:href="../images/icons/icons-sprite.svg#check-circle"></use>--}}
            </svg>
            <div class="modal__content-message-text">Вы выбрали победителем
                <div id="modal-winner-success-providerName" class="modal__content-message-text-inner">Название
                    поставщика
                </div>
            </div>
            <div class="modal__content-message-one-button">
                <div onclick="window.location = window.location" class="button button--small">Ок</div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal--wide" id="new-offer-tender-products">
    <div class="modal__content form-check">
        <div class="modal__header">
            <div class="modal__header-title">Предложение на тендер</div>
            <div class="modal__header-close" data-modal-close>
                <svg class="modal__header-close-icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                </svg>
            </div>
        </div>

        <div class="product-in-tender form-check" id="new-offer-tender-products-form">
            <div class="tender-row tender-row--product tender-row--header tender-row--product tender-row--product-min">
                <div class="tender-row__item">Фото</div>
                <div class="tender-row__item">Наименование</div>
                <div class="tender-row__item">Количество</div>
                <div class="tender-row__item">Необходим образец</div>
                <div class="tender-row__item">Брэндинг</div>
                <div class="tender-row__item">Упаковка</div>
                <div class="tender-row__item">Сертификаты</div>
                <div class="tender-row__item tender-row__item--center">Комментарий</div>
            </div>

            <template id="custom-select-review-currency-template">
                <select class="custom-select placeholder__select">
                    @foreach(App\Models\Currency::where('is_active', 1)->get() as $currency)
                        <option value="{{$currency->id}}">{{$currency->name}}</option>
                    @endforeach
                </select>
            </template>

            <div class="product-in-tender__wrapper product-in-tender__wrapper-min">
                <div id="tender-offer-items" class="product-in-tender__items">

                    <div id="tender-offer-item-template" class="product-in-tender__item">
                        <div class="product-in-tender__item-inputs product-in-tender__item-inputs--offer">
                            <div class="product-in-tender__item-input-name">
                                <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                                    <input class="input placeholder__input" placeholder="Наименование товара">
                                    <div class="placeholder__item">Наименование товара</div>
                                </div>
                            </div>
                            <div class="product-in-tender__item-input-comment">
                                <div class="placeholder form-check__field" data-elem="textarea" data-rule="input-empty">
                                    <textarea class="input input--textarea placeholder__input"
                                              placeholder="Ваш комментарий"></textarea>
                                    <div class="placeholder__item">Ваш комментарий</div>
                                </div>
                            </div>
                            <div class="product-in-tender__item-input-count product-in-tender__item-input-count--offer">
                                <div class="product-in-tender__item-input-count-title">Количество</div>
                                <div class="product-in-tender__item-input-count-item">
                                    <div class="counter">
                                        <div class="counter__button counter__button--minus">
                                            <svg class="counter__button-icon">
                                                <use xlink:href="../images/icons/icons-sprite.svg#minus"></use>
                                            </svg>
                                        </div>
                                        <input class="counter__input" value="100">
                                        <div class="counter__button counter__button--plus">
                                            <svg class="counter__button-icon">
                                                <use xlink:href="../images/icons/icons-sprite.svg#plus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="product-in-tender__item-input-count product-in-tender__item-input-count--offer product-in-tender__item-input-count--term">
                                <div class="product-in-tender__item-input-count-title">Срок реализации</div>
                                <div class="product-in-tender__item-input-count-item">
                                    <div class="counter">
                                        <div class="counter__button counter__button--minus">
                                            <svg class="counter__button-icon">
                                                <use xlink:href="../images/icons/icons-sprite.svg#minus"></use>
                                            </svg>
                                        </div>
                                        <input class="counter__input" value="10">
                                        <div class="counter__button counter__button--plus">
                                            <svg class="counter__button-icon">
                                                <use xlink:href="../images/icons/icons-sprite.svg#plus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-in-tender__item-input-example">
                                <div class="product-in-tender__item-input-example-checkbox"></div>
                                <label class="checkbox">
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__item">
                        <svg class="checkbox__icon">
                          <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                        </svg><span class="checkbox__text">Предоставим образец</span></span>
                                </label>
                                {{--
                                <div class="product-in-tender__item-input-example-tooltip"></div>
                                <div class="tooltip">
                                    <svg class="tooltip__button">
                                        <use xlink:href="../images/icons/icons-sprite.svg#exclamation"></use>
                                    </svg>
                                    <div class="tooltip__inner">
                                        <svg class="tooltip__close">
                                            <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                        </svg>
                                        <div class="tooltip__content">Поставьте галочку, если перед заказом вы готовы
                                            предоставить тестовый образец
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                            <div class="product-in-tender__item-input-branding">
                                <div class="product-in-tender__item-input-example-checkbox"></div>
                                <label class="checkbox">
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__item">
                        <svg class="checkbox__icon">
                          <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                        </svg><span class="checkbox__text">Брэндинг</span></span>
                                </label>
                                {{--
                                <div class="product-in-tender__item-input-example-tooltip"></div>
                                <div class="tooltip">
                                    <svg class="tooltip__button">
                                        <use xlink:href="../images/icons/icons-sprite.svg#exclamation"></use>
                                    </svg>
                                    <div class="tooltip__inner">
                                        <svg class="tooltip__close">
                                            <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                        </svg>
                                        <div class="tooltip__content">
                                        </div>
                                    </div>
                                </div>--}}
                            </div>
                            <div class="product-in-tender__item-input-packing">
                                <div class="product-in-tender__item-input-example-checkbox"></div>
                                <label class="checkbox">
                                    <input class="checkbox__input" type="checkbox"><span class="checkbox__item">
                        <svg class="checkbox__icon">
                          <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                        </svg><span class="checkbox__text">Упаковка</span></span>
                                </label>
                                {{--
                                <div class="product-in-tender__item-input-example-tooltip"></div>
                                <div class="tooltip">
                                    <svg class="tooltip__button">
                                        <use xlink:href="../images/icons/icons-sprite.svg#exclamation"></use>
                                    </svg>
                                    <div class="tooltip__inner">
                                        <svg class="tooltip__close">
                                            <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                        </svg>
                                        <div class="tooltip__content">Поставьте галочку, если вы готовы
                                            предоставить упаковку
                                        </div>
                                    </div>
                                </div>--}}
                            </div>

                            <div class="product-in-tender__item-input-images">
                                <div class="photo-upload">
                                    <div class="photo-upload__items">
                                        <label class="photo-upload__label-wrapper">
                                            <div class="photo-upload__label">
                                                <div class="photo-upload__input-icon-wrapper">
                                                    <svg class="photo-upload__input-icon">
                                                        <use xlink:href="../images/icons/icons-sprite.svg#upload"></use>
                                                    </svg>
                                                </div>
                                                <div class="photo-upload__input-text">Загрузите фото</div>
                                                <input class="photo-upload__input" type="file" multiple
                                                       accept="image/*">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="product-in-tender__item-input-name product-in-tender__item-input-name--price">
                                <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                                    <input class="input placeholder__input" placeholder="Стоимость">
                                    <div class="placeholder__item">Стоимость</div>
                                </div>

                                {{--
                                <select class="select">
                                    @foreach(App\Models\Currency::where('is_active', 1)->get() as $currency)
                                        <option value="{{$currency->id}}">{{$currency->name}}</option>
                                    @endforeach
                                </select>--}}
                            </div>

                            @if(Auth::user())
                                @php
                                    $bothProvider = false;
                                    if (Auth::user() != null) {
                                        $userChRole = Auth::user()->subroles()->where('provider_subroles.subrole_id','!=', 4)->first();
                                        $userRuRole = Auth::user()->subroles()->where('provider_subroles.subrole_id', 4)->first();
                                        if ($userChRole != null && $userRuRole != null)
                                             $bothProvider = true;
                                    }
                                @endphp
                                @if($bothProvider == true)
                                    <div class="product-in-tender__item-input-fromCountry">
                                        <p><input onclick="changeRadioFromCountry(this)" name="fromCountry" type="radio"
                                                  value="2"> Из Китая</p>
                                        <p><input onclick="changeRadioFromCountry(this)" name="fromCountry" type="radio"
                                                  value="1"> Из России</p>
                                    </div>
                                @endif
                            @endif
                            <div class="product-in-tender__item-input-doOffer">
                                <div class="button">Выбрать из существующих
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="product-in-tender__footer">
                <script>
                    function checkDisabledSendOfferButton(button) {
                        if (!button.classList.contains('form-check__button--disabled')) {
                            uploadReview()
                        }
                    }
                </script>

                <div id="review-upload-btn" onclick="checkDisabledSendOfferButton(this)"
                     class="button form-check__button">Сделать
                    предложение
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal--wide" id="new-tender-products">
    <div class="modal__content form-check">
        <div class="modal__header">
            <div class="modal__header-title">Новый тендер</div>
            <div class="modal__header-close" data-modal-close>
                <svg class="modal__header-close-icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                </svg>
            </div>
        </div>

        <div class="product-in-tender product-in-tender--editable form-check" id="new-products-form">
            <div class="product-in-tender__wrapper">
                <div class="product-in-tender__items" id="new-tender-products-list">

                    <div class="product-in-tender__item">

                        <div class="product-in-tender__item-header">
                            <div class="product-in-tender__item-header-title">
                                <div class="product-in-tender__item-header-title-name">Товар</div>
                                <div class="product-in-tender__item-header-title-number">1</div>
                            </div>
                            <div class="product-in-tender__item-header-delete">
                                <div class="product-in-tender__item-header-delete-text">Удалить</div>
                                <svg class="product-in-tender__item-header-delete-icon">
                                    <use xlink:href="../images/icons/icons-sprite.svg#delete"></use>
                                </svg>
                            </div>
                        </div>

                        <div class="product-in-tender__item-inputs">
                            <div class="product-in-tender__item-input-name">
                                <div class="placeholder form-check__field" data-elem="input" data-rule="input-empty">
                                    <input class="input placeholder__input" placeholder="Наименование товара">
                                    <div class="placeholder__item">Наименование товара</div>
                                </div>
                            </div>
                            <div class="product-in-tender__item-input-comment">
                                <div class="placeholder form-check__field" data-elem="textarea" data-rule="input-empty">
                                    <textarea class="input input--textarea placeholder__input"
                                              placeholder="Ваш комментарий"></textarea>
                                    <div class="placeholder__item">Ваш комментарий</div>
                                </div>
                            </div>
                            <div class="product-in-tender__item-input-count">
                                <div class="product-in-tender__item-input-count-title">Количество</div>
                                <div class="product-in-tender__item-input-count-item">
                                    <div class="counter">
                                        <div class="counter__button counter__button--minus">
                                            <svg class="counter__button-icon">
                                                <use xlink:href="../images/icons/icons-sprite.svg#minus"></use>
                                            </svg>
                                        </div>
                                        <input class="counter__input" value="100">
                                        <div class="counter__button counter__button--plus">
                                            <svg class="counter__button-icon">
                                                <use xlink:href="../images/icons/icons-sprite.svg#plus"></use>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-in-tender__item-input-example">
                                <div class="product-in-tender__item-input-example-checkbox"></div>
                                <label class="checkbox">
                                    <input class="checkbox__input" novalue="0" yesvalue="1" type="checkbox"><span
                                        class="checkbox__item">
                                  <svg class="checkbox__icon">
                                    <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                  </svg><span class="checkbox__text">Необходим образец</span></span>
                                </label>
                                <div class="product-in-tender__item-input-example-tooltip"></div>
                                <div class="tooltip">
                                    <svg class="tooltip__button">
                                        <use xlink:href="../images/icons/icons-sprite.svg#exclamation"></use>
                                    </svg>
                                    <div class="tooltip__inner">
                                        <svg class="tooltip__close">
                                            <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                                        </svg>
                                        <div class="tooltip__content">Поставьте галочку, если перед заказом вы требуете
                                            тестовый образец
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-in-tender__item-input-images">
                                <div class="photo-upload">
                                    <div class="photo-upload__items">
                                        <label class="photo-upload__label-wrapper">
                                            <div class="photo-upload__label">
                                                <div class="photo-upload__input-icon-wrapper">
                                                    <svg class="photo-upload__input-icon">
                                                        <use xlink:href="../images/icons/icons-sprite.svg#upload"></use>
                                                    </svg>
                                                </div>
                                                <div class="photo-upload__input-text">Загрузите фото</div>
                                                <input class="photo-upload__input" type="file" multiple
                                                       accept="image/*">
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                <div id="tender_add_product_btn" class="button button--invert product-in-tender__add-product">Добавить
                    товар
                </div>
            </div>
            <div class="product-in-tender__footer">
                <div class="g-recaptcha" data-callback="captchaCallback"
                     data-sitekey="6LdhzmMbAAAAAKurdp_jmE7bsuQK6bhLl-sMA8CA"></div>
                <div id="tender_upload_btn" onclick="uploadTender(this)" class="button form-check__button">Опубликовать
                    тендер
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FOOTER -->
<footer class="footer">
    <div class="layout-m footer__block">
        <div class="footer__top">
            <div class="footer__logo-wrapper">
                <div class="footer__logo">
                    <div class="logo"><img class="logo__img" src="../images/icons/logo.svg" alt="Логотип Vooy">
                        <div class="logo__line"></div>
                        <div class="logo__text">Товары оптом</div>
                    </div>
                </div>
            </div>
            <div class="footer__menu">
                <div class="footer__menu-col">
                    <div class="footer__menu-title">О компании</div>
                    <a class="footer__menu-link" href="#">Контакты</a><a class="footer__menu-link" href="#">Сотрудничество</a>
                </div>
                <div class="footer__menu-col">
                    <div class="footer__menu-title">Информация</div>
                    <a class="footer__menu-link" href="#">Оферта</a><a class="footer__menu-link" href="#">Карта
                        сайта</a><a class="footer__menu-link" href="#">Оплата</a>
                </div>
                <div class="footer__menu-col">
                    <div class="footer__menu-title">Помощь</div>
                    <a class="footer__menu-link" href="#">Как заказать?</a><a class="footer__menu-link" href="#">Гарантии</a><a
                        class="footer__menu-link" onclick="modals.open('register-manufacturer')">Стать поставщиком</a>
                </div>
                <div class="footer__menu-col">
                    <div class="footer__menu-title">Служба поддержки</div>
                    <a class="footer__menu-link" href="#">
                        <svg class="footer__menu-link-icon">
                            <use xlink:href="../images/icons/icons-sprite.svg#phone"></use>
                        </svg>
                        <div class="footer__menu-link-text">8-800-77-77-777</div>
                    </a><a class="footer__menu-link" href="#">
                        <svg class="footer__menu-link-icon">
                            <use xlink:href="../images/icons/icons-sprite.svg#mail"></use>
                        </svg>
                        <div class="footer__menu-link-text">info@gmail.com</div>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__copyright">© 2020—2021 компания Сайт ОПТ</div>
            <div class="footer__social">
                <div class="social"><a class="social__item" href="#">
                        <svg class="social__item-icon social__item-icon--vk">
                            <use xlink:href="../images/icons/icons-sprite.svg#vk"></use>
                        </svg>
                    </a><a class="social__item" href="#">
                        <svg class="social__item-icon social__item-icon--telegram">
                            <use xlink:href="../images/icons/icons-sprite.svg#telegram"></use>
                        </svg>
                    </a><a class="social__item" href="#">
                        <svg class="social__item-icon social__item-icon--fb">
                            <use xlink:href="../images/icons/icons-sprite.svg#fb"></use>
                        </svg>
                    </a></div>
            </div>
        </div>
    </div>
</footer>

<script src="{{ asset('main.js') }}"></script>
<script>

    let fromCountry = '0';

    function changeRadioFromCountry(e) {
        console.log('a');
        console.log(e.value);
        fromCountry = e.value;
    }


    let createTenderHeaderBtn = document.getElementById('createTenderHeaderBtn');
    createTenderHeaderBtn.addEventListener('click', (event) => {
        if (event.target.dataset.auth == "true") {
            modals.open('new-tender-products');
        } else {
            document.getElementById('login-hint').style.display = 'block';
            document.getElementById('login-hint-text').innerText = "Перед созданием тендера, войдите в систему.";
            modals.open('login');
        }
    });

    function providerServiceCheck(e) {
        if (e.id == 'service-2') {
            if (e.checked == true) {
                document.getElementById('service-1').checked = true;
                document.getElementById('service-1').setAttribute('onclick', 'return false;');
                document.getElementById('service-ru').checked = true;
                document.getElementById('service-ru').setAttribute('onclick', 'return false;');

            } else {
                document.getElementById('service-1').removeAttribute('onclick');
                document.getElementById('service-ru').removeAttribute('onclick');
            }
        }
        if (e.id == 'service-3') {
            if (e.checked == true) {
                document.getElementById('service-ru').checked = true;
                document.getElementById('service-ru').setAttribute('onclick', 'return false;');

            } else {
                document.getElementById('service-ru').removeAttribute('onclick');
            }
        }
    }

</script>


@yield('f_script')
</body>
</html>
