@extends('layouts.master')
	@section('content')
 <div class="col-sm-10 col-sm-offset-1">
  <h1>Cidades</h1>
  <div class="col-sm-2 vcenter">
    <a href="/cidades/create" class="btn btn-block btn-md btn-success">Inserir</a>
  </div>
  
  <hr>
  <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Estado</th>
          </tr>
        </thead>
        <tbody>
          @foreach($cidades as $c)
            <td>{{ $c->id}}</td>
            <td><a href="/cidades/{{ $c->id }}">{{ $c->nome }}</a></td>
            <td>{{ $c->Estado->nome}}</td></tr>
          @endforeach
        </tbody>
      </table>
	</div>
@endsection