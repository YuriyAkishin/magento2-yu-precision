define([
    'jquery',
    'underscore'
], function ($, _) {
    'use strict';
    
    return function(targetModule) {
        
        var globalPriceFormat = {
            requiredPrecision: 2,
            integerRequired: 1,
            decimalSymbol: ',',
            groupSymbol: ',',
            groupLength: ','
        };
        
        var formatPriceMy = targetModule.formatPrice;
        
        targetModule.formatPrice = function(amount, format, isShowSign) {
            
            format = _.extend(globalPriceFormat, format);
            format.requiredPrecision = 0;
            return formatPriceMy(amount, format, isShowSign);
        }
        
        return targetModule;
    };
});