@push('stylesheets')
    <style>
        table tbody tr td a {
            display: block;
            width: 100%;
            height: 100%;
        }

        .c-blue {
            color: #007bff;
        }

        .c-yellow {
            color: #ffc107
        }

        .find-input {
            margin: 1rem !important;
            max-width: 400px !important;
        }

        .photo-container {
            display: grid;
            grid-template-columns: auto auto auto;
            grid-template-rows: auto auto auto;
            gap: 5px 5px;
            grid-template-areas:
    ". . ."
    ". . ."
    ". . .";
        }

        [contenteditable="true"]:hover {
            color: #1e2125;
            background-color: #e9ecef;
            border-radius: .3rem;
        }

        .hoverable:hover {
            color: #1e2125;
            background-color: #e9ecef;
            border-radius: .3rem;
        }

        .hoverable--selected {
            color: #1e2125;
            background-color: #e9ecef;
            border-radius: .3rem;
        }

        .w-em-5 {
            width: 5em;
        }

        .dropzone-wrapper .dz-preview .btn-remove,
        .dropzone .dz-preview .btn-remove {
            box-sizing: border-box;
            width: 30px !important;
            height: 30px;
            left: auto;
            right: 10px;
            top: 10px;
            padding: 0 !important;
            margin: 0;
            display: flex !important;
            align-items: center !important;
            text-align: center !important;
            justify-content: center !important;
        }

        .dropzone-wrapper .dz-preview .btn-edit,
        .dropzone .dz-preview .btn-edit {
            display: none !important;
        }

        .visual-dropzone, .sortable-dropzone, .dropzone-previews {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
        }

    </style>
@endpush

<div class="bg-white layout rounded shadow-sm mb-3 " data-controller="layouts--table">
    <div class="table-responsive">
        <table class="table">
            <thead>
            <tr>

                <th class="text-left" data-column="title">
                    <div class="text-muted">
                        Id
                    </div>
                </th>

                <th class="text-left" data-column="title">
                    <div class="text-muted">
                        Статус
                    </div>
                </th>

                <th class="text-left" data-column="title">
                    <div class="text-muted">
                        Подстатус
                    </div>
                </th>

                <th class="text-left" data-column="title">
                    <div class="text-muted">
                        Покупатель
                    </div>
                </th>

                <th class="text-left" data-column="created-at">
                    <div class="text-muted">
                        Поставщик
                    </div>
                </th>

                <th class="text-left" data-column="on-moderation">
                    <div class="text-muted">
                        Ответственный за переговоры
                    </div>
                </th>

                <th class="text-left" data-column="on-moderation">
                    <div class="text-muted">
                        Ответственный за доставку
                    </div>
                </th>

                <th class="text-left" data-column="on-moderation">
                    <div class="text-muted">
                        Нужна доставка
                    </div>
                </th>

                <th class="text-left" data-column="on-moderation">
                    <div class="text-muted">
                        В страну
                    </div>
                </th>
            </tr>

            </thead>
            <tbody>

            <tr data-product='{{$tender->id}}'>

                <td aria-readonly="true" class="text-left" data-column="title" colspan="1">
                    <div>
                        {{$tender->id}}
                    </div>
                </td>

                <td aria-readonly="true" class="text-left" data-column="title" colspan="1">
                    <div>
                        @if($tender->status)
                            {{$tender->status->name}}
                        @else
                            нет
                        @endif
                    </div>
                </td>

                <td aria-readonly="true" class="text-left" data-column="title" colspan="1">
                    <div>
                        @if($tender->substatus)
                            {{$tender->substatus->name}}
                        @else
                            нет
                        @endif
                    </div>
                </td>

                <td aria-readonly="true" class="text-left" data-column="title" colspan="1">
                    <div>
                        @if($tender->buyer)
                            {{$tender->buyer->name}}
                        @else
                            нет
                        @endif
                    </div>
                </td>
                <td aria-readonly="true" class="text-left" data-column="title" colspan="1">
                    <div>
                        @if($tender->provider)
                            {{$tender->provider->name}}
                        @else
                            нет
                        @endif
                    </div>
                </td>
                <td aria-readonly="true" class="text-left" data-column="title" colspan="1">
                    <div>
                        @if($tender->negotiator)
                            {{$tender->negotiator->name}}
                        @else
                            нет
                        @endif
                    </div>
                </td>
                <td aria-readonly="true" class="text-left" data-column="title" colspan="1">
                    <div>
                        @if($tender->deliveryman)
                            {{$tender->deliveryman->name}}
                        @else
                            нет
                        @endif
                    </div>
                </td>


                <td class="text-left" data-column="title" colspan="1">
                    <div>
                        <div class="form-group mb-0">
                            <div data-controller="checkbox" data-checkbox-indeterminate="">
                                <div class="form-check">
                                    @if ($tender->need_delivery)
                                        <input disabled type="checkbox" checked class="form-check-input" novalue="0"
                                               yesvalue="1" name="sample" title="Checkbox"
                                        >
                                    @else
                                        <input disabled type="checkbox" class="form-check-input" novalue="0"
                                               yesvalue="1"
                                               name="sample" title="Checkbox">
                                    @endif
                                </div>
                            </div>

                        </div>
                    </div>
                </td>

                <td aria-readonly="true" class="text-left" data-column="title" colspan="1">
                    <div>
                        @if($tender->to_country == 1)
                            Россия
                        @elseif($tender->to_country == 2)
                            Китай
                        @endif
                    </div>
                </td>

            </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="bg-white layout rounded shadow-sm mb-3 " data-controller="layouts--table">
    <header class="d-none d-md-block col-xs-12 col-md p-0 mb-3">
        <h1 class="m-0 fw-light h3 text-black">Ответственный за доставку</h1>
    </header>


    <div class="table-responsive">
        <table class="table  ">
            <thead>
            <tr>

                <th class="text-left" data-column="title">
                    <div class="text-muted">
                        Компания
                    </div>
                </th>

                <th class="text-left" data-column="title">
                    <div class="text-muted">
                        ФИО
                    </div>
                </th>

                <th class="text-left" data-column="on-moderation">
                    <div class="text-muted">
                        Город
                    </div>
                </th>

                <th class="text-left" data-column="on-moderation">
                    <div class="text-muted">
                        Емейл
                    </div>
                </th>
                <th class="text-left" data-column="on-moderation">
                    <div class="text-muted">
                        Телефон
                    </div>
                </th>
                <th class="text-left" data-column="on-moderation">
                    <div class="text-muted">
                        Услуги
                    </div>
                </th>
            </tr>

            </thead>
            <tbody>
            @foreach($connectors as $provider)
                @php
                    $bothProvider = false;
                    $userChRole = $provider->subroles->where('id', '!=', '4')->first();
                    $userRuRole = $provider->subroles->where('id', '=' ,'4')->first();

                    if ($userChRole != null && $userRuRole != null)
                        $bothProvider = true;
                @endphp

                <tr onclick="selectProvider(this)" class="hoverable" id="provider-{{$provider->id}}"
                    data-provider='{{$provider->id}}'
                    @if($bothProvider)
                    data-ct='both'
                    @elseIf($userChRole != null)
                    data-ct='2'
                    @elseIf($userRuRole != null)
                    data-ct='1'
                    @endif>
                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div id="byuer-phone" class="form-group mb-0">
                                {{$provider->provider_infos->first()->company}}
                            </div>
                        </div>
                    </td>

                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div id="byuer-phone" class="form-group mb-0">
                                {{$provider->surname}} {{$provider->name}} {{$provider->midname}}
                            </div>
                        </div>
                    </td>

                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div id="byuer-phone" class="form-group mb-0">
                                {{$provider->city}}
                            </div>
                        </div>
                    </td>

                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div id="byuer-phone" class="form-group mb-0">
                                {{$provider->email}}
                            </div>
                        </div>
                    </td>
                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div id="byuer-phone" class="form-group mb-0">
                                {{$provider->phone}}
                            </div>
                        </div>
                    </td>

                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            @foreach($provider->subroles as $services)
                                @if ($loop->last)
                                    {{$services->name}} 
                                @else
                                    {{$services->name}}, 
                                @endif
                            @endforeach
                        </div>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

<fieldset class="mb-3" data-async="">

    <div class="bg-white rounded shadow-sm p-4 py-4 d-flex flex-column">
        <div class="row form-group align-items-baseline">

            <div class="col-auto  pe-0 ">
                <div class="form-group mb-0">
                    <button onclick="undo()" data-controller="button" data-turbo="true" class="btn  btn-secondary">
                        Отмена
                    </button>
                </div>
            </div>

            <div class="col-auto  pe-0 ">
                <div class="form-group mb-0">
                    <button onclick="sendReview()" data-controller="button" data-turbo="true" class="btn  btn-success">
                        Опубликовать
                    </button>
                </div>
            </div>

        </div>

    </div>
</fieldset>

<template id="inputRaw">
    <div class="dz-template dz-preview dz-processing dz-image-preview dz-complete">
        <div class="dz-image"><img alt=".jpg" src="">
        </div>
        <div class="dz-details">
            <div class="dz-size"><span
                    data-dz-size=""><strong>0.1</strong> MB</span>
            </div>
            <div class="dz-filename"><span data-dz-name="">LIASOSO (1).jpg</span>
            </div>
        </div>
        <div class="dz-progress"><span class="dz-upload" data-dz-uploadprogress=""
                                       style="width: 100%;"></span></div>
        <div class="dz-error-message"><span data-dz-errormessage=""></span></div>
    </div>
</template>

@push('scripts')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let TENDER = {!! json_encode($tender) !!};
        let curProvider = null;


        function selectProvider(e) {
            console.log(e);
            if (curProvider != null)
                curProvider.classList.remove('hoverable--selected');

            e.classList.add('hoverable--selected');
            curProvider = e;
        }


        function sendReview() {
            if (curProvider == null) {
                console.log("Поставщик не выбран");
                return;
            }
            let provider_id = curProvider.dataset.provider
            if (provider_id == null){
                console.log("dataset.provider не найден");
                return;
            }

            axios({
                method: 'POST',
                url: `${window.location.origin}/admin/tender/parthner/${TENDER.id}/aprove`,
                data: {
                    tender_id: TENDER.id,
                    provider_id: provider_id
                },
                headers: {
                    'Content-Type': 'application/json'
                },
            })
                .then((response) => {
                    console.log("AX");
                    console.log(response.data.provider.email);

                    let mailData = {
                        title: 'Вас выбрали ответственным за доставку',
                        body: 'Вас выбрали ответственным за доставку',
                        email: response.data.provider.email,
                    }
                    sendMessageToEmail(mailData);
                })
        }

        function sendMessageToEmail(data) {
            axios({
                method: 'POST',
                url: `{{ route('email-send') }}`,
                data: {
                    title: data.title,
                    body: data.body,
                    email: data.email,
                },
                headers: {
                    'Content-Type': 'application/json'
                },
            }).then((response) => {
                console.log(response.data)
                window.location = `${window.location.origin}/admin/tenders`;
            })
        }

    </script>
@endpush
