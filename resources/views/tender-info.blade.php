@extends('layouts.app')

@section('content')

@if ($tender != null)
<div class="wrapper">
  <section class="section section--small">
    <div class="layout">
      <div class="breadcrumbs"><a class="breadcrumbs__item" href="/_index.html">Главная</a><a class="breadcrumbs__item" href="/_tenders-list.html">Список тендеров</a>
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
              <div class="tender-header__main-title-status-title tender-header__main-title-status-title--gold">{{$tender->status->name}}</div>
              <div class="tender-header__main-title-status-line">
                <div class="status-line status-line--{{$tender->status_id}}"></div>
              </div>
            </div>
          </div>
          <div class="tender-header__main-buttons">
            <div class="tender-header__main-button button">Скопировать
              <svg class="button__icon">
                <use xlink:href="../images/icons/icons-sprite.svg#copy"></use>
              </svg>
            </div>
          </div>
        </div>
        <div class="tender-header__desc">
          <div class="tender-header__desc-item">
            <div class="tender-header__desc-item-name">Cоздан:</div>
            <div class="tender-header__desc-item-value">{{$tender->created_at->format('d.m.Y')}}</div>
            <div class="tender-header__desc-item-name">Осталось времени:</div>
            <div class="tender-header__desc-item-value">48ч</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section section--small">
    <div class="layout">
      <div class="tender-row tender-row--product tender-row--header">
        <div class="tender-row__item">Фото</div>
        <div class="tender-row__item">Наименование</div>
        <div class="tender-row__item">Количество</div>
        <div class="tender-row__item">Необходим образец</div>
        <div class="tender-row__item tender-row__item--center">Комментарий</div>
      </div>
      @if ($tender->products)
        @foreach ($tender->products as $key => $product)
          <div class="tender-row tender-row--product">

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
                <div class="tender-row__item" data-product-img-slider="{{$path}}">
                  <div class="tender-row__preview tender-row__preview--zoom">
                    <div class="tender-row__preview-zoom-text">{{$photoCount}} фото</div><img class="tender-row__preview-img" src="../storage/tenderProducts/{{$product->attachments->first()->path}}">
                  </div>
                </div>
              @else
                <div class="tender-row__item" data-product-img-slider="../storage/tenderProducts/empty.jpg">
                  <div class="tender-row__preview tender-row__preview--zoom">
                    <div class="tender-row__preview-zoom-text">0 фото</div><img class="tender-row__preview-img" src="../storage/tenderProducts/empty.jpg">
                  </div>
                </div>
              @endif

            <div class="tender-row__item tender-row__item--middle">{{$product->title}}</div>
            <div class="tender-row__item tender-row__item--big">{{$product->count}}</div>
            <div class="tender-row__item">
              @if ($product->sample)
                <svg class="tender-row__item-icon tender-row__item-icon--check">
                  <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                </svg>
              @else
                <svg class="tender-row__item-icon tender-row__item-icon--not-check">
                  <use xlink:href="../images/icons/icons-sprite.svg#close"></use>
                </svg>
              @endif

            </div>
            <div class="tender-row__item tender-row__item--left">{{$product->description}}</div>
          </div>
        @endforeach
      @else
        <h1>Пусто</h1>
      @endif
    </div>
  </section>
</div>
@else
<div class="wrapper">
  <section class="section section--small">
    <div class="layout">
      <div class="breadcrumbs"><a class="breadcrumbs__item" href="/_index.html">Главная</a><a class="breadcrumbs__item" href="/_tenders-list.html">Список тендеров</a>
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
