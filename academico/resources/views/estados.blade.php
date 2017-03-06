@extends('layout.master')
    @section('content')
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h1>Estados</h1>
                </div>
                <table class="table table-striped"> 
                    <tr>
                        <th></th>
                    </tr>
                    
                        @foreach($estados as $e)
                            <tr>
                                <td>{{ $e->nome }}</td>
                            </tr>
                        @endforeach
                    </th>
                    </tr>
                </table>
            </div>
        </div>
    @endsection