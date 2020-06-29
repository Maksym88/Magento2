define([
    "jquery"
], function ($) {
    "use strict";
    $.widget('alevel.widgetSecond', {
        options: {
            message: 'alevel.widgetSecond',
            name: ''
        },

        _create: function () {
            let self = this;
            this.element.click(function () {
                console.log(self.options.message);
                console.log(self.options.name);
                console.log(self.element);
                console.log(self.options);
            });
        }
    });

    return $.alevel.widgetSecond;
});
