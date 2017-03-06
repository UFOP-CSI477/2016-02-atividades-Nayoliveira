@extends('layout.master')
@section('content')
	<body>
		<div class=" col-md-10 col-md-offset-1">
	        <h1>Inserir disciplina</h1>
			<div class="panel panel-default">
		        <div class="panel-body">
						{!! Form::open(['url' => '/disciplinas']) !!}

						{!! Form::label('nome', 'Nome') !!}
						{!! Form::input('text', 'nome', '' ,['class' => 'form-control', 'autofocus', 'placeholder' => 'Insira o nome da disciplina']) !!}

						{!! Form::label('codigo', 'Codigo') !!}
						{!! Form::input('text', 'codigo', '' ,['class' => 'form-control', 'autofocus', 'placeholder' => 'Insira o codigo da disciplina']) !!}
						
						{!! Form::label('carga', 'CH') !!}
						{!! Form::input('text', 'carga', '' ,['class' => 'form-control', 'autofocus', 'placeholder' => 'Insira a carga horária']) !!}

						{!! Form::submit('Salvar',['class' => 'btn-primary']) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</body>
@endsection
