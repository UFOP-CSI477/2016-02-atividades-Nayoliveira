@extends('layouts.master')

@section('content')

<<div class="col-sm-10 col-sm-offset-1">
	<h1>Estados</h1>
	<div class="col-sm-2 vcenter">
		<a href="/Estados/create" class="btn btn-block btn-md btn-success">Inserir</a>
	</div>
	
	<hr>
	<table class="table table-striped">	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Sigla</th>
		</tr>
	</thead>
	<tbody>
		@foreach($estados as $e)
		<td>{{ $e->id}}</td>
		<td><a href="/estados/{{$e->id }}">{{ $e->nome }}</a></td>
		<td>{{ $e->sigla}}</td></tr> 
		@endforeach
	</tbody>
</table>
</div>
</div>
</div>
@endsection