@extends('layouts.master')

@section('content')

<h1>Inserir cidade</h1>
    <hr>
	<form action="/cidades" method="post">
	{{ csrf_field() }}

		<div class="col-sm-6">
			<div class="form-group">
	          <label for="nome">Nome</label>
	          <input type="text" class="form-control" name="nome" />
	        </div>
			<div class="form-group">
				<label for="estado_id">Estado</label>
				<select name="estado_id" class="form-control">
					@foreach($estados as $e)
						<option value="{{$e->id}}">{{$e->nome}}-{{$e->sigla}}</option>
					@endforeach
				</select>
			</div>
			
			<div class="col-sm-6">
              <input type="submit" value="Salvar" class="btn btn-block btn-primary btn-md"/>
            </div>
            <div class="col-sm-6">
              <a href="/cidades" class="btn btn-default btn-block btn-md">Voltar</a>
            </div>
		</div>
	</form>
		
		

@endsection