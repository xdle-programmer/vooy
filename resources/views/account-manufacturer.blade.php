@extends('layouts.app')

@section('h_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>
@stop

@section('content')
    <div class="wrapper">
        <section class="section section--small">
            <div class="layout">
                <div class="breadcrumbs"><a class="breadcrumbs__item" href="/account">Главная</a>
                    <div class="breadcrumbs__item breadcrumbs__item--active">Личный кабинет</div>
                </div>
            </div>
        </section>
        <section class="section section--small">
            <div class="layout">
                <div class="account">
                    <div class="account-menu">
                        <div class="account-menu__header account-menu__section account-menu__section--header">

                            <div class="account-menu__header-img-wrapper" data-name="{{substr($user->name,0,2)}}">
                                <div class="account-menu__header-img">
                                    @if ($user->photo != null)
                                        <img class="account-menu__header-img-item"
                                             src="../storage/users/{{$user->id}}/{{$user->photo}}">
                                    @endif
                                </div>
                                <label class="account-menu__header-button">
                                    <div class="account-menu__header-button-icon-wrapper">
                                        <svg class="account-menu__header-button-icon">
                                            <use xlink:href="../images/icons/icons-sprite.svg#photo"></use>
                                        </svg>
                                    </div>
                                    <input id="user-photo-input" class="account-menu__header-input" type="file">
                                </label>
                            </div>

                            <div class="account-menu__header-name">{{$user->name}}</div>
                            <div class="account-menu__header-city">{{$user->city}}</div>
                            <a class="account-menu__link account-menu__link--bold" href="#">Личный кабинет</a>
                        </div>
                        <div class="account-menu__section"><a class="account-menu__link" href="#">О реферальной
                                программе</a><a class="account-menu__link" href="#">Баланс</a><a
                                class="account-menu__link"
                                href="#">Список
                                партнёров</a><a class="account-menu__link" href="#">Пригласить партнёров</a></div>
                        <div class="account-menu__section"><a class="account-menu__link"
                                                              href="/tenders?filtered=true&onlyMyProvider=on">Мои
                                тендеры</a></div>

                        <div class="account-menu__section"><a class="account-menu__link" href="/products">Товары</a>
                            <a class="account-menu__link" href="/product/new">Добавить товар</a>
                            <a class="account-menu__link" href="#" onclick="openFile()">Добавить товар из файла</a>
                            <input id="product-file-uploader" type="file" style="display: none">
                        </div>

                        <div class="account-menu__section">
                            <a class="account-menu__link" href="/account-settings">Настройки</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-dropdown-link :href="route('logout')"
                                                 onclick="event.preventDefault();
                              this.closest('form').submit();">
                                    <div class="account-menu__link account-menu__link--red">Выйти</div>
                                </x-dropdown-link>
                            </form>

                        </div>
                    </div>
                    <div class="account__item">
                        @yield('main_item')


                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('f_script')
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        let selectedFile;
        let data = [{
            "name": "jayanth",
            "data": "scd",
            "abc": "sdef"
        }]
        console.log(window.XLSX);
        document.getElementById('product-file-uploader').addEventListener("change", (event) => {
            selectedFile = event.target.files[0];

            XLSX.utils.json_to_sheet(data, 'out.xlsx');
            if (selectedFile) {
                let fileReader = new FileReader();
                fileReader.readAsBinaryString(selectedFile);
                fileReader.onload = (event) => {
                    let data = event.target.result;
                    let workbook = XLSX.read(data, {type: "binary"});
                    console.log(workbook);
                    workbook.SheetNames.forEach(sheet => {
                        let rowObject = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheet]);
                        console.log(rowObject);
                        //document.getElementById("jsondata").innerHTML = JSON.stringify(rowObject,undefined,4)
                    });
                }
            }
        })
        document.getElementById('user-photo-input').addEventListener("change", (event) => {
            console.log('event')
            console.log(event.target.files[0])

            let formData = new FormData();
            formData.append("image", event.target.files[0]);

            axios({
                method: 'POST',
                url: `${window.location.origin}/account/photo-upload`,
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'Content-Type': 'multipart/form-data'
                },
            }).then((response) => {
                console.log(response.data);
                window.location = window.location;
            });
        });


        function openFile() {
            document.getElementById('product-file-uploader').click();
        }


    </script>
@stop
