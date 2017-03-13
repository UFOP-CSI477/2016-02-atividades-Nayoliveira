@extends('layout.master')

@section('content')

	<style>
	    .table-striped>tr:nth-child(odd){
	        background-color:red;

	    }
	</style>
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-md-12">
	            <div>
	                Eventos
	            </div>
	            <table class="table table-striped">              
	                <tr>
	                    <th></th>
	                    <th>Nome</th>
	                    <th>Preço</th>
	                    <th>Data</th>
	                </tr>
	                 @foreach ($eventos as $e) 
		                <tr>
		                	<td>{{$e->id}}</td>
		                    <td><a href="/produto/{{$e->id}}"> {{$e->nome}} </a></td>
		                    <td>R${{$e->preco}}</td>
		                    <td>{{$e->data}}</td>
		                </tr>
	                @endforeach
		         </table>
	        </div>
	    </div>
	</div>
@endsection
