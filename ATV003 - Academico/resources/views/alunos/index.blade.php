@extends('layouts.master')
@section('content')
<div class="col-sm-10 col-sm-offset-1">
	<h1>Alunos</h1>
	<div class="col-sm-2 vcenter">
		<a href="/alunos/create" class="btn btn-block btn-md btn-success">Inserir</a>
	</div>
	
	<hr>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nome</th>
				<th>Email</th>
				<th>Cidade</th>
			</tr>
		</thead>
		<tbody>
			@foreach($alunos as $a)
			<td>{{ $a->id}}</td>
			<td><a href="/alunos/{{ $a->id }}">{{ $a->nome }}</a></td>
			<td>{{ $a->mail}}</td>
			<td>{{ $a->Cidade->nome}}</td></tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection