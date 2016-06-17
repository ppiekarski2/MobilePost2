'use strict';

/* Controllers */

var parcelorderControllers = angular.module('parcelorderControllers', []);

parcelorderControllers.controller('ParcelOrderListCtrl', ['$scope', 'ParcelOrder',
  function($scope, ParcelOrder) {
	$scope.parcelorders = ParcelOrder.query();
}]);

