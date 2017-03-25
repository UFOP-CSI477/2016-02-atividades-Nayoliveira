@extends('layout.master')
	@section('content')
	    <div class=" col-md-10 col-md-offset-1">
	        <div class="panel panel-default">
	            <div class="panel-body">
		            <h1>Cidades</h1>
				    <table class="table table-striped"> 
                    <tr>
                        <th></th>
                    </tr>                    
                        @foreach($cidades as $c)
                            <tr>
                                <td>{{ $c->nome }}</td>
                            </tr>
                        @endforeach
                    </th>
                    </tr>
                </table>
            	</div>
    		</div>
		</div>
	@endsection