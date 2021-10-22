@extends('account-manufacturer')


@section('main_item')
    <form method="POST" enctype="multipart/form-data" action="{{ route('account-factory-save') }}">
        @csrf
        <input name="role" type="hidden" value="provider">
        <div class="account__item border-block">
            <div class="account__item-settings">
                <div class="title-count">
                    <div class="title-count__item">Новый завод</div>
                    <div class="title-count__desc"></div>
                </div>
                <div class="account__item-settings-item">
                    <div class="account__item-settings-item-title">Данные</div>
                    <div class="account__item-settings-block account__item-settings-block--three-col">
                        <div class="account__item-settings-block-item placeholder">
                            <input name="factory[title]" class="input placeholder__input" placeholder="Название">
                            <div class="placeholder__item">Название</div>
                        </div>
                        <div class="account__item-settings-block-item placeholder">
                            <input  name="factory[city]" class="input placeholder__input" placeholder="Город" >
                            <div class="placeholder__item">Город</div>
                        </div>
                        <div class="account__item-settings-block-item placeholder">
                            <input name="factory[address]" class="input placeholder__input" placeholder="Адрес">
                            <div class="placeholder__item">Адрес</div>
                        </div>

                    </div>
                </div>
                <div class="account__item-settings-item">
                    <div class="account__item-settings-item-title">Логотип</div>
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
                                    <input name="factory_logo" class="photo-upload__input" type="file" accept="image/*">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
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
                                    <input name="factory_attachments[]" class="photo-upload__input" type="file" multiple accept="image/*">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="account__item-settings-item account__item-settings-item--no-border">
                    <button class="button account__button">Добавить</button>
                </div>
            </div>
        </div>
    </form>
@stop
