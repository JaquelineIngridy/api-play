<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploController extends Controller
{
    public function cadastrar(){
        dd("Testando a rota de cadastro");
    }

    public function index(){
        return view('exemplo');
    }
}
