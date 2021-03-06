'use strict';

/* Modules */

var app = angular.module('parcelorderManager', ['parcelorderControllers', 'parcelorderServices', 'ngRoute']);

app.config(['$routeProvider', function($routeProvider) {
	$routeProvider.
	    otherwise({
		templateUrl: '/bundles/app/partials/parcelorder-list.html',
		controller: 'ParcelOrderListCtrl'
	});
}]);
