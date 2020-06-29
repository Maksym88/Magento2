var config = {
    map: {
        '*': {
            'my-widget-first': 'ALevel_JavaScript/js/widget/widget-first',
            'my-widget-second': 'ALevel_JavaScript/js/widget/widget-second',
            'ALevel_BlockLayoutController/alevel-template.html': 'ALevel_JavaScript/override/alevel-template.html'
        }
    },
    shim: {
        'ALevel_JavaScript/js/widget/mixin/catalog-add-to-cart-mixin': {
            'deps': [
                'Magento_Ui/js/modal/modal',
                'Magento_Customer/js/customer-data'
            ]
        }
    },
    config: {
        mixins: {
            'Magento_Catalog/js/catalog-add-to-cart': {
                'ALevel_JavaScript/js/widget/mixin/catalog-add-to-cart-mixin': true
            },
            'Magento_Checkout/js/model/quote': {
                'ALevel_JavaScript/js/model/quote-mixin': true
            },
        }
    }
};
