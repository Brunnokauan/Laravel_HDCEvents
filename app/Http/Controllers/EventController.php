<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Brunno";
        $idade = 20;

        $arr = [10,20,30,40,50];

        $nomes = ["Brunno","Arthur", "Kauane", "Carla"];

        return view('welcome',[
            'nome' => $nome,
            'idade2' => $idade,
            'profissao' => "Programador",
            'arr' => $arr,
            'nomes' => $nomes
        ]);
    }

    public function create(){
        return view('events.create');
    }
}
