<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Circulo;

class CirculoController extends Controller
{
    //
    public function mostrarArea(){
        $circulo = new Circulo();
        return $circulo->area();
    }
    public function mostraPerimetro(){
        $circulo = new Circulo();
        return $circulo->perimetro();
    }
}
