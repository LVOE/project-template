/**
 * Created by Kaitlin Augustine on 12/7/15.
 */
'use strict';

angular.module('app').config([
    '$routeProvider',
    function ($routeProvider) {
        $routeProvider.
        when('/welcome', {
            templateUrl: 'partials/welcome.html',
            controller: 'WelcomeController'
        }).
        otherwise({
            redirectTo: '/welcome'
        });
    }
]);
