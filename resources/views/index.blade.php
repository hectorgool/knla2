<!DOCTYPE html>
<html lang="en" ng-app="myApp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" >
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >

  </head>
  <body>

  <div class="container-fluid">

      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="#/">Iniciar sesión</a>
            
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">

              <!--
              <li>
                <a href="#/login">
                  Iniciar sesión
                </a>
              </li>
              -->

              <li>
                <a href="#/registro">
                  Registrate
                </a>
              </li>

            </ul>

          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>


    <div class="container-fluid">

      <a href="#/fechas">Fechas</a> | <a href="#/equipos">Equipos</a> | <a href="#/participantes">Participantes</a> 

      <div ng-view></div>
    </div>


  </div>


    <script type="text/javascript" src="{{ asset('lib/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/angular-route.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('lib/angular-resource.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/controller.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/services.js') }}"></script>

  </body>
</html>