(function(){

  'use strict';

  var app = angular.module('myApp.controllers', []);
  
  app.controller('EquiposController', ['$scope', 'EquiposFactory', 


    function ($scope, EquiposFactory) {

      $scope.documentos = null;

      EquiposFactory.query( function( jsonArray ){
        console.log( jsonArray );
        $scope.documentos = jsonArray;
      });   
      
    }

    
  ]);


})();