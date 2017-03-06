<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
 		<div class="navbar-brand ">Sistema Acadêmico</div>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
           <a class="nav-link" href="/estados">Estados</a>
          </li>

          <li class="nav-item">
             <a class="nav-link" href="{{ url('/cidades') }}">Cidades</a>
          </li>
           <li class="nav-item">
                <a class="nav-link" href="{{ url('/alunos') }}">Alunos</a>
          </li>
         
        </ul>
       
      </div>
    </nav>