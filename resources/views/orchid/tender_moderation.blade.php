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
  [contenteditable="true"]:hover{
    color: #1e2125;
    background-color: #e9ecef;
    border-radius: .3rem;
  }
  </style>
@endpush


<div class="bg-white layout rounded shadow-sm mb-3 " data-controller="layouts--table" data-layouts--table-slug="5e0e8c14a2ab902f74a71019e747ab34af098489">
  <header class="d-none d-md-block col-xs-12 col-md p-0 mb-3">
    <h1 class="m-0 fw-light h3 text-black"> Продавец</h1>
  </header>

  <div class="table-responsive">
    <table class="table  ">
      <thead>
        <tr>

          <th class="text-left" data-column="title">
            <div class="text-muted">
              Телефон
            </div>
          </th>

          <th class="text-left" data-column="title">
            <div class="text-muted">
              Имя
            </div>
          </th>

          <th class="text-left" data-column="title">
            <div class="text-muted">
              Фамилия
            </div>
          </th>

          <th class="text-left" data-column="created-at">
            <div class="text-muted">
              Отчество
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
        </tr>

      </thead>
      <tbody >

        <tr id="byuer-id" data-buyer='{{$tender->buyer->id}}'>

          <td class="text-left" data-column="title" colspan="1">
            <div>
              <div id="byuer-phone" class="form-group mb-0">
                {{$tender->buyer->phone}}
              </div>
            </div>
          </td>

          <td contenteditable="true"  class="text-left" data-column="title" colspan="1">
            <div>
              <div id="byuer-name" class="form-group mb-0">
                {{$tender->buyer->name}}
              </div>
            </div>
          </td>

          <td contenteditable="true" class="text-left" data-column="title" colspan="1">
            <div>
              <div id="byuer-surname" class="form-group mb-0">
                {{$tender->buyer->surname}}
              </div>
            </div>
          </td>

          <td contenteditable="true" class="text-left" data-column="title" colspan="1">
            <div>
              <div id="byuer-midname" class="form-group mb-0">
                {{$tender->buyer->midname}}
              </div>
            </div>
          </td>

          <td contenteditable="true" class="text-left" data-column="title" colspan="1">
            <div>
              <div id="byuer-city" class="form-group mb-0">
                {{$tender->buyer->city}}
              </div>
            </div>
          </td>

          <td contenteditable="true" class="text-left" data-column="title" colspan="1">
            <div>
              <div id="byuer-email" class="form-group mb-0">
                {{$tender->buyer->email}}
              </div>
            </div>
          </td>


        </tr>
      </tbody>
    </table>
  </div>

</div>

<div class="bg-white layout rounded shadow-sm mb-3 " data-controller="layouts--table" data-layouts--table-slug="5e0e8c14a2ab902f74a71019e747ab34af098489">
  <header class="d-none d-md-block col-xs-12 col-md p-0 mb-3">
    <h1 class="m-0 fw-light h3 text-black">Тендер</h1>
  </header>

  <div class="table-responsive">
    <table class="table  ">
      <thead>
        <tr>

          <th width="300" class="text-left" data-column="title">
            <div class="text-muted">
              Форма собственности
            </div>
          </th>

          <th class="text-left" data-column="title">
            <div class="text-muted">
              Общий комментарий
            </div>
          </th>
        </tr>

      </thead>
      <tbody >
        <tr id="tender-id"  data-tender='{{$tender->id}}'>

          <td class="text-left" data-column="title" colspan="1">
            <div>
              <div data-controller="select">
                <select id="tender-form" class="form-control select2-hidden-accessible" name="tender-form" title="tender-form" data-select2-id="tender-form" tabindex="-1" aria-hidden="true">
                  @if ($tender->ownership != null)
                    <option value="{{$tender->ownership->id}}">{{$tender->ownership->name}}</option>
                  @endif
                  @foreach ($ownerships as $ownership)
                    @if ($tender->ownership != null)
                      @if ($ownership->id != $tender->ownership->id)
                        <option value="{{$ownership->id}}">{{$ownership->name}}</option>
                      @endif
                    @else
                      <option value="{{$ownership->id}}">{{$ownership->name}}</option>
                    @endif
                  @endforeach
                </select>
              </div>
            </div>
          </td>

          <td contenteditable="true" class="text-left" data-column="title" colspan="1">
            <div id="tender-comment">
              {{$tender->description}}
            </div>
          </td>

        </tr>
      </tbody>
    </table>
  </div>

</div>

<div class="bg-white layout rounded shadow-sm mb-3 " data-controller="layouts--table" data-layouts--table-slug="5e0e8c14a2ab902f74a71019e747ab34af098489">

  <header class="d-none d-md-block col-xs-12 col-md p-0 mb-3">
    <h1 class="m-0 fw-light h3 text-black"> Товары</h1>
  </header>

  <div class="table-responsive">
    <table class="table  ">
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

          <th width="400px" class="text-left" data-column="on-moderation">
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
      <tbody >

        @foreach ($tender->products as $product)
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


            <td contenteditable="true" class="text-left" data-column="title" colspan="1">
              <div id="product-{{$product->id}}-title">
                {{$product->title}}
              </div>
            </td>

            <td class="text-left   " data-column="title" colspan="1">
              <div>
                <div class="form-group mb-0">

                  <div data-controller="checkbox" data-checkbox-indeterminate="">
                    <div class="form-check">
                      @if ($product->sample)
                        <input type="checkbox" checked class="form-check-input" novalue="0" yesvalue="1" name="sample" title="Checkbox" id="product-{{$product->id}}-sample">
                      @else
                        <input type="checkbox" class="form-check-input" novalue="0" yesvalue="1" name="sample" title="Checkbox" id="product-{{$product->id}}-sample">
                      @endif
                    </div>
                  </div>

                </div>
              </div>
            </td>

            <td class="text-left" data-column="count" colspan="1">
              <div>
                <div class="form-group mb-0">
                  <input class="form-control" id="product-{{$product->id}}-count" type="number" value="{{$product->count}}" >
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
                      <input type="checkbox" checked class="form-check-input" novalue="0" yesvalue="1" name="sample" title="Checkbox" id="product-{{$product->id}}-branding">
                    @else
                      <input type="checkbox" class="form-check-input" novalue="0" yesvalue="1" name="sample" title="Checkbox" id="product-{{$product->id}}-branding">
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
                      <input type="checkbox" checked class="form-check-input" novalue="0" yesvalue="1" name="sample" title="Checkbox" id="product-{{$product->id}}-packing">
                    @else
                      <input type="checkbox" class="form-check-input" novalue="0" yesvalue="1" name="sample" title="Checkbox" id="product-{{$product->id}}-packing">
                    @endif
                  </div>
                </div>
              </div>
            </td>

            <td class="text-left" data-column="title" colspan="1">
              <div>
                <div class="form-group" data-select2-id="51{{$product->id}}">
                  <div data-controller="select" data-select2-id="50{{$product->id}}">
                    <select class="form-control select2-hidden-accessible" name="sertificat[]-{{$product->id}}" multiple="" title="Multiple select" id="select-{{$product->id}}" data-select2-id="select-{{$product->id}}" tabindex="-1" aria-hidden="true">

                    </select>
                  </div>

                </div>

              </div>
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>
  </div>


  <footer class="pb-3 w-100 v-md-center">
    <div class="col-sm-7 text-right">
    </div>
  </footer>
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
          <button onclick="saveTender()" data-controller="button" data-turbo="true" class="btn  btn-primary">
            Сохранить
          </button>
        </div>
      </div>

      <div class="col-auto  pe-0 ">
        <div class="form-group mb-0">
          <button onclick="sendTender()" data-controller="button" data-turbo="true" class="btn  btn-success">
            Сохранить и опубликовать
          </button>
        </div>
      </div>

      <div class="col-auto  pe-0 ">
        <div class="form-group mb-0">
          <button  onclick="declineTender()" data-controller="button" data-turbo="true" class="btn  btn-danger">
            Отклонить
          </button>
        </div>
      </div>

    </div>

  </div>
</fieldset>

@push('scripts')

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
let TENDER = {!! json_encode($tender) !!};
let SERTIFICATS = {!! json_encode($sertificats) !!};


let tender = {
  id: 0,
  ownershipType: 0,
  tenderComment: "",
  buyer: {
    id: 0,
    phone: "",
    name: "",
    surname: "",
    midname: "",
    city: "",
    email: ""
  },
  products: []
}

  TENDER.products.forEach((prod) => {
    SERTIFICATS.forEach((s) => {
      let ifHas = false;
      prod.sertificats.forEach((sert) => {
        if (s.id == sert.id) {
          $('#select-' + prod.id).append(new Option(sert.name, sert.id, true, true)).trigger('change');
          ifHas = true;
        }
      });
      if (!ifHas) {
          $('#select-' + prod.id).append(new Option(s.name, s.id, false, false)).trigger('change');
      }
    });

  });

function getTender(){
    console.log('getTender()');
  tender.buyer.id = document.getElementById("byuer-id").dataset.buyer;
  tender.buyer.phone = document.getElementById("byuer-phone").textContent;
  tender.buyer.name = document.getElementById("byuer-name").textContent;
  tender.buyer.surname = document.getElementById("byuer-surname").textContent;
  tender.buyer.midname = document.getElementById("byuer-midname").textContent;
  tender.buyer.city = document.getElementById("byuer-city").textContent;
  tender.buyer.email = document.getElementById("byuer-email").textContent;

  tender.id = document.getElementById("tender-id").dataset.tender;
  tender.ownershipType = document.getElementById("tender-form").value;
  tender.tenderComment = document.getElementById("tender-comment").textContent;

  TENDER.products.forEach((item, i) => {
    //console.log(item);
    let product = {}
    product.id = item.id;
    product.title = document.getElementById("product-" + item.id + "-title").textContent;
    product.sample = document.getElementById("product-" + item.id + "-sample").checked;
    product.count = document.getElementById("product-" + item.id + "-count").value;
    product.branding = document.getElementById("product-" + item.id + "-branding").checked;
    product.packing = document.getElementById("product-" + item.id + "-packing").checked;
    product.description = document.getElementById("product-" + item.id + "-description").textContent;


    product.sertificats = [];
    console.log("sellected");
    $('#select-'+item.id).find(':selected').each((index, el)=> {
      product.sertificats.push({id: el.value, name: el.textContent});
    });

    tender.products.push(product);
  });
  console.log(tender);
}

function sendTenderData()
{
    console.log('sendTenderData()');
  axios({
    method: 'POST',
    url: `${window.location.origin}/admin/tender/moderation/${TENDER.id}/test`,
    data: tender,
    headers: {
      'X-Requested-With': 'XMLHttpRequest',
    },
  })
  .then((response) => {
    console.log("AX");
    console.log(response.data);
    window.location = 'http://188.225.85.66/admin/tenders';
  })
  .catch((err) => {
    console.log(err)
  });
}

async function sendTender(){
  await getTender();
  tender.status = 3;
  sendTenderData()
}

async function saveTender(){
  await getTender();
  sendTenderData()
}

async function declineTender(){
  await getTender();
  tender.status = 1;
  sendTenderData()
}

async function undo(){

getTender();
  window.location = 'http://188.225.85.66/admin/tenders';
}

</script>
@endpush
