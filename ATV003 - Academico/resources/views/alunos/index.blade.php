@extends('layouts.master')
	@section('content')
	    <div class=" col-md-10 col-md-offset-1">
	    	<div class="panel panel-default">
	    		<div class="panel-body">
	    			<table class="table table-striped">
	    				<h1>Alunos</h1>
	    				<thead>
	    				<tr>
	    					<th>Nome</th>
    					</tr>
	    				</thead>                   
	    				@foreach($alunos as $a)
                            <tr>
                                <td><a href="/alunos/{{ $a->id }}">{{ $a->nome }}</a></td>
                            </tr>
                        @endforeach
                    </table>
			   </div>
	        </div>
	    </div>
	@endsection