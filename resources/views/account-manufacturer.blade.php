@extends('layouts.app')

@section('h_script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.16.2/xlsx.full.min.js"></script>
@stop

@section('content')
    <div class="wrapper">
        <section class="section section--small">
            <div class="layout">
                <div class="breadcrumbs"><a class="breadcrumbs__item" href="/">Главная</a>
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
                                {{--
                                <div class="account-menu__header-img"></div>
                                <label class="account-menu__header-button">
                                    <div class="account-menu__header-button-icon-wrapper">
                                        <svg class="account-menu__header-button-icon">
                                            <use xlink:href="../images/icons/icons-sprite.svg#photo"></use>
                                        </svg>
                                    </div>
                                    <input class="account-menu__header-input" type="file">
                                </label>--}}
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
                            <a class="account-menu__link" href="#">Настройки</a>
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
                        <div class="account__blocks"><a class="account__block account__block--gold border-block"
                                                        href="/tenders?filtered=true&onlyMyProvider=on">
                                <div class="account__block-title">Тендеры, на которые я ответил</div>
                                <div class="account__block-link">{{$replyedTenders->count()}} тендер</div>
                                <svg class="account__block-icon">
                                    <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                </svg>
                            </a><a class="account__block account__block--green border-block"
                                   href="/tenders?filtered=true&onlyMyRelease=on">
                                <div class="account__block-title">Реализация</div>
                                <div class="account__block-link">{{$inProgressTenders->count()}} тендер</div>
                                <svg class="account__block-icon">
                                    <use xlink:href="../images/icons/icons-sprite.svg#tenders"></use>
                                </svg>
                            </a></div>
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
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('f_script')
    <script>
        let selectedFile;
        let data=[{
            "name":"jayanth",
            "data":"scd",
            "abc":"sdef"
        }]
        console.log(window.XLSX);
        document.getElementById('product-file-uploader').addEventListener("change", (event) => {
            selectedFile = event.target.files[0];

            XLSX.utils.json_to_sheet(data, 'out.xlsx');
            if(selectedFile){
                let fileReader = new FileReader();
                fileReader.readAsBinaryString(selectedFile);
                fileReader.onload = (event)=>{
                    let data = event.target.result;
                    let workbook = XLSX.read(data,{type:"binary"});
                    console.log(workbook);
                    workbook.SheetNames.forEach(sheet => {
                        let rowObject = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheet]);
                        console.log(rowObject);
                        //document.getElementById("jsondata").innerHTML = JSON.stringify(rowObject,undefined,4)
                    });
                }
            }
        })





        function openFile() {
            document.getElementById('product-file-uploader').click();
        }


    </script>
@stop
