define([
        'uiComponent',
        'jquery',
        'Magento_Customer/js/customer-data'
    ], function (
    Component,
    $,
    customerData
    ) {
        'use strict';

        return Component.extend({
            defaults: {
                content: ''
            },

            initialize: function () {
                this._super();
                this.showContent();
                return this;
            },

            showContent: function () {
                this.content = customerData.get('cart');

                return this.content().alevel_content;
            }
        });
    }
);
