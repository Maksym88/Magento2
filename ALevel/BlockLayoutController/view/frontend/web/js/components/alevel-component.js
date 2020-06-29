define(
    [
        'uiComponent'
    ], function (Component) {
        'use strict';

        return Component.extend({

            getMessage1: function () {
                return 'Hey Tomas';
            },

            getMessage2: function () {
                return 'Hey Luisa';
            }
        });
    }
);
