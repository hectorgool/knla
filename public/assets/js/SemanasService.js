
(function(){

	'use strict';
 
	var app = angular.module('Semanas.services', []);

	app.factory('SemanasFactory', function ($resource) {
		return $resource('semanas', {
			//GET, empty, Returns all Equipos
			query: { method: 'GET', isArray: true },
			//POST, JSON String Create new post
			save: { method: 'POST', isArray: true } 
		})
	});		

})();