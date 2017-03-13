<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Eventos Esportivos</title>
        <!-- Bootstrap core CSS -->
        <!-- Custom styles for this template -->
        <link href="/css/sticky-footer-navbar.css" rel="stylesheet">
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <script src="/js/bootstrap.min.js"></script>
        <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
     @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
    </head>
    <body>
        @include('layout.nav')
        <div class="container-fluid text-center">    
            <div class="row content">
                <div class="col-sm-2 sidenav">
                  <p> <a class="nav-link" href="/adm">Area Administrativa</a></p>
                    <p><a class="nav-link" href="{{ url('/') }}">Área do Cliente</a></p>
                    <p><a class="nav-link" href="{{ url('/') }}">Area Geral</a></p>
                  </div>
                <div class="col-sm-8 text-left"> 
                    @yield('content')
                </div>
            </div>
        </div>           
            
@include('layout.footer')
    </body>
</html>
