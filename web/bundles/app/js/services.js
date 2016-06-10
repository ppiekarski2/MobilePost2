'use strict';
/* Services */
var postmanServices = angular.module('postmanServices', ['ngResource']);
postmanServices.factory('Postman', ['$resource',
    function ($resource) {
        return $resource('http://localhost:8000/api/v1/postmens/:postmanId.json', {}, {
            query: {
                method: 'GET', isArray: true, headers: {'Accept': 'application/json'},
                save: {method:'POST', headers: {'Accept': 'application/json'}}
            }
        });
    }]);