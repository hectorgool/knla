(function(){

  'use strict';

  var app = angular.module('User.controllers', ['User.services']);
  
  app.controller('UserController', ['$scope', 'UserFactory', 


    function ($scope, UserFactory) {

      $scope.documentos = null;

      UserFactory.query( function( jsonArray ){
        console.log( jsonArray );
        $scope.documentos = jsonArray;
      });   
      
    }

    
  ]);


})();