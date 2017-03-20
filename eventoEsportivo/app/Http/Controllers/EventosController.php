<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventosController extends Controller
{
     public function index(){
        $eventos = Evento::orderBy('data', 'asc')->get();
        return view('eventos.index')->with('eventos', $eventos);
    }
             

    public function create()
    {
        return view('eventos.create');
    }
    public function store(Request $request)
    {
       
    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {
        
    }
    public function update(Request $request, $id)
    {
       
    }
    function destroy($id)
    {
        //
    }

}

