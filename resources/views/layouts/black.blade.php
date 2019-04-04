<!doctype html>
<html lang="en">
  <head>
    <title>SEE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!--  Fonts and icons  -->
      <!--     Fonts and icons     -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Black Dashboard CSS -->
    <link href="{{asset('assets/css/black-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
  </head>
  <body>
<div class="wrapper ">
  <div class="sidebar" data-color="green" data-background-color="purple">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo">
      <div href="http://www.creative-tim.com" class="simple-text logo-normal">
       Sistema de evaluación <br>electrónica
      </div>
    </div>

    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active  ">
            <a class="nav-link" href="#0">
                <i class="tim-icons icon-chart-pie-36"></i>
                <p>Dashboard</p>
            </a>
        </li>

         <!-- your sidebar here -->
      </ul>
    </div>
  </div>
  <div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
      <div class="container-fluid">
        <div class="navbar-wrapper">

          <a class="navbar-brand" href="#pablo">Dashboard</a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="sr-only">Toggle navigation</span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
          <span class="navbar-toggler-icon icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item">
              <button class="btn btn-default" href="/">Inicio</button>
            </li>
            <li class="nav-item">
              <div class="dropdown">
                  <a class="btn btn-secondary" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Profesores
                    </a>
                <div class="dropdown-menu dropdown-black" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="{{action('ProfessorController@create')}}">Registro</a>
                  <a class="dropdown-item" href="{{action('ProfessorController@index')}}">Mostrar</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="btn btn-secondary" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Alumnos
                      </a>
                  <div class="dropdown-menu dropdown-black" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{action('studentController@create')}}">Registro</a>
                    <a class="dropdown-item" href="{{action('studentController@index')}}">Mostrar</a>
                  </div>
                </div>
            </li>
            <li class="nav-item">
                <div class="dropdown">
                    <a class="btn btn-secondary" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Departamento
                      </a>
                  <div class="dropdown-menu dropdown-black" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="{{action('DepartmentController@create')}}">Registro</a>
                    <a class="dropdown-item" href="{{action('DepartmentController@index')}}">Mostrar</a>
                  </div>
                </div>
              </li>
             <!-- your navbar here -->
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
      <div class="container-fluid">
         <!-- your content here -->
         @yield('content')
      </div>
    </div>
    <footer class="footer">
      <div class="container-fluid">
        

         <!-- your footer here -->
      </div>
    </footer>
  </div>
</div>
<!--   Core JS Files   -->
<script src="{{asset('../assets/js/core/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../assets/js/core/popper.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../assets/js/core/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{asset('../assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
<!--  Google Maps Plugin    
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>-->
<!-- Chartist JS 
<script src="../assets/js/plugins/chartjs.min.js"></script>-->
<!--  Notifications Plugin    
<script src="../assets/js/plugins/bootstrap-notify.js"></script>-->
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc 
<script src="../assets/js/black-dashboard.js?v=1.0.0" type="text/javascript"></script></body>-->
</html>