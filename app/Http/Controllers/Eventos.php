<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evento;

class Eventos extends Controller
{
    function index() {
        $eventos = Evento::all();
        $titulo = 'Relatório de eventos';
        return view('eventos', compact(['eventos', 'titulo']));
    }
}
