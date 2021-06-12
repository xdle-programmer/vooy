import SearchBox from 'search-row-hints';

let $searchBox = document.getElementsByClassName('header__search-box')[0];

let placeholder = 'Более 10 000 товаров оптом';

if (window.viewportOptions.viewportWidth < mobileWidth) {
    placeholder = 'Поиск';
}

window.searchBox = new SearchBox({
    $wrapper: $searchBox,
    mainClass: 'search-box',
    placeholderText: placeholder,
    buttonText: ' '
});

let $button = document.getElementsByClassName('search-box__button')[0];
let template = `
    <svg class="header__search-row-button-icon">
        <use xlink:href="../images/icons/icons-sprite.svg#zoom"></use>
    </svg>`;
$button.insertAdjacentHTML('beforeEnd', template);

let $header = document.getElementsByClassName('header')[0];
let headerScrollClass = 'header--scroll';

function setScrollClass() {
    if (window.scrollY > 0) {
        $header.classList.add(headerScrollClass);
    } else {
        $header.classList.remove(headerScrollClass);
    }
}

setScrollClass();

window.addEventListener('scroll', () => {
    setScrollClass();
});