'use strict';

/* Services */

var parcelorderServices = angular.module('parcelorderServices', ['ngResource']);

parcelorderServices.factory('ParcelOrder', ['$resource',
  function($resource){
	return $resource('http://localhost:8000/api/v1/parcels/:parcelId/order.json', {}, {
	  query: {method: 'GET', isArray: true, headers: {'Accept': 'application/json'}
	}});
}]);
