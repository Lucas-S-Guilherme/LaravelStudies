<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        echo 'index';
    }

    public function about()
    {
        echo 'about';
    }

    public function mostrarValor($valor)
    {
        echo "Valor enViado pela rota: $valor";
    }

    public function mostrarValores($valor1, $valor2)
    {
        echo "Valores enviados pela rota: $valor1 e $valor2";
    }

    public function mostrarValores2(Request $request, $valor1, $valor2)
    {
        echo "Valores enviados pela rota: $valor1 e $valor2";
    }

    public function mostrarValorOpcional ($valor = null)
    {
        echo "Valor opcional: $valor";
    }

    public function mostrarValorOpcional2 ($valor1, $valor2 = "valor padrão - sem inserção de nada")
    {
        echo "Valor Obrigatório $valor1, E Valor opcional: $valor2";
    }

    public function mostrarPosts($user_id, $post_id)
    {
        echo "Posts do usuário ID: $user_id e o post com ID: $post_id";
    }


}
