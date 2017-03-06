@extends('layout.master')
	@section('content')
	    <div class=" col-md-10 col-md-offset-1">
	        <div class="panel panel-default">
	            <div class="panel-body">
	            	<h1>Alunos</h1>
	            	<table class="table table-striped"> 
				        <tr>
                        <th></th>
                    </tr>                    
                       @foreach($alunos as $a)
                            <tr>
                                <td><a href="/alunos/{{ $a->id }}">{{ $a->nome }}</a></td>
                            </tr>
                        @endforeach
                    </th>
                    </tr>
                    </table>
			   </div>
	        </div>
	    </div>
	@endsection