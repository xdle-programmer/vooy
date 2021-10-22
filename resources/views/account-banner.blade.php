@extends('account-manufacturer')


@section('main_item')
    @if ($user->whereHas('roles', function ($q) {
                      $q->where('slug', 'provider');
                      })->where('id', $user->id)->first() != null)
        <div class="account__blocks">
            <a class="account__block account__block--gold border-block"
               href="/tenders?filtered=true&onlyMyProvider=on">
                <div class="account__block-title">Тендеры, на которые я ответил</div>
                <div class="account__block-link">{{$replyedTenders->count()}} тендер</div>
                <svg class="account__block-icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                </svg>
            </a>
            <a class="account__block account__block--green border-block"
               href="/tenders?filtered=true&onlyMyRelease=on">
                <div class="account__block-title">Реализация</div>
                <div class="account__block-link">{{$inProgressTenders->count()}} тендер</div>
                <svg class="account__block-icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                </svg>
            </a>
        </div>
    @endif
    <a class="main-banner" href="#">
        <div class="main-banner__background">
            <div class="main-banner__background-el main-banner__background-el--1"></div>
            <div class="main-banner__background-el main-banner__background-el--2"></div>
            <div class="main-banner__background-el main-banner__background-el--3"></div>
            <div class="main-banner__background-el main-banner__background-el--4"></div>
            <div class="main-banner__background-el main-banner__background-el--5"></div>
            <div class="main-banner__background-el main-banner__background-el--6"></div>
        </div>
        <div class="main-banner__content main-banner__content--ref">
            <div class="main-banner__content-main">
                <div class="main-banner__content-title">Реферальная программа</div>
            </div>
            <div class="main-banner__content-natural">
                <div class="main-banner__content-natural-item">
                    <div class="main-banner__content-natural-item-percent">1%</div>
                    <div class="main-banner__content-natural-item-text">за каждого активного
                        покупателя
                    </div>
                </div>
                <div class="main-banner__content-natural-item">
                    <div class="main-banner__content-natural-item-percent">3%</div>
                    <div class="main-banner__content-natural-item-text">за каждого активного
                        поставщика
                    </div>
                </div>
            </div>
        </div>
    </a>
@stop
