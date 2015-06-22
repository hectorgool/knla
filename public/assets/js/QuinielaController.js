(function(){

  'use strict';

  var app = angular.module('quiniela.controllers', []);
  
  app.controller('QuinielaController', ['$scope', 'QuinielaFactory', 


    function ($scope, QuinielaFactory) {

      $scope.documentos = null;

      QuinielaFactory.query( function( jsonArray ){
        console.log( jsonArray );
        $scope.documentos = jsonArray;
      });   
      
    }

    
  ]);


})();