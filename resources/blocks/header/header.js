import SearchBox from 'search-row-hints';

let $searchBox = document.getElementsByClassName('header__search-box')[0];

let placeholder = 'Более 10 000 товаров оптом';

if (window.viewportOptions.viewportWidth < mobileWidth) {
    placeholder = 'Поиск';
}
if($searchBox !== undefined)
window.searchBox = new SearchBox({
    $wrapper: $searchBox ?? null,
    mainClass: 'search-box',
    placeholderText: placeholder,
    buttonText: ' '
});

let $button = document.getElementsByClassName('search-box__button')[0];
let template = `
    <svg class="header__search-row-button-icon">
        <use xlink:href="../images/icons/icons-sprite.svg#zoom"></use>
    </svg>`;
if ($button !== undefined)
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

function openNawbar(){
    let $nawbar = document.getElementsByClassName('header__natural-wrapper')[0];

    if ($nawbar.classList.contains('header__natural-wrapper-open'))
        $nawbar.classList.remove('header__natural-wrapper-open')
    else
        $nawbar.classList.add('header__natural-wrapper-open')

}

let $mobNavBtn = document.getElementById('mobile-navbar-btn')

if ($mobNavBtn !== undefined && $mobNavBtn !== null)
    $mobNavBtn.addEventListener('click',()=>{
    openNawbar()
})

function openProfile(){
    let $accountMenu = document.getElementsByClassName('account-menu')[0];

    if ($accountMenu.classList.contains('account-menu-open'))
        $accountMenu.classList.remove('account-menu-open')
    else
        $accountMenu.classList.add('account-menu-open')

}

document.querySelectorAll('.account-menu--btn').forEach(item=>{
    item.addEventListener('click',()=>{
        openProfile();
    })
})

