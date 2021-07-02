@extends('layouts.app')

@section('content')

  <div class="wrapper">
    <section class="section section--small">
      <div class="layout">
        <div class="breadcrumbs"><a class="breadcrumbs__item" href="/_index.html">Главная</a>
          <div class="breadcrumbs__item breadcrumbs__item--active">Тендеры</div>
        </div>
        <div class="title-count">
          <div class="title-count__item">Список тендеров</div>
          <div class="title-count__desc">201</div>
        </div>
      </div>
    </section>
    <div class="filter">
      <section class="section section--small">
        <div class="layout">
          <div class="header-checkbox">
            <div class="header-checkbox__item filter__checkbox" data-filter="active">
              <label class="checkbox">
                <input class="checkbox__input" type="checkbox"><span class="checkbox__item">
                  <svg class="checkbox__icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                  </svg><span class="checkbox__text">Только активные</span></span>
              </label>
            </div>
            <div class="header-checkbox__item filter__checkbox" data-filter="archive">
              <label class="checkbox">
                <input class="checkbox__input" type="checkbox"><span class="checkbox__item">
                  <svg class="checkbox__icon">
                    <use xlink:href="../images/icons/icons-sprite.svg#check"></use>
                  </svg><span class="checkbox__text">Только архивные</span></span>
              </label>
            </div>
          </div>
        </div>
      </section>
      <section class="section section--small">
        <div class="layout">
          <div class="tender-row tender-row--header tender-row--without-assessment">
            <div class="tender-row__item">Фото</div>
            <div class="tender-row__item">Наименование</div>
            <div class="tender-row__item">Дата создания</div>
            <div class="tender-row__item">Номер</div>
            <div class="tender-row__item">Количество</div>

            <div class="tender-row__item">Статус</div>
          </div>

          @foreach ($tenders as $key => $tender)
            @if ($tender->status_id == 1)
              <div class="filter__item" data-filter="archive">
            @else
              <div class="filter__item" data-filter="active">
            @endif
                <div class="tender-row tender-row--without-assessment ">
                  @if ($tender->products->first())
                  <div class="tender-row__item">
                    @if ($tender->products->first()->attachments->first())
                      <img class="tender-row__preview" src="../storage/tenderProducts/{{$tender->products->first()->attachments->first()->path}}">
                    @else
                      <img class="tender-row__preview" src="../storage/tenderProducts/empty.jpg">
                    @endif
                  </div>
                  <a class="tender-row__item tender-row__item--left tender-row__item--link tender-row__item--middle" href="{{route('tenders-info', ['id' => $tender->id])}}">{{$tender->products->first()->title}}</a>
                  @else
                    <div class="tender-row__item"><img class="tender-row__preview" src="../storage/tenderProducts/empty.jpg"></div>
                    <a class="tender-row__item tender-row__item--left tender-row__item--link tender-row__item--middle"></a>
                  @endif
                  <div class="tender-row__item tender-row__item--small">{{$tender->created_at->format('d.m.Y')}}</div>
                  <div class="tender-row__item tender-row__item--small">{{$tender->id}}</div>
                  @if ($tender->products->first())
                    <div class="tender-row__item tender-row__item--big">{{$tender->products->first()->count}}</div>
                  @else
                    <div class="tender-row__item tender-row__item--big">нет</div>
                  @endif

                  <div class="tender-row__item">
                    <div class="tender-row__status">
                      <div class="tender-row__status-title">{{$tender->status->name}}</div>
                      <div class="tender-row__status-line">
                        <div class="status-line status-line--{{$tender->status_id}}"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        @endforeach
        </div>
      </section>
    </div>
  </div>
@stop