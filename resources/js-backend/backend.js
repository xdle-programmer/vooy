let $searchBox = document.getElementsByClassName('header__search-box')[0];
let $searchSelect = document.querySelector('.search-select');

function getProducts(text, category = null) {
    console.log("getProducts", text);
    let catFilter = '';
    console.log(category)
    if (category != 0 && category != null)
        catFilter = '?category=' + category


    console.log('catFilter', catFilter)
    axios({
        method: 'GET',
        url: location.origin + '/product/search/' + text + catFilter
    })
        .then((result) => {
        productList = [];

        result.data.forEach(product => {
            newProduct = {};
            newProduct.id = product.id
            newProduct.title = product.title
            if (product.prices.length > 0) {
                /*
                newProduct.price = null;
                product.prices.forEach(price => {
                    if (price.price < newProduct.price || newProduct.price == null) ;
                         newProduct.price = price.price
                })*/
                newProduct.price = product.prices[product.prices.length - 1].price
            }
            if (product.attachments.length > 0) {
                newProduct.photo = 'products/' + product.attachments[0].path
            }
            else {
                newProduct.photo = 'tenderProducts/empty.jpg'
            }
            if (product.categories.length > 0) {
                newProduct.category = product.categories[product.categories.length - 1].name
            }
            else{
                newProduct.category = "Без Категории"
            }

            productList.push(newProduct)
        });

        console.log(productList)

        let nest = d3.nest().key(function (d) {
            return d.category;
        }).entries(productList);

        console.log(nest)
        let resultRow = '';
        nest.forEach(category => {
            let hint = '';
            if (category.key != 'undefined') {
                hint = `<div class="search-box__search-result-subname">${category.key}</div>`;
            }
            category.values.forEach((product,i) => {
               if (i > 0)
                   hint = '';
                resultRow += `
                    ${hint}
                    <a class="search-box__search-result" href="/product-card/${product.id}">
                    <img alt="" src="../storage/${product.photo}" />
                    ${product.title}, цена ${product.price} рублей</a>`;
            })
        })
        let nodeResult = `<div class="search-box__search-result-wrapper">${resultRow}</div>`;
        window.searchBox.showHints(nodeResult);

    }).catch((err) => {
        console.log(err);
    });
}

// Обработчик поиска
if ($searchBox != undefined)
{
    $searchBox.addEventListener('search', (event) => {
        console.log('Нужно выполнить поиск по запросу: ' + event.detail.value);
        let category = $searchSelect.value;
        let catFilter = '';
        if (category != 0 && category != null)
            catFilter = '&filter[category]=' + category;

        let productName = event.detail.value
        let producFilter = ''
        if (productName != '' && productName != null)
            producFilter = '&filter[title]=' + event.detail.value;

        console.log(window.location)
        window.location.href = window.location.origin + '/products?' + producFilter  + catFilter ;
    });
}


// Обработчик ввода и вывода подсказок
if ($searchBox != undefined)
{
    $searchBox.addEventListener('completeHint', (event) => {

        let text = event.detail.value;

        console.log($searchSelect.value)

        console.log("completeHint")

        getProducts(text, $searchSelect.value);

        let length = event.detail.value.length;
        let resultRow = '';
    });
}


// Обработчик чекбокса "Только активные тендеры"
let checkbox = document.querySelector('#only-active-tenders input');

if (checkbox) {
    checkbox.addEventListener('change', () => {


        for (let $tender of Array.from(document.querySelectorAll('.tender-row'))) {
            if ($tender.querySelector('.tender-row__status-line--4')) {
                if (checkbox.checked) {
                    $tender.style.display = 'none';
                } else {
                    $tender.style.display = 'grid';
                }
            }
        }

    });
}


// Обработчик отрпавки сообщения
let chatSendButtons = Array.from(document.querySelectorAll('.chat__form-send'));

if (chatSendButtons.length > 0) {
    for (let $chatSendButton of chatSendButtons) {
        $chatSendButton.addEventListener('click', event => {
            // setChatMessage(event.target);
        });
    }
}

function setChatMessage($button) {
    let $wrapper = $button.closest('.chat');
    let $form = $button.closest('.chat__form');

    let $input = $wrapper.querySelector('.chat__form-wrapper-input');
    let $images = $form.querySelector('.chat__message-content-images');
    let $files = $form.querySelector('.chat__message-content-files');
    let images = $images.innerHTML;
    let files = $files.innerHTML;
    let text = $input.value;
    let $messages = $wrapper.querySelector('.chat__messages');

    if (text.length === 0) {
        return;
    }

    let imagesHtml = '';

    if (images.length !== 0) {
        imagesHtml = `<div class="chat__message-content-images">${images}</div>`;
    }

    let filesHtml = '';

    if (files.length !== 0) {
        filesHtml = `<div class="chat__message-content-files">${files}</div>`;
    }

    let message = `
        <div class="chat__message">
            <div class="chat__message-content">
                <div class="chat__message-content-text">${text}</div>
                ${imagesHtml}
                ${filesHtml}
            </div>
            <div class="chat__message-time">13:15</div>
        </div>
    `;

    console.log(message);

    $messages.insertAdjacentHTML('beforeend', message);
    $input.value = '';
    $images.innerHTML = '';
    $files.innerHTML = '';
}
