
(function(){


  'use strict';

  var app, dependencies;

  dependencies = ['ngResource', 'ngRoute','myApp.services','myApp.controllers'];
  app = angular.module('myApp', dependencies);
  
  app.config( function( $routeProvider ){   

    $routeProvider.when('/', {
      templateUrl: 'partials/login.html',
      controller: 'PostsCtrl'
    });   


    $routeProvider.when('/registro', {
      templateUrl: 'partials/registro.html'//,
      //controller: 'PostCtrl'
    });
    
    $routeProvider.when('/participantes', {
      templateUrl: 'partials/participantes.html'//,
      //controller: 'PostCtrl'
    });

    $routeProvider.when('/equipos', {
      templateUrl: 'partials/equipos.html'//,
      //controller: 'PostCtrl'
    });

    $routeProvider.when('/fechas', {
      templateUrl: 'partials/fechas.html'//,
      //controller: 'PostCtrl'
    });

    $routeProvider.otherwise({
      templateUrl:'partials/404.html'
    });

  }); 


})();