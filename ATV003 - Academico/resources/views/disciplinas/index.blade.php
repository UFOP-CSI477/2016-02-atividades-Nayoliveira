@extends('layouts.master')
@section('content')
	<div class=" col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-body">
				<table class="table table-striped">
					<tr>
						
						<div class="col-sm-2 vcenter">
							<h1>Disciplinas</h1>
							<a href="/disciplinas/create" class="btn btn-md btn-primary">Inserir</a>
						</div>
					</tr>
					<br>
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
		</div>
	</div>
@endsection
