
(function(){

	'use strict';
 
	var app = angular.module('quiniela.services', []);

	app.factory('QuinielaFactory', function ($resource) {
		return $resource('quiniela', {
			//GET, empty, Returns all Equipos
			query: { method: 'GET', isArray: true },
			//POST, JSON String Create new post
			save: { method: 'POST', isArray: true } 
		})
	});		

})();