import {ProductsCard} from './components/classes/productsCard.class.js';
import {Menu} from './components/classes/Menu.class.js';
import {Slider} from './components/classes/Slider.class.js';
(function($,undefined){
    $(function () {
        let pathInfo = window.location.pathname.substr(1);

        switch (pathInfo){
            case "":
                (new Menu(
                    {
                        "menuBar":"menubar-wrapper",
                        "menuBarCatalog":"menubar-catalog"
                    }
                )).run();
                (new Slider({
                    slider: $('.cardsSlider'),
                    duration: 500,
                    countScroll: 1,
                    navigate: {
                        buttonNext: 'next_btn',
                        buttonPrev: 'prev_btn',
                        productCartLinkClass:'toProductCart',
                        relativeTo: '.card a>img',
                        positioningElement: '.next_btn,.prev_btn',
                        position: 'middle',
                        offset: {
                            '.card a>img': 'paddingTop'
                        }
                    }
                }).start());
            case "men/t-shirts":
                (new ProductsCard(
                    {
                        "productCard":"products_card",
                        "productName":"product_name"
                    }
                )).run();
        }
    });
})(jQuery);