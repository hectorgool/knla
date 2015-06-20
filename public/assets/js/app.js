(function(){

  'use strict';

  var app, dependencies;

  dependencies = ['ngResource', 'ngRoute',
    'myApp.services','myApp.controllers',
    'User.controllers','User.services',
    'ui.bootstrap'
  ];

  app = angular.module('myApp', dependencies);
  
  app.config( function( $routeProvider ){   

    $routeProvider.when('/', {
      templateUrl: '/assets/partials/view1.html',
      //controller: 'PostsCtrl'
    });   

    $routeProvider.when('/admin', {
      templateUrl: '/assets/partials/admin.html'//,
      //controller: 'PostCtrl'
    });
    
    $routeProvider.when('/equipos', {
      templateUrl: '/assets/partials/equipos.html',
      controller: 'EquiposController'
    });  

    $routeProvider.when('/partidos', {
      templateUrl: '/assets/partials/partidos.html',
      controller: 'EquiposController'
    }); 

    $routeProvider.when('/quiniela', {
      templateUrl: '/assets/partials/quiniela.html'//,
      //controller: 'EquiposController'
    }); 

    $routeProvider.when('/registro', {
      templateUrl: '/assets/partials/registro.html',
      controller: 'UserController'
    });

    $routeProvider.when('/usuarios', {
      templateUrl: '/assets/partials/users.html',
      controller: 'UserController'
    });

    $routeProvider.otherwise({
      templateUrl:'partials/404.html'
    });

  }); 

})();