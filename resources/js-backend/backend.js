let $searchBox = document.getElementsByClassName('header__search-box')[0];

// Обработчик поиска
$searchBox.addEventListener('search', (event) => {
    console.log('Нужно выполнить поиск по запросу: ' + event.target.value);
});

// Обработчик ввода и вывода подсказок
$searchBox.addEventListener('completeHint', (event) => {
    let text = event.detail.value;

    let length = event.detail.value.length;
    let resultRow = '';

    if (length < 10) {
        for (let index = 10 - length; index > 0; index--) {
            let hint = '';
            if (index === 5 || index === 10 - length) {
                hint = '<div class="search-box__search-result-subname">Товар из категории электорника</div>';
            }


            resultRow += `
${hint}
<div class="search-box__search-result" onclick="console.log('Клиент кликнул на: ${text}')">
<img alt="" src="data:image/jpg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAAQAAD/4QMaaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0ODgsIDIwMjAvMDcvMTAtMjI6MDY6NTMgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjI1RjlFMUIyQTJDRTExRUJCRjQ1Q0ZCQjk3NkY2MEE4IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjI1RjlFMUIxQTJDRTExRUJCRjQ1Q0ZCQjk3NkY2MEE4IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMDIxIFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0iMDY2NTU4NDNEOUM4NkUxNzEwNEI1QTdFQ0MyNzM5QUIiIHN0UmVmOmRvY3VtZW50SUQ9IjA2NjU1ODQzRDlDODZFMTcxMDRCNUE3RUNDMjczOUFCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQAEw8PFxAXJRYWJS4jHSMuKyQjIyQrOTExMTExOUI8PDw8PDxCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQgEUFxceGh4kGBgkMiQdJDJBMigoMkFCQT4xPkFCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJC/8AAEQgAQwAyAwEiAAIRAQMRAf/EAHoAAAMAAwEBAAAAAAAAAAAAAAABBgIEBQMHAQEBAQEAAAAAAAAAAAAAAAAAAgEDEAABAwIEBAIHCQAAAAAAAAABAAIDEQQhMRIFQVETBnHB8GGBkTIUNKEiQlJicjMVRREBAQEBAAMBAAAAAAAAAAAAAAERAjFRMhL/2gAMAwEAAhEDEQA/AK5NJNB5XNx0ANLS57jpaPM+oLk/2l1a3IbdhphedLSwfCfTP3rf3W2bcQ46qscHjSaZKen29xiEUbnvllkDmasaHjXk0Ln1brrzzLztVxSTx45pLo5BCEIEtDd7mW3tnvgdpkY3XiK4Dgt8Ke3676dpK7i/7g9qnq5iuZu304cPdF0HH5g9WNwo5uAp4LubZ3FZuk6A1NDqaZHCgryPLxyKhKra2+D5q5ih/O9o9irJus25+X1QpIJxQjAhJCDBxo0kcioXuid/Vjg/BTX4nJXWeHNQndTC2SInk4e4qL9Rc+ek+F2+1o+puEZOTQ532YLhg0Xf7UeBegcXDBXfCZ5fQEJIRhoSQgwUz3NatuNLK0dUvafJUoK4G/uHVYOOnzU9NlRrtuuGmmnV62mq6mx2UtvdRyvwOqgYMzXmvWTqCMvZ8ILQ4n9S29l+rjL86mnjRZtosChKqFbDQkhYMAprfvqDn8LfQIQs6bGv/nTZfyRrHavq4f3+RQhT6FihCFbDQhCD/9k=" />
${text}, цена 5000 рублей, размер XXL</div>`;
        }

        let result = `<div class="search-box__search-result-wrapper">${resultRow}</div>`;

        window.searchBox.showHints(result);
    } else {
        window.searchBox.hideHints();
        window.searchBox.clearHints();
    }
});

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
            setChatMessage(event.target);
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
