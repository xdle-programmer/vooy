
$favBtns = document.querySelectorAll('.product-favorite-btn')

$favBtns.forEach($favBtn=>{
    $favBtn.addEventListener('click', event => {
        let $btn = event.currentTarget

        if ($btn.dataset.fav === 'false')
        {
            axios({
                method: 'POST',
                url: location.origin + '/product/'+ $btn.dataset.product + '/add-favorite'
            }).then((result) => {
                console.log(result.data);
                $btn.dataset.fav = 'true';
                $btn.classList.remove('product-preview__button--gray')
                console.log("like")
            });
        }
        else {
            axios({
                method: 'POST',
                url: location.origin + '/product/'+ $btn.dataset.product + '/remove-favorite'
            }).then((result) => {
                console.log(result.data);

                $btn.dataset.fav = 'false';
                $btn.classList.add('product-preview__button--gray')
                console.log("dislike")
            });

        }

    });
})

