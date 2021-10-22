@extends('account-manufacturer')


@section('main_item')
    <form method="POST" action="{{ route('account-settings-save') }}">
        @csrf
        <input name="role" type="hidden" value="provider">
        <div class="account__item border-block">
            <div class="account__item-settings">
                <div class="title-count">
                    <div class="title-count__item">Настройки</div>
                    <div class="title-count__desc"></div>
                </div>
                <div class="account__item-settings-item">
                    <div class="account__item-settings-item-title">Личные данные</div>
                    <div class="account__item-settings-block account__item-settings-block--three-col">
                        <div class="account__item-settings-block-item placeholder">
                            <input name="user[name]" class="input placeholder__input" placeholder="Имя" value="{{$user->name}}">
                            <div class="placeholder__item">Имя</div>
                        </div>
                        <div class="account__item-settings-block-item placeholder">
                            <input  name="user[midname]" class="input placeholder__input" placeholder="Отчество" value="{{$user->midname}}">
                            <div class="placeholder__item">Отчество</div>
                        </div>
                        <div class="account__item-settings-block-item placeholder">
                            <input name="user[surname]" class="input placeholder__input" placeholder="Фамилия" value="{{$user->surname}}">
                            <div class="placeholder__item">Фамилия</div>
                        </div>

                        <div class="account__item-settings-block-item placeholder">
                            @if ($user->provider_infos[0] != null)
                                <input name="company" class="input placeholder__input" placeholder="Название поставщика"
                                       value="{{$user->provider_infos[0]->company}}">
                            @else
                                <input name="company" class="input placeholder__input" placeholder="Название поставщика" value="">
                            @endif
                            <div class="placeholder__item">Название компании</div>
                        </div>
                        <div class="account__item-settings-block-item placeholder">
                            <input name="user[city]" class="input placeholder__input" placeholder="Город" value="{{$user->city}}">
                            <div class="placeholder__item">Город</div>
                        </div>
                    </div>
                </div>
                {{--
                <div class="account__item-settings-item">
                    <div class="account__item-settings-item-title">Фото с производства</div>
                    <div class="photo-upload">
                        <div class="photo-upload__items photo-upload__items--six">
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
                --}}
                <div class="account__item-settings-item">
                    <div class="account__item-settings-item-title">Изменить пароль</div>
                    <div class="account__item-settings-block account__item-settings-block--three-col">
                        <div class="account__item-settings-block-item placeholder">
                            <input  name="password_current" class="input placeholder__input" placeholder="Текущий пароль" type="password">
                            <div class="placeholder__item">Текущий пароль</div>
                        </div>
                        <div class="account__item-settings-block-item placeholder">
                            <input  name="password_new" class="input placeholder__input" placeholder="Новый пароль" type="password">
                            <div class="placeholder__item">Новый пароль</div>
                        </div>
                        <div class="account__item-settings-block-item placeholder">
                            <input  name="password_new2" class="input placeholder__input" placeholder="Повторите новый пароль"
                                   type="password">
                            <div class="placeholder__item">Повторите новый пароль</div>
                        </div>
                    </div>
                </div>
                <div class="account__item-settings-item account__item-settings-item--no-border">
                    <button class="button account__button">Сохранить изменения</button>
                </div>
            </div>
        </div>
    </form>
@stop
