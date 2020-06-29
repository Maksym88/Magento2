define(
    [
        'uiComponent'
    ],
    function (Component) {
        "use strict";

        return Component.extend({
               initialize: function () {
                    console.log('initialize: function');
                    return this._super();
               }
        });
    });