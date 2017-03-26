@extends('layouts.master')
@section('content')
	<div class="col-sm-10 col-sm-offset-1">
		<h1>Disciplinas</h1>
		<div class="col-sm-2 vcenter">
			<a href="/disciplinas/create" class="btn btn-block btn-md btn-success">Inserir</a>
		</div>
		
		<hr>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nome</th>
					<th>Código</th>
					<th>C.H</th>
				</tr>
			</thead>
			@foreach($disciplinas as $d)
			<tr>
				<td><a href="/disciplinas/{{ $d->id }}">{{ $d->nome }}</a></td>
				<td>{{ $d->codigo}}</td>
				<td>{{ $d->carga}}</td>	
			</tr>
			@endforeach
		</table>
	</div>
@endsection
