<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registro;

class RegistroController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = Registro::all();
        return view('adm.index')
        ->with('registros', $registros);
     }
             

    public function create()
    {
        return view('adm.create');
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

