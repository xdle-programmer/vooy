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
    {{--<script type="text/javascript" src="{{ asset('main.js') }}"></script>--}}
    @yield('h_script')


</head>
<body class="font-sans antialiased">

<!-- HEADER -->
<header class="header">
    <div class="header__main-wrapper">
        <div class="header__main-block layout"><a class="header__logo" href="{{route('home')}}">
                <div class="logo"><img class="logo__img" src="../images/icons/logo.svg" alt="Логотип Vooy">
                    <div class="logo__line"></div>
                    <div class="logo__text">Товары оптом</div>
                </div>
            </a>
            <div class="header__catalog">
                <div class="header__catalog-button">
                    <div class="header__catalog-button-text">Каталог</div>
                    <svg class="header__catalog-button-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#menu"></use>
                    </svg>
                </div>
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
            <div class="header__controls"><a class="header__control" href="/_favorites-products.html">
                    <svg class="header__control-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#heart"></use>
                    </svg>
                    <div class="header__control-text">Избранное</div>
                </a><a class="header__control" href="/_basket.html">
                    <svg class="header__control-icon">
                        <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                    </svg>
                    <div class="header__control-text">Мой тендер</div>
                </a></div>
            @if (Route::has('login'))
                @auth
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

        </div>
        @endauth
        @endif
    </div>

    <div class="header__natural-wrapper">
        <div class="header__natural-block layout">
            <div class="header__natural-links"><a class="header__natural-link" href="#">Как заказать?</a><a
                    class="header__natural-link" href="{{route('tenders-list')}}">Тендеры</a><a
                    class="header__natural-link" href="/_manufacturer-list.html">Поставщики</a>
                <div class="header__natural-link header__natural-link--blue" data-modal-open="new-tender">Тендер на свой
                    товар
                </div>
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
@yield('content')

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
                        <x-input placeholder="Телефон" id="login-email" class="input placeholder__input" type="text"
                                 name="email" :value="old('email')" required autofocus/>
                        <div class="placeholder__item">Телефон</div>
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
                        <div id="login-to-register-btn" class="modal__button button button--invert">
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
                        <input name="email" required class="input placeholder__input" placeholder="Телефон">
                        <div for="email" class="placeholder__item">Телефон</div>
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
                                        <input name="service[{{$service->id}}]" class="checkbox__input" type="checkbox"><span
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
                                    <input name="can_RLE" class="checkbox__input" type="checkbox"><span
                                        class="checkbox__item">
                                <svg class="checkbox__icon">
                                  <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                                </svg><span class="checkbox__text">Есть возможность работы с российскими юридическими лицами</span></span>
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
                <div class="button button--small button--invert">ПОСМОТРЕТЬ ЕЩЁ</div>
                <div class="button button--small">В ТЕНДЕРЫ</div>
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
<div class="modal" id="winner-success">
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
            <div class="modal__content-message-text">Вы выбрали победителем
                <div class="modal__content-message-text-inner">Название поставщика</div>
            </div>
            <div class="modal__content-message-one-button">
                <div class="button button--small">Ок</div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal--wide" id="new-offer-tender-products">
    <div class="modal__content form-check">
        <div class="modal__header">
            <div class="modal__header-title">Новый тендер</div>
            <div class="modal__header-close" data-modal-close>
                <svg class="modal__header-close-icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                </svg>
            </div>
        </div>

        <div class="product-in-tender form-check" id="new-offer-tender-products-form">
            <div class="product-in-tender__wrapper">
                <div id="tender-offer-items" class="product-in-tender__items">
                    <div id="tender-offer-item-template" class="product-in-tender__item">
                        {{--
                        <div class="product-in-tender__item-header">
                            <div class="tender-row tender-row--without-assessment ">
                                <div class="tender-row__item">
                                    <img class="tender-row__preview"
                                         src="images/examples/products-preview/products-preview-3.jpg">
                                </div>
                                <a class="tender-row__item tender-row__item--left tender-row__item--link tender-row__item--middle"
                                   href="/_tenders-archive.html">Заголовок товара</a>
                                <div class="tender-row__item tender-row__item--small">24.02.2021</div>
                                <div class="tender-row__item tender-row__item--small">2345678</div>
                                <div class="tender-row__item tender-row__item--big">1 200</div>
                                <div class="tender-row__item tender-row__item--big">1 800 ₽</div>
                                <div class="tender-row__item">
                                    <div class="tender-row__status">
                                        <div class="tender-row__status-title">Архивный</div>
                                        <div class="tender-row__status-line">
                                            <div class="status-line status-line--4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        --}}
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
                                </div>
                            </div>
                            <div class="product-in-tender__item-input-images">
                                <div class="photo-upload">
                                    <div class="photo-upload__items">
                                        <div class="photo-upload__preview-wrapper" data-upload-preview>
                                            <div class="photo-upload__preview-item"><img class="photo-upload__preview"
                                                                                         src="images/examples/products-preview/products-preview-1.jpg">
                                            </div>
                                        </div>
                                        <div class="photo-upload__preview-wrapper" data-upload-preview>
                                            <div class="photo-upload__preview-item"><img class="photo-upload__preview"
                                                                                         src="images/examples/products-preview/products-preview-0.jpg">
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
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="product-in-tender__footer">
                <div class="button form-check__button">Сделать предложение</div>
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

        <div class="product-in-tender form-check" id="new-products-form">
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
    <div class="layout footer__block">
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
@yield('f_script')
</body>
</html>
