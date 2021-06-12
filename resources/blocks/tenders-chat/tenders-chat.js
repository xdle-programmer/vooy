let tendersChats = Array.from(document.querySelectorAll('.tenders-chat'));

if (tendersChats.length > 0) {
    for (let $tendersChat of tendersChats) {
        tendersChat($tendersChat);
    }
}

function tendersChat($wrapper) {
    let $toggleButtons = Array.from($wrapper.querySelectorAll('.tenders-chat__button'));
    let $allChats = Array.from(document.querySelectorAll('.tenders-chat__content'));
    let $allButtons = Array.from(document.querySelectorAll('.tenders-chat__button'));
    let activeChatClass = 'tenders-chat__content--active';
    let activeEffectChatClass = 'tenders-chat__content--active-effect';
    let activeButtonClass = 'tenders-chat__button--active';
    let headerHeight = document.querySelector('.header__main-wrapper').getBoundingClientRect().height;

    for (let $toggleButton of $toggleButtons) {
        $toggleButton.addEventListener('click', (event) => {
            let $target;

            if (event.target.classList.contains('tenders-chat__button')) {
                $target = event.target;
            } else {
                $target = event.target.closest('.tenders-chat__button');
            }

            if ($target.classList.contains(activeButtonClass)) {
                hideChats();
            } else {
                hideChats();
                $target.classList.add(activeButtonClass);
                showItem($target.dataset.chat);
            }
        });
    }


    function showItem(target) {
        let $chat = $wrapper.querySelector('[data-chat-name="' + target + '"]');

        $chat.classList.add(activeChatClass);

        let checkDisplay = setInterval(() => {
            let computedStyle = window.getComputedStyle($chat, null);

            let displayState = computedStyle.getPropertyValue('display') !== 'none';

            if (displayState) {
                $chat.classList.add(activeEffectChatClass);

                window.scrollBy({
                    top: $chat.getBoundingClientRect().top - headerHeight - 10,
                    behavior: 'smooth'
                });
                clearInterval(checkDisplay);
            }
        }, 1);
    }

    function hideChats() {
        for (let $button of $allButtons) {
            $button.classList.remove(activeButtonClass);
        }


        for (let $chat of $allChats) {
            $chat.classList.remove(activeChatClass);
            $chat.classList.remove(activeEffectChatClass);
        }
    }

}

