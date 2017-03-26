@extends('layouts.master')
	@section('content')
	    <div class="col-sm-10 col-sm-offset-1">
	<h1>Turmas</h1>
	<div class="col-sm-2 vcenter">
		<a href="/turmas/create" class="btn btn-block btn-md btn-success">Inserir</a>
	</div>
	
	<hr>
	<table class="table table-striped">
	    				<thead>
	    					<tr>
	    						<th>Id</th>
	    						<th>Nome</th>
	    						<th>Disciplina</th>
	    					</tr>
	    				</thead>
	    					@foreach($turmas as $t)
		    					<td>{{ $t->id}}</td>
		    					<td><a href="/turmas/{{ $t->id }}">{{ $t->nome }}</a></td>
		    					<td>{{ $t->Disciplina->nome}}</td></tr> 
	    					@endforeach
      				</table>
			   </div>
	        </div>
	    </div>
	@endsection