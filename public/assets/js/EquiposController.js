(function(){

  'use strict';

  var app = angular.module('myApp.controllers', []);
  
  app.controller('EquiposController', ['$scope', 'EquiposFactory', 


    function ($scope, EquiposFactory) {

      $scope.equipos = null;

      EquiposFactory.query( function( jsonArray ){
        console.log( jsonArray );
        $scope.equipos = jsonArray;
      });   
      
    }

    
  ]);


})();