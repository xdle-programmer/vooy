let toggleShowBlocks = Array.from(document.querySelectorAll('.toggle-show-block'));

if (toggleShowBlocks.length > 0) {
    for (let $toggleShowBlock of toggleShowBlocks) {
        toggleShowBlockHandler($toggleShowBlock);
    }
}

function toggleShowBlockHandler($wrapper) {
    let $button = $wrapper.querySelector('.toggle-show-block__button');
    let $item = $wrapper.querySelector('.toggle-show-block__item');
    let buttonActiveClass = 'toggle-show-block__button--active';
    let itemActiveClass = 'toggle-show-block__item--active';

    $button.addEventListener('click', ()=>{
        $button.classList.toggle(buttonActiveClass)
        $item.classList.toggle(itemActiveClass)
    })
}