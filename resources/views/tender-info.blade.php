@extends('layouts.app')

@section('h_script')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@stop

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
            <div data-tender="{{$tender->id}}" onclick="copyTender(this)" class="tender-header__main-button button">Скопировать
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

@section('f_script')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script>
  let cb = document.getElementById('tender-copy-btn');
  let isCopy = false;
  let captchaState = true;

  function captchaCallback() {
    captchaState = true;
  }

  function copyTender(e){
    let tenderId = e.dataset.tender;
    axios({
      method:'GET',
      url: 'http://188.225.85.66/tender/get/' + tenderId
    }).then((result) => {
      console.log(result.data);
      showCopy(result.data);
    }).catch((err) => {
      console.log(err);
    });
  }

  function showCopy(data){
    modals.open('new-tender-products');
    if (isCopy)
      return
    isCopy = true;

    for (var i = 0; i < data.products.length - 1; i++) {
      document.getElementById('tender_add_product_btn').click();
    }

    let productId = 0;
    let tenderProdList = document.getElementById('new-tender-products-list');
    tenderProdList.childNodes.forEach((tenderProductListItem, tenderProductListItemIndex) => {
      if (tenderProductListItem.nodeType == 1) {
        tenderProductListItem.childNodes[3].childNodes.forEach((productItem, productItemIndex) => {
          if (productItemIndex == 1) {
            productItem.childNodes[1].childNodes[1].value = data.products[productId].title;
          } else if (productItemIndex == 3) {
            productItem.childNodes[1].childNodes[1].value = data.products[productId].description
          } else if (productItemIndex == 5) {
            productItem.childNodes[3].childNodes[1].childNodes[3].value = data.products[productId].count
          } else if (productItemIndex == 7) {
            productItem.childNodes[3].childNodes[1].checked = data.products[productId].sample
          } else if (productItemIndex == 9) {
            if (data.products[productId].attachments.length != 0) {
              let imgContainer = productItem.childNodes[1].childNodes[1];
              data.products[productId].attachments.forEach((att, attIndex) => {
                let div = document.createElement("div");
                div.className = "photo-upload__preview-wrapper";
                div.setAttribute("data-upload-preview", '');
                div.setAttribute("data-copied", 'true');
                div.setAttribute("data-path", att.path);
                imgContainer.prepend(div);

                let div2 = document.createElement("div");
                div2.className = "photo-upload__preview-item";
                div.appendChild(div2);

                let img = document.createElement("img");
                img.className = "photo-upload__preview";
                img.src = "../storage/tenderProducts/" + att.path;
                div2.appendChild(img);

              });
            }
          }
        });
        productId++;
      }
    });


  }

  function uploadTender(e) {
    if (e.classList.contains('form-check__button--disabled') || captchaState == false) {
      return
    }

    let formData = new FormData();
    let productId = 0;

    let tenderProdList = document.getElementById('new-tender-products-list');
    tenderProdList.childNodes.forEach((tenderProductListItem, tenderProductListItemIndex) => {
      if (tenderProductListItem.nodeType == 1) {
        tenderProductListItem.childNodes[3].childNodes.forEach((productItem, productItemIndex) => {
          if (productItemIndex == 1) {
            formData.append("tender[products][" + productId + "][title]", productItem.childNodes[1].childNodes[1].value);
          } else if (productItemIndex == 3) {
            formData.append("tender[products][" + productId + "][description]", productItem.childNodes[1].childNodes[1].value);
          } else if (productItemIndex == 5) {
            formData.append("tender[products][" + productId + "][count]", productItem.childNodes[3].childNodes[1].childNodes[3].value);
          } else if (productItemIndex == 7) {
            formData.append("tender[products][" + productId + "][sample]", productItem.childNodes[3].childNodes[1].checked);
          } else if (productItemIndex == 9) {
            let copyIndex = 0;
            productItem.childNodes[1].childNodes[1].childNodes.forEach((productImage, productImageIndex) => {
              if (productImage.tagName == 'DIV') {
                if (productImage.dataset.copied) {
                  console.log(productImage.dataset.path);
                  formData.append("tender[products][" + productId + "][copied_attachments][" + copyIndex + "]", productImage.dataset.path);
                  copyIndex ++;
                }
              }
              else if (productImage.tagName == 'LABEL') {
                let files = productImage.childNodes[1].childNodes[5].files;
                formData.append("tender[products][" + productId + "][attachments_count]", files.length);
                for (var i = 0; i < files.length; i++) {
                  formData.append("tender[products][" + productId + "][attachments][" + i + "][file]", files[i]);
                }
              }
            });
          }
        });
        productId++;
      }
    });
    console.log('_________________');

    axios({
        method: 'POST',
        url: `{{ route('tender-create') }}`,
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
        modals.close('new-tender-products');
        modals.open('new-tender-success');
        //window.location = 'http://188.225.85.66?message=' + response.data;
      })
      .catch((err) => {
        console.log(err)
      });

  }


</script>

@endsection
