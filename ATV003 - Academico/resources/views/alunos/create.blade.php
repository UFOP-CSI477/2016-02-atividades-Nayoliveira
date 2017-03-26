@extends('layouts.master')
	@section('content')
<h1>Inserir aluno</h1>
    <hr>
	<form action="/alunos" method="post">
	{{ csrf_field() }}

		<div class="row">
			<div class="col-sm-4">
				<div class="form-group">
		          <label for="nome">Nome</label>
		          <input type="text" class="form-control" name="nome" />
		        </div>
				<div class="form-group">
		          <label for="rua">Rua</label>
		          <input type="text" class="form-control" name="rua" />
		        </div>
		        <div class="form-group">
		          <label for="numero">Número</label>
		          <input type="text" class="form-control" name="numero" />
		        </div>
			</div>
			<div class="col-sm-4">	        
		        <div class="form-group">
		          <label for="bairro">Bairro</label>
		          <input type="text" class="form-control" name="bairro" />
		        </div>
		        <div class="form-group">
		          <label for="cep">Cep</label>
		          <input type="text" class="form-control" name="cep" maxlength="8" />
		        </div>
				<div class="form-group">
		          <label for="mail">Email</label>
		          <input type="text" class="form-control" name="mail" />
		        </div>
			
			</div>
			<div class="col-sm-4">
				<div class="form-group">
					<label for="cidade_id">Cidade</label>
					<select name="cidade_id" class="form-control">
						@foreach($cidades as $c)
							<option value="{{$c->id}}">{{$c->nome}}</option>
						@endforeach
					</select>
				</div>
			</div>
		</div>
		<hr>
		<div class="col-sm-10 col-sm-offset-1">	        
              <input type="submit" value="Salvar" class="btn  btn-success btn-md"/>
              <a href="/alunos" class="btn btn-default btn-md">Voltar</a>
        </div>
	</form>

	@endsection