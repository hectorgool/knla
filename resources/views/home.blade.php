<!DOCTYPE html>
<html lang="en" ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>KNLA</title>

    <!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    -->
    
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap.min.css'); !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/bootstrap-theme.min.css'); !!}">

    <link rel="stylesheet" href="{!! URL::asset('assets/css/ui-bootstrap-csp.css'); !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/css/santo.css'); !!}">

  </head>

  <body>
    
    <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#/">Proyecto</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">

        <!--
        <li class="active">
          <a href="#/admin">Admin <span class="sr-only">(current)</span></a>
        </li>
        -->

        <li><a href="#/equipos">Equipos</a></li>

        <li><a href="#/partidos">Partidos</a></li>

        <li><a href="#/quiniela">Quiniela</a></li>
        <li><a href="#/quiniela-crear">Quiniela Crear</a></li>

        <li><a href="#/registro">Registro</a></li>

        <li><a href="#/jugadores">Jugadores</a></li>

      </ul>


      <ul class="nav navbar-nav navbar-right">

        <li>
          <a href="#">
            <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
          </a>
        </li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <div ng-view></div>

    <nav class="navbar navbar-default navbar-fixed-bottom">
      <div class="container">
        ...
      </div>
    </nav>

    <!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    -->


    <script src="{!! URL::asset('assets/lib/angular.min.js'); !!}"></script>
    <script src="{!! URL::asset('assets/lib/angular-route.min.js'); !!}"></script>
    <script src="{!! URL::asset('assets/lib/angular-resource.min.js'); !!}"></script>

    <script src="{!! URL::asset('assets/lib/ui-bootstrap.min.js'); !!}"></script>
    <script src="{!! URL::asset('assets/lib/ui-bootstrap-tpls.min.js'); !!}"></script>

    <script src="{!! URL::asset('assets/js/santo.js'); !!}"></script>
    <script src="{!! URL::asset('assets/js/app.js'); !!}"></script>
    <script src="{!! URL::asset('assets/js/EquiposController.js'); !!}"></script>
    <script src="{!! URL::asset('assets/js/EquiposService.js'); !!}"></script>

    <script src="{!! URL::asset('assets/js/UserController.js'); !!}"></script>
    <script src="{!! URL::asset('assets/js/UserService.js'); !!}"></script>

    <script src="{!! URL::asset('assets/js/SemanasController.js'); !!}"></script>
    <script src="{!! URL::asset('assets/js/SemanasService.js'); !!}"></script>    

  </body>
</html>