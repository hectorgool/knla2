
(function(){


  'use strict';

  var app = angular.module('myApp.controllers', []);
  
  app.controller('PostsCtrl', ['$scope', 'PostsFactory', 
    function ($scope, PostsFactory) {

      $scope.posts = null;

      PostsFactory.query( function( jsonArray ){
        //console.log( jsonArray );
        $scope.posts = jsonArray;
      });   
      
    }
  ]);


})();