define([
    "jquery"
], function ($) {
    "use strict";
    $.widget('alevel.widgetFirst', {
        options: {
            message: 'alevel.widgetFirst',
            name: ''
        },

        _create: function () {
            console.log(this.options.message);
            console.log(this.options.name);
        }
    });

    return $.alevel.widgetFirst;
});
