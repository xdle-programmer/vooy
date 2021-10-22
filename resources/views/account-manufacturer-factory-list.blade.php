@extends('account-manufacturer')


@section('main_item')

    <div class="account__item border-block">
        <div class="account__item-settings">
            <div class="title-count">
                <div class="title-count__item">Мои заводы</div>
                <div class="title-count__desc"></div>
            </div>


            @foreach($factories as $factory)
                <div style="display: grid" class="border-block offer tenders-chat">
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
                        </div>
                    </div>
                    <div class="factory__attachments">
                        @foreach($factory->attachments as $attachment)
                            <img class="factory__attachments-photo"
                                 src="../storage/factories_attachments/{{$attachment->path}}">
                        @endforeach
                    </div>

                </div>
            @endforeach
        </div>

    </div>



@stop
