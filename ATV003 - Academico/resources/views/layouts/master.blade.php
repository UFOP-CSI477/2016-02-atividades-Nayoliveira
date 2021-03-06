<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="../../favicon.ico">
        <title>Sistema Acadêmico</title>
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
    @include('layouts.nav')

    <div class="container-fluid text-center">    
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <p><a class="nav-link" href="{{ url('/estados') }}">Estados</a></p>
                <p><a class="nav-link" href="{{ url('/cidades') }}">Cidades</a></p>
                <p><a class="nav-link" href="{{ url('/alunos') }}">Alunos</a></p>
                <p><a class="nav-link" href="{{ url('/disciplinas') }}">Disciplinas</a></p>
                <p><a class="nav-link" href="{{ url('/turmas') }}">Turmas</a></p>
            </div>
            <div class="col-sm-8 text-left"> 
                @yield('content')
            </div>
        </div>
    </div> 
    <div class="col-sm-8 text-left">
        <div class="content">
          @if(Session::has('error'))
          <div class="alert alert-danger">{{Session::get('error')}}</div>
          @endif
          <div class="content">
              @if(Session::has('info'))
              <div class="alert alert-info">{{Session::get('info')}}</div>
              @endif
              <div class="content">
	              @if(Session::has('warning'))
	              <div class="alert alert-warning">{{Session::get('warning')}}</div>
	              @endif
              </div>
          </div>



      </div>
  </div>

        @include('layouts.footer')


  <script src="/js/app.js"></script>
</body>
</html>