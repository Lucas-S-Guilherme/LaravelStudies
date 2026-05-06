<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showView(): View
    {
        // método 1

        /*
        $data = [
            'name' => "Lucas Guilherme",
            'phone' => '123123123'
        ];

        return view('admin.newPage3', $data);
        */

        # Método 2
        /*
        return view('admin.newPage3', [
            'name' => "Lucas Guilherme",
            'phone' => '123123123'
        ]);
        */

        # Método 3
        /*
        return view('admin.newPage3')
        ->with('name', "João Ribeiro")
        ->with('phone', '123123123');
        */

        #Método 4
        $name = "João Ribeiro";
        $phone = "12345678000000000000";

        return view('admin.newPage3', compact('name', 'phone'));

    }
}
