@extends('layout.master')
@section('content')
 	<div class="row">
        <div class="col-md-12">
            <div>
                <h1>Disciplinas</h1>
            </div>
            <table class="table table-striped">              
                <tr>
                    <th></th>
                    <th>Nome</th>
                    <th>Codigo</th>
                    <th>CH</th>
                </tr>
			    @foreach($disciplinas as $d)
					<tr>
						<td>{{ $d->id }}</td>
						<td> <a href="/disciplinas/{{ $d->id }}"> {{ $d->nome }}</a></td>
					    <td>Codigo: {{ $d->codigo}}</td>
					    <td>CH: {{ $d->carga}}</td>
					</tr>
			    @endforeach
			</table>
		</div>
	</div>

@endsection
