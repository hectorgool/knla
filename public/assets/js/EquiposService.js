
(function(){

	'use strict';
 
	var app = angular.module('myApp.services', []);

	app.factory('EquiposFactory', function ($resource) {
		return $resource('equipos', {
			//GET, empty, Returns all Equipos
			query: { method: 'GET', isArray: true },
			//POST, JSON String Create new post
			save: { method: 'POST', isArray: true } 
		})
	});		

})();