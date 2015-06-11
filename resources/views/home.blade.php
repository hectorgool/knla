<!DOCTYPE html>
<html lang="en" ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Bootstrap 101 Template</title>

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="{!! URL::asset('assets/css/santo.css'); !!}">

  </head>

  <body>
    <h1>?</h1>

    <div ng-view></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script src="{!! URL::asset('assets/js/angular.min.js'); !!}"></script>
    <script src="{!! URL::asset('assets/js/angular-route.min.js'); !!}"></script>
    <script src="{!! URL::asset('assets/js/angular-resource.min.js'); !!}"></script>

    <script src="{!! URL::asset('assets/js/santo.js'); !!}"></script>
    <script src="{!! URL::asset('assets/js/app.js'); !!}"></script>
    <script src="{!! URL::asset('assets/js/controller.js'); !!}"></script>
    <script src="{!! URL::asset('assets/js/service.js'); !!}"></script>

  </body>
</html>