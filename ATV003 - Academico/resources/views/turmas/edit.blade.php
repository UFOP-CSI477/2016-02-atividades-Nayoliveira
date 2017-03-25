@extends('layouts.master')

@section('content')

<h1>Editar turma</h1>
<hr>
<form method="post" action="/turmas/{{ $turma->id }}" class="form-group" >

	{{ method_field('PATCH') }}
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
					<div class="col-sm-10"> 
						<select name="disciplina_id" class="form-control">
								@foreach($disciplinas as $d)
								<option value="{{$d->id}}">{{$d->nome}}</option>
								@endforeach
						</select>
					</div>
				</div>
				<br><br>
				<div class="col-sm-6 col-sm-offset-3">
					<input class="btn btn-success btn-md btn-block" type="submit" value="Salvar"/>    
						<br><br>
				</div>
			</div>
		</div>
	</div>	
</form>
@endsection