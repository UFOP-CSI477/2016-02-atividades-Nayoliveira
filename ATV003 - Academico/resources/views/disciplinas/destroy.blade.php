@extends('layouts.master')

@section('content')

        <h1>Mostrar disciplina</h1>

            {!! Form::open(['url' => "/disciplinas/create"]) !!}
              {!! Form::submit('Excluir',['class' => 'btn-danger']) !!}
             {!! Form::close() !!}

          {{ method_field('DELETE') }}
          {{ csrf_field() }}

          Nome: <input type="text" name="nome" value="{{ $disciplina->nome }}" /><br>
          Código: <input type="text" name="codigo" value="{{ $disciplina->codigo }}" /><br>
          CH: <input type="text" name="carga" value="{{ $disciplina->carga }}"  /> <br>

          <a href="/disciplinas" class="btn-primary">Editar</a>			
          <input type="submit" class="btn-danger" value="Excluir"/>
          <a href="/disciplinas" class="btn-primary">Voltar</a>
    {!! Form::close() !!}

@endsection
