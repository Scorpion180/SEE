<!doctype html>
<html lang="en">
   <head>
      <title>SEE</title>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <!--  Fonts and icons  -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
      <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
      <!-- Nucleo Icons -->
      <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
      <!-- CSS Files -->
      <link href="../assets/css/black-dashboard.css?v=1.0.0" rel="stylesheet" />
      <!-- Black Dashboard CSS -->
      <link href="{{asset('assets/css/black-dashboard.css?v=1.0.0')}}" rel="stylesheet" />
   </head>
   <style>
         .link { color: #007bff; } /* CSS link color */
       </style>
   <body>
      @if(Auth::check())
      <div class="wrapper ">
      <div class="sidebar" data-color="purple" data-background-color="white">
         <!--
            Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
            
            Tip 2: you can also add an image using data-image tag
            -->
         <div class="logo">
            <a href="" class="simple-text logo-normal">
            Bienvenido! <br>
            {{Auth::user()->name}}
            </a>
         </div>
         <div class="sidebar-wrapper">
            <ul class="nav">
               @if(Session::has('type'))
                  @if(Session::get('type') == 'p')
                  <li>
                        <a href="{{route('indexGroups',Auth::user()->id)}}">
                          <i class="tim-icons icon-book-bookmark"></i>
                          <p>Grupos</p>
                        </a>
                      </li>
                  <li>
                        <a href="{{route('profesor.show',Auth::user()->id)}}">
                           <i class="tim-icons icon-badge"></i>
                           <p>Perfil</p>
                        </a>
                     </li>
                  @endif
                  @if(Session::get('type') == 's')
                        <li class=>
                           <a href="{{route('group.index')}}">
                              <i class="tim-icons icon-book-bookmark"></i>
                              <p>Nuevo grupo</p>
                           </a>
                        </li>
                        <li>
                           <a href="{{route('indexStudentGroups',Auth::user()->id)}}">
                              <i class="tim-icons icon-book-bookmark"></i>
                              <p>Lista de grupos</p>
                           </a>
                        </li>
                        <li>
                        <a href="{{route('student.show',Auth::user()->id)}}">
                           <i class="tim-icons icon-badge"></i>
                           <p>Perfil</p>
                        </a>
                     </li>
                  @endif
               @endif
               <!-- your sidebar here -->
            </ul>
         </div>
      </div>
      @endif
      <div class="main-panel">
         <!-- Navbar -->
         <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
            <div class="container-fluid">
               <div class="navbar-wrapper">
                  <a class="navbar-brand" href="/home">Sistema de evaluacion<br>electronica</a>
               </div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
               <span class="sr-only">Toggle navigation</span>
               <span class="navbar-toggler-icon icon-bar"></span>
               <span class="navbar-toggler-icon icon-bar"></span>
               <span class="navbar-toggler-icon icon-bar"></span>
               </button>
               <div class="collapse navbar-collapse justify-content-end">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href={{route('home')}}>Inicio</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/">Acerca de</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/">Contacto</a>
                     </li>
                     @if(Auth::check())
                     <li class="dropdown nav-item">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                           <div class="photo">
                              <img src="../assets/img/anime3.png" alt="Profile Photo">
                           </div>
                           <b class="caret d-none d-lg-block d-xl-block"></b>
                           <p class="d-lg-none">
                              Log out
                           </p>
                        </a>
                        <ul class="dropdown-menu dropdown-navbar">
                           <li class="nav-link">
                              <a href="{{route('logout')}}" class="nav-item dropdown-item">
                              Cerrar sesión
                              </a>    
                           </li>
                        </ul>
                     </li>
                     <li class="separator d-lg-none"></li>
                     @else
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                     </li>
                     <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#">Registro</a>
                        <b class="caret d-none d-lg-block d-xl-block"></b>
                        <p class="d-lg-none"></p>
                        <ul class="dropdown-menu dropdown-navbar">
                           <li class="nav-link">
                           <a href="{{route('student.create')}}" class="nav-item dropdown-item">Alumno</a>
                           </li>
                           <li class="nav-link">
                           <a href="{{route('profesor.create')}}" class="nav-item dropdown-item">Profesor</a>
                           </li>
                        </ul>
                     </li>
                     @endif
                     <!-- your navbar here -->
                  </ul>
                </div>
              </div>
          </nav>
         <!-- End Navbar -->
         <div class="content">
         <div class="container-fluid">
            @if(isset($message))
               <div class="alert alert-primary" role="alert">
                  {{$message}}
               </div>
            @endif
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