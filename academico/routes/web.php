<?php

use App\Aluno;

Route::get('/', function () {
    return view('welcome');
});

Route::get('estados', function () {
	$estados = DB::table('estados')->get();
	return view('estados')->with('estados', $estados);
});

Route::get('cidades', function () {
	$alunos = DB::table('cidades')->get();
	return view('cidades')->with('cidades', $alunos);
});

Route::get('alunosold', function () {
	$alunos = Aluno::all();
	return view('alunos.index')->with('alunos', $alunos);
});

Route::get('/alunosold/{aluno}', function ($id) {
	$aluno = DB::table('alunos')->find($id);
	return view('alunos.show')->with('aluno', $aluno);
});

Route::resource('disciplinas', 'DisciplinaController');
Route::resource('alunos', 'AlunoController');
