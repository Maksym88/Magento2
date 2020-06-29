define(
[],
function () {
    'use strict';

    const quoteData = window.checkoutConfig.quoteData;

    return function (quote) {
        /**
         * Get Data.
         *
         * @returns int|string
         */
        quote.getData = function () {
            return quoteData;
        };

        return quote;
    };
});
