
(function(){

	'use strict';
 
	var app = angular.module('User.services', []);

	app.factory('UserFactory', function ($resource) {
		return $resource('user', {
			//GET, empty, Returns all Equipos
			query: { method: 'GET', isArray: true },
			//POST, JSON String Create new post
			save: { method: 'POST', isArray: true } 
		})
	});		

})();