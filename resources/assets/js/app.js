import {ProductsCard} from './components/classes/productsCard.class.js';
(function($,undefined){
    $(function () {
        let pathInfo = window.location.pathname.substr(1);

        switch (pathInfo){
            case "men/t-shirts":
                (new ProductsCard(
                    {
                        "productCard":"products_card",
                        "productName":"product_name"
                    }
                )).run();
        }
        $(window).resize(function () {
            console.log($('.product_name').height());
        });
    });
})(jQuery);