@extends('layouts.master')

@section('content')

        <h1>Inserir estado</h1>
        <hr>
        <form method="post" action="/estados">

          {{ csrf_field() }}
          
          <div class="col-sm-6">
            <div class="form-group">
              <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome" />
            </div>

            <div class="form-group">
              <label for="codigo">Sigla</label>
              <input type="text" class="form-control" name="sigla" maxlength="2" />
            </div>
            <input type="submit" class="btn btn-primary" value="Salvar"/>

          <a href="/estados" class="btn btn-primary">Voltar</a>
            
          </div>
        </form>
@endsection