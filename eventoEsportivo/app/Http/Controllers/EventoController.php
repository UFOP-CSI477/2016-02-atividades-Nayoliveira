<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index')
        ->with('eventos', $eventos);
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

