<?php

use App\Models\Cliente;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cadastrar/cliente', Create::class);
Route::get('/cadastrar/produto', Create::class);
Route::get('/cadastrar/funcionario', Create::class);
Route::get('/cadastrar/administrador', Create::class);