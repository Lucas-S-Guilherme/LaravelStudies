<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        echo 'apresentar a página inicial';
    }

    public function makeExercises(Request $request)
    {
        echo 'faz os exercícios';
    }

    public function printExercises()
    {
        echo 'mostra na tela os exercícios';
    }

    public function exportExercises()
    {
        echo 'exporta os exercícios para um arquivo.';
    }
}
