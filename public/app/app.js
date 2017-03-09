/**
 * Created by lnthao on 3/9/2017.
 */

var app = angular.module('app', [], function($interpolateProvider) {
        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');
    }).constant('API_URL', '/api/v1/');

