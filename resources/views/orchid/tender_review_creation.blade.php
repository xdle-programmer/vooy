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
    @foreach ($tender->products as $index => $product)
        <h1 class="m-0 fw-light h3 text-black">Товар {{$index + 1}}</h1>
        <div class="table-responsive">
            <table class="table">
                <thead>
                <tr>

                    <th width="300px" class="text-left" data-column="title">
                        <div class="text-muted">
                            Фотографии
                        </div>
                    </th>

                    <th class="text-left" data-column="title">
                        <div class="text-muted">
                            Заголовок
                        </div>
                    </th>

                    <th class="text-left" data-column="title">
                        <div class="text-muted">
                            Нужен образец
                        </div>
                    </th>

                    <th class="text-left" data-column="created-at">
                        <div class="text-muted">
                            Количество
                        </div>
                    </th>

                    <th class="text-left" data-column="on-moderation">
                        <div class="text-muted">
                            Коментарий
                        </div>
                    </th>

                    <th class="text-left" data-column="on-moderation">
                        <div class="text-muted">
                            Брэндинг
                        </div>
                    </th>

                    <th class="text-left" data-column="on-moderation">
                        <div class="text-muted">
                            Упаковка
                        </div>
                    </th>

                    <th class="text-left" data-column="on-moderation">
                        <div class="text-muted">
                            Сертификаты
                        </div>
                    </th>
                </tr>

                </thead>
                <tbody>


                <tr data-product='{{$product->id}}'>

                    <td class="text-left   " data-column="title" colspan="1">
                        <div class="photo-container">
                            @foreach ($product->attachments as $attachment)
                                <img src="<?php echo asset("storage/tenderProducts/$attachment->path")?>"
                                     alt='sample' style='width: auto; max-height: 200px;'
                                     class='d-block img-fluid'>
                            @endforeach
                        </div>
                    </td>


                    <td aria-readonly="true" class="text-left" data-column="title" colspan="1">
                        <div>
                            {{$product->title}}
                        </div>
                    </td>

                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div class="form-group mb-0">
                                <div data-controller="checkbox" data-checkbox-indeterminate="">
                                    <div class="form-check">
                                        @if ($product->sample)
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

                    <td class="text-left" data-column="count" colspan="1">
                        <div>
                            {{$product->count}}
                        </div>
                    </td>

                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            {{$product->description}}
                        </div>
                    </td>


                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div class="form-group mb-0">
                                <div data-controller="checkbox" data-checkbox-indeterminate="">
                                    @if ($product->branding)
                                        <input disabled type="checkbox" checked class="form-check-input" novalue="0"
                                               yesvalue="1"
                                               name="sample" title="Checkbox">
                                    @else
                                        <input disabled type="checkbox" class="form-check-input" novalue="0"
                                               yesvalue="1"
                                               name="sample" title="Checkbox">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div class="form-group mb-0">
                                <div data-controller="checkbox" data-checkbox-indeterminate="">
                                    @if ($product->packing)
                                        <input disabled type="checkbox" checked class="form-check-input" novalue="0"
                                               yesvalue="1"
                                               name="sample" title="Checkbox">
                                    @else
                                        <input disabled type="checkbox" class="form-check-input" novalue="0"
                                               yesvalue="1"
                                               name="sample" title="Checkbox">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            @foreach($product->sertificats as $sertKey=>$sert)
                                @if ($loop->last)
                                    {{$sert->name}} 
                                @else
                                    {{$sert->name}}, 
                                @endif

                            @endforeach
                        </div>
                    </td>

                </tr>
                </tbody>
            </table>
            <table class="table">
                <thead>
                <tr>
                    <th width="300px" class="text-left" data-column="title">
                        <div class="text-muted">
                            Фотографии
                        </div>
                    </th>

                    <th class="text-left" data-column="title">
                        <div class="text-muted">
                            Заголовок
                        </div>
                    </th>

                    <th class="text-left" data-column="title">
                        <div class="text-muted">
                            Предоставим образец
                        </div>
                    </th>

                    <th class="text-left" data-column="created-at">
                        <div class="text-muted">
                            Количество
                        </div>
                    </th>

                    <th class="text-left" data-column="created-at">
                        <div class="text-muted">
                            Срок выполнения
                        </div>
                    </th>

                    <th class="text-left" data-column="on-moderation">
                        <div class="text-muted">
                            Коментарий
                        </div>
                    </th>

                    <th class="text-left" data-column="on-moderation">
                        <div class="text-muted">
                            Брэндинг
                        </div>
                    </th>

                    <th class="text-left" data-column="on-moderation">
                        <div class="text-muted">
                            Упаковка
                        </div>
                    </th>

                    <th class="text-left" data-column="price">
                        <div class="text-muted">
                            Цена
                        </div>
                    </th>
                </tr>

                </thead>
                <tbody>


                <tr data-product='{{$product->id}}'>

                    <td data-column="title" colspan="1">
                        <div data-id="{{$product->id}}">
                            <div class="dropzone-wrapper dz-clickable">
                                <div id="dropzone-field-files-{{$product->id}}"
                                     class="visual-dropzone sortable-dropzone dropzone-previews">
                                    <input onchange="previewFileInput(this)" style="display: none" multiple type="file"
                                           data-id="{{$product->id}}" id="product-{{$product->id}}-files">
                                    <div onclick="openFileInput({{$product->id}})"
                                         class="dz-message dz-preview dz-processing dz-image-preview">
                                        <div
                                            class="bg-light d-flex justify-content-center align-items-center border r-2x"
                                            style="min-height: 112px;">
                                            <div class="pe-1 ps-1 pt-3 pb-3">
                                                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="1em"
                                                     height="1em" viewBox="0 0 32 32" class="h3" role="img"
                                                     fill="currentColor" componentname="orchid-icon">
                                                    <path
                                                        d="M23.845 8.124c-1.395-3.701-4.392-6.045-8.921-6.045-5.762 0-9.793 4.279-10.14 9.86-2.778 0.889-4.784 3.723-4.784 6.933 0 3.93 3.089 7.249 6.744 7.249h2.889c0.552 0 1-0.448 1-1s-0.448-1-1-1h-2.889c-2.572 0-4.776-2.404-4.776-5.249 0-2.514 1.763-4.783 3.974-5.163l0.907-0.156-0.080-0.916-0.008-0.011c0-4.871 3.205-8.545 8.161-8.545 3.972 0 6.204 1.957 7.236 5.295l0.214 0.688 0.721 0.015c3.715 0.078 6.972 3.092 6.972 6.837 0 3.408-2.259 7.206-5.678 7.206h-2.285c-0.552 0-1 0.448-1 1s0.448 1 1 1l2.277-0.003c5-0.132 7.605-4.908 7.605-9.203 0-4.616-3.617-8.305-8.14-8.791zM16.75 16.092c-0.006-0.006-0.008-0.011-0.011-0.016l-0.253-0.264c-0.139-0.146-0.323-0.219-0.508-0.218-0.184-0.002-0.368 0.072-0.509 0.218l-0.253 0.264c-0.005 0.005-0.006 0.011-0.011 0.016l-3.61 3.992c-0.28 0.292-0.28 0.764 0 1.058l0.252 0.171c0.28 0.292 0.732 0.197 1.011-0.095l2.128-2.373v10.076c0 0.552 0.448 1 1 1s1-0.448 1-1v-10.066l2.199 2.426c0.279 0.292 0.732 0.387 1.011 0.095l0.252-0.171c0.279-0.293 0.279-0.765 0-1.058z"></path>
                                                </svg>
                                                <small class="text-muted w-b-k d-block">Загрузить Фото</small>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </td>

                    <td contenteditable="true" class="text-left" data-column="title" colspan="1">
                        <div id="product-{{$product->id}}-title">
                            {{$product->title}}
                        </div>
                    </td>

                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div class="form-group mb-0">
                                <div data-controller="checkbox" data-checkbox-indeterminate="">
                                    <div class="form-check">
                                        @if ($product->sample)
                                            <input type="checkbox" checked class="form-check-input" novalue="0"
                                                   yesvalue="1" name="sample" title="Checkbox"
                                                   id="product-{{$product->id}}-sample">
                                        @else
                                            <input type="checkbox" class="form-check-input" novalue="0" yesvalue="1"
                                                   name="sample" title="Checkbox" id="product-{{$product->id}}-sample">
                                        @endif
                                    </div>
                                </div>

                            </div>
                        </div>
                    </td>

                    <td class="text-left" data-column="count" colspan="1">
                        <div>
                            <div class="form-group mb-0">
                                <input class="form-control" id="product-{{$product->id}}-count" type="number"
                                       value="{{$product->count}}">
                            </div>
                        </div>
                    </td>

                    <td class="text-left" data-column="count" colspan="1">
                        <div>
                            <div class="form-group mb-0">
                                <input value="1" class="form-control" id="product-{{$product->id}}-release_time"
                                       type="number"
                                >
                            </div>
                        </div>
                    </td>

                    <td contenteditable="true" class="text-left" data-column="title" colspan="1">
                        <div id="product-{{$product->id}}-description">
                            {{$product->description}}
                        </div>
                    </td>


                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div class="form-group mb-0">
                                <div data-controller="checkbox" data-checkbox-indeterminate="">
                                    @if ($product->branding)
                                        <input type="checkbox" checked class="form-check-input" novalue="0" yesvalue="1"
                                               name="sample" title="Checkbox" id="product-{{$product->id}}-branding">
                                    @else
                                        <input type="checkbox" class="form-check-input" novalue="0" yesvalue="1"
                                               name="sample" title="Checkbox" id="product-{{$product->id}}-branding">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="text-left" data-column="title" colspan="1">
                        <div>
                            <div class="form-group mb-0">
                                <div data-controller="checkbox" data-checkbox-indeterminate="">
                                    @if ($product->packing)
                                        <input type="checkbox" checked class="form-check-input" novalue="0" yesvalue="1"
                                               name="sample" title="Checkbox" id="product-{{$product->id}}-packing">
                                    @else
                                        <input type="checkbox" class="form-check-input" novalue="0" yesvalue="1"
                                               name="sample" title="Checkbox" id="product-{{$product->id}}-packing">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td>

                    <td class="text-left" data-column="count" colspan="1">
                        <div>
                            <div class="form-group mb-0 d-flex">
                                <input value="1" class="form-control w-em-5" id="product-{{$product->id}}-price"
                                       type="number"
                                >
                                <select id="product-{{$product->id}}-currency">
                                    @foreach($currencies as $currency)
                                        <option value="{{$currency->id}}">{{$currency->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </td>

                </tr>
                </tbody>
            </table>
        </div>
    @endforeach
</div>

<div class="bg-white layout rounded shadow-sm mb-3 " data-controller="layouts--table">
    <header class="d-none d-md-block col-xs-12 col-md p-0 mb-3">
        <h1 class="m-0 fw-light h3 text-black"> Поставщик</h1>
    </header>

    <div id="radio-country" class="form-group d-none">
        <label for="field-radio" class="form-label px-3">Поставка из:
        </label>

        <div class="form-check px-4">
            <input onchange="countryChange(this)" checked id="radio-country-from-ru" type="radio" class="form-check-input" value="1" name="radio"
                   placeholder="Yes" title="Radio">
            <label class="form-check-label" for="radio-country-from-ru">России</label>
        </div>

        <div class="form-check">
            <input onchange="countryChange(this)" id="radio-country-from-ch" type="radio" class="form-check-input" value="2" name="radio"
                   placeholder="No">
            <label class="form-check-label" for="radio-country-from-ch">Китая</label>
        </div>

    </div>


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
            @foreach($providers as $provider)
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
                                    {{$services->id}}
                                    {{$services->name}} 
                                @else
                                    {{$services->id}}
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
        let countryProvider = null

        function countryChange(e){
            console.log(e.value);
            countryProvider = e.value;
        }

        function selectProvider(e) {
            console.log(e);
            if (curProvider != null)
                curProvider.classList.remove('hoverable--selected');

            e.classList.add('hoverable--selected');
            curProvider = e;

            if (e.dataset.ct)
            {
                if (e.dataset.ct === 'both'){
                    countryProvider = '1';
                    document.getElementById('radio-country').classList.remove('d-none')
                    document.getElementById('radio-country').classList.add('d-flex')
                }
                else {
                    document.getElementById('radio-country').classList.remove('d-flex')
                    document.getElementById('radio-country').classList.add('d-none')
                    countryProvider = e.dataset.ct
                }
            }
            else {
                countryProvider = null;
                document.getElementById('radio-country').classList.remove('d-flex')
                document.getElementById('radio-country').classList.add('d-none')
            }
        }

        function previewFileInput(input) {
            if (input.files && input.files[0]) {
                var filesAmount = input.files.length;
                let container = document.getElementById('dropzone-field-files-' + input.dataset.id);

                let images = container.querySelectorAll('.dz-template')
                images.forEach(img => {
                    img.remove();
                })

                if ('content' in document.createElement('template')) {
                    for (var i = 0; i < input.files.length; i++) {
                        console.log(input.files[i])

                        let reader = new FileReader();
                        reader.addEventListener("load", function () {
                            let template = document.querySelector('#inputRaw');
                            let img = template.content.querySelector('.dz-preview .dz-image img');
                            img.src = this.result;
                            let clone = document.importNode(template.content, true);
                            container.appendChild(clone);
                        });
                        reader.readAsDataURL(input.files[i]);

                    }
                }
            }
        }

        function openFileInput(id) {
            console.log(id);
            document.getElementById('product-' + id + '-files').click();
        }

        function sendReview() {
            if (curProvider == null) {
                console.log("Поставщик не выбран");
                return;
            }
            let formData = new FormData();
            formData.append("review[provider_id]", curProvider.dataset.provider);
            formData.append("review[tender_id]", TENDER.id);
            formData.append("review[from_country]", countryProvider);

            TENDER.products.forEach((item, i) => {
                formData.append("review[item][" + i + "][product_id]",
                    item.id);

                formData.append("review[item][" + i + "][name]",
                    document.getElementById("product-" + item.id + "-title").textContent);

                formData.append("review[item][" + i + "][sample]",
                    document.getElementById("product-" + item.id + "-sample").checked);

                formData.append("review[item][" + i + "][count]",
                    document.getElementById("product-" + item.id + "-count").value);

                formData.append("review[item][" + i + "][release_time]",
                    document.getElementById("product-" + item.id + "-release_time").value);

                formData.append("review[item][" + i + "][branding]",
                    document.getElementById("product-" + item.id + "-branding").checked);

                formData.append("review[item][" + i + "][packing]",
                    document.getElementById("product-" + item.id + "-packing").checked);

                formData.append("review[item][" + i + "][description]",
                    document.getElementById("product-" + item.id + "-description").textContent);

                formData.append("review[item][" + i + "][price]",
                    document.getElementById("product-" + item.id + "-price").value);

                formData.append("review[item][" + i + "][currency]",
                    document.getElementById("product-" + item.id + "-currency").value);

                let reviewImages = document.getElementById('product-' + item.id + '-files')

                if (reviewImages.files && reviewImages.files[0]) {
                    for (let revIndex = 0; revIndex < reviewImages.files.length; revIndex++) {
                        console.log(reviewImages.files[revIndex])
                        formData.append("review[item][" + i + "][attachments][" + revIndex + "][file]",
                            reviewImages.files[revIndex]);
                    }
                }

            });

            axios({
                method: 'POST',
                url: `${window.location.origin}/admin/tender/review/${TENDER.id}/create`,
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'Content-Type': 'multipart/form-data'
                },
            })
                .then((response) => {
                    console.log("AX");
                    console.log(response.data);
                    //window.location = window.location;
                })
        }

    </script>
@endpush
