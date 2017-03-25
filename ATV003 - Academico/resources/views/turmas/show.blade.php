@extends('layouts.master')

@section('content')

<h1>Exibir turma</h1>
<hr>
	<form method="post" action="/turmas/{{ $turma->id }}">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}

		<div class=" col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-body">
					<label class="control-label col-sm-2" for="nome">Nome:</label>
					<div class="col-sm-10">
						<input class="form-control" type="text" name="nome" value="{{ $turma->nome }}" >
					</div>
					<br><br>
					<div class="form-group">
						<label class="control-label col-sm-2" for="disciplina">Disciplina:</label>
						<br>
						<div class="col-sm-10"> 
							<a href="/turmas/{{ $turma->id }}/edit" class="btn btn-primary">Editar</a>

							<input type="submit" class="btn btn-danger" value="Excluir"/>

							<a href="/turmas" class="btn btn-default">Voltar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
@endsection