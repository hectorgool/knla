(function(){

  'use strict';

  var app = angular.module('Semanas.controllers', ['Semanas.services']);
  
  app.controller('SemanasController', ['$scope', 'SemanasFactory', 


    function ($scope, SemanasFactory) {

      $scope.semanas = null;

      SemanasFactory.query( function( jsonArray ){
        console.log( jsonArray );
        $scope.semanas = jsonArray;
      });   
      
    }

    
  ]);


})();