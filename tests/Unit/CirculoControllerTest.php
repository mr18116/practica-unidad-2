<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\CirculoController;

class CirculoControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_area()
    {
        $circulo = new CirculoController();
        $area = $circulo->mostrarArea();
        $areaEsperada = 50.265482457437;

        $this->assertEquals($area, $areaEsperada);
    }

    public function test_perimetro()
    {
        $circulo = new CirculoController();
        $perimetro = $circulo->mostraPerimetro();
        $perimetroEsperado = 25.132741228718;

        $this->assertEquals($perimetro, $perimetroEsperado);
    }
}
