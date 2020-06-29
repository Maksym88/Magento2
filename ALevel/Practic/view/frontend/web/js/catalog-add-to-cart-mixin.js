define(
    [
        'jquery',
        'Magento_Ui/js/modal/modal',
        'Magento_Customer/js/customer-data',
    ],
    function ($, modal, customerData) {
        'use strict';

        return function (catalogAddToCart) {
            $.widget('mage.catalogAddToCart', catalogAddToCart, {
                submitForm: function (form) {

                    var self = this;

                    if (customerData.get('customer')().firstname) {

                        var options = {
                            type: 'popup',
                            title: $.mage.__('Want to take part in the action?'),
                            modalClass: 'practic-popup',
                            responsive: true,
                            buttons: [{
                                text: $.mage.__('Yes, I do'),
                                click: function () {
                                    let _self = this;
                                    $.ajax({
                                        url: BASE_URL + 'practic/record/add',
                                        data: {},
                                        type: "POST",
                                        dataType: 'json'
                                    }).done(function (response) {
                                        _self.closeModal();
                                        self.ajaxSubmit(form);
                                    }).fail(function (error) {
                                        console.log(JSON.stringify(error));
                                    });
                                }
                            }, {
                                text: $.mage.__("No, I don't"),
                                click: function () {
                                    this.closeModal();
                                    self.ajaxSubmit(form);
                                }
                            }]
                        };

                        // TODO Refactoring hardcode
                        $("#popup-modal").modal(options).modal("openModal");
                    } else {
                        this._super(form);
                    }
                }
            })
        }
    });