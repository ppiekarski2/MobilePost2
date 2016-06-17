'use strict';
/* Controllers */
var postmanControllers = angular.module('postmanControllers', []);
postmanControllers.controller('PostmanListCtrl', ['$scope', 'Postman',
    function($scope, Postman) {
        $scope.postmans = Postman.query();
    }]);
postmanControllers.controller('CreatePostmanFormCtrl', ['$scope', '$window',
    'Postman', function($scope, $window, Postman) {
        $scope.submit = function() {
            Postman.save($scope.postman, function() {
                $window.location.href = '#';
            });
        };
    }]);
	
var parcelOrderControllers = angular.module('parcelOrderControllers', []);
parcelOrderControllers.controller('ParcelOrderListCtrl', ['$scope', 'ParcelOrder',
    function($scope, ParcelOrder) {
        $scope.parcelOrders = ParcelOrder.query();
}]);