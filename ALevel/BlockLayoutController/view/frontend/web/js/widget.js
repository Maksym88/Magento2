define(
    ['jquery'],
    function ($) {
        'use strict';

        $.widget('alevel.widget', {

            options: {
                trigger: '#trigger'
            },

            _create: function (config, element) {
                this._bind();
            },

            _bind: function () {
                let self = this,
                    url = BASE_URL + 'alevel_info/ajax/index';

                $(this.options.trigger).on('click', function () {

                    $.ajax({
                        url:url ,
                        data: {'id': 123},
                        type: "POST",
                        dataType: 'json'
                    }).done(function (response) {
                        console.log(response);
                    }).fail(function (response) {
                        console.log(response);
                    })

                });
            }
        });

        return $.alevel.widget;
    });
