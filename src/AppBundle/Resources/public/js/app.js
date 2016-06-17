'use strict';
/* Modules */
var app = angular.module('postmanManager', [
    'postmanControllers',
    'postmanServices',
    'postmanDirectives',
    'ngRoute'
]);
app.config(['$routeProvider', function($routeProvider) {
    $routeProvider.
    when('/new', {
        templateUrl: '/bundles/app/partials/postman-form.html',
        controller: 'CreatePostmanFormCtrl'
    }).
    otherwise({
        templateUrl: '/bundles/app/partials/postman-list.html',
        controller: 'PostmanListCtrl'
    });
}]);

'use strict';
/* Modules */

var app2 = angular.module('parcelOrderManager',['parcelOrderControllers',
    'parcelOrderServices',
    'parcelOrderDirectives',
    'ngRoute']);
app2.config(['$routeProvider', function($routeProvider) {
    $routeProvider.
    otherwise({
        templateUrl: '/bundles/app/partials/parcelOrder-list.html',
        controller: 'ParcelOrderListCtrl'
    });
}]);