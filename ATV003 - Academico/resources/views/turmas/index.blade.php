@extends('layouts.master')
	@section('content')
	    <div class=" col-md-10 col-md-offset-1">
	    	<div class="panel panel-default">
	    		<div class="panel-body">
	    			<table class="table table-striped">
	    				<h1>Turmas</h1>
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