@extends('layouts.master')

@section('content')

<div class=" col-md-10 col-md-offset-1">
  <div class="panel panel-default">
    <div class="panel-body">
      <table class="table table-striped">
        <tr>          
          <div class="col-sm-2 vcenter">
            <h1>Estados</h1>
            <a href="/estados/create" class="btn btn-md btn-primary">Inserir</a>
          </div>
        </tr>
        <br>
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Sigla</th>
          </tr>
        </thead>
        <tbody>
          @foreach($estados as $e)
          <td>{{ $e->id}}</td>
          <td><a href="/estados/{{$e->id }}">{{ $e->nome }}</a></td>
          <td>{{ $e->sigla}}</td></tr> 
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection