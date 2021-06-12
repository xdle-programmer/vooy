let tooltips = Array.from(document.querySelectorAll('.tooltip'));

if (tooltips.length > 0) {
    for (let $tooltip of tooltips) {
        toggleTooltip($tooltip);
    }
}


export function toggleTooltip($tooltip) {
    let $button = $tooltip.getElementsByClassName('tooltip__button')[0];
    let $inner = $tooltip.getElementsByClassName('tooltip__inner')[0];
    let activeClass = 'tooltip--active';
    let rightClass = 'tooltip--right';
    let fillClass = 'tooltip--fill';
    let tooltipSelector = '.tooltip';

    if ($tooltip.classList.contains(fillClass)) {
        setFillWidth();
    }

    function setFillWidth() {
        let offsetWidth = $tooltip.parentNode.getBoundingClientRect().width;
        $inner.style.width = offsetWidth + 'px';
    }

    function setPositionClass() {
        let offsetLeft = $inner.getBoundingClientRect().x;
        let offsetWidth = $inner.getBoundingClientRect().width;

        if (offsetLeft + offsetWidth > window.viewportOptions.viewportWidth) {
            $tooltip.classList.add(rightClass);
        }
    }

    setPositionClass();

    if (window.viewportOptions.hoverAvailability) {
        let buttonHover = false;
        let innerHover = false;

        $button.addEventListener('mouseenter', (e) => {
            buttonHover = true;
            toggleHoverInner();
        });

        $button.addEventListener('mouseleave', (e) => {
            buttonHover = false;
            toggleHoverInner();
        });

        $inner.addEventListener('mouseenter', (e) => {
            innerHover = true;
            toggleHoverInner();
        });

        $inner.addEventListener('mouseleave', (e) => {
            innerHover = false;
            toggleHoverInner();
        });


        function toggleHoverInner() {
            if (!buttonHover && !innerHover) {
                $tooltip.classList.remove(activeClass);
            } else {
                $tooltip.classList.add(activeClass);
            }
        }
    } else {
        $button.addEventListener('click', (e) => {
            if (checkActive()) {
                $tooltip.classList.remove(activeClass);
            } else {
                $tooltip.classList.add(activeClass);
            }
        });

        function checkActive() {
            if ($tooltip.classList.contains(activeClass)) {
                return true;
            } else {
                return false;
            }
        }

        document.addEventListener('click', (e) => {
            if (e.target !== $tooltip && e.target.closest(tooltipSelector) !== $tooltip) {
                $tooltip.classList.remove(activeClass);
            }
        });
    }


}
