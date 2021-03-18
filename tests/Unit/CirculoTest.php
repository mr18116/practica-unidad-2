<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Circulo;

class CirculoTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_area()
    {   
        $circulo = new Circulo();
        $area = $circulo->area();
        $areaEsperada = 50.265482457437;
        echo "\nArea = " . $area;
        $this->assertEquals($area, $areaEsperada);
    }

    public function test_perimetro()
    {   
        $circulo = new Circulo();
        $perimetro = $circulo->perimetro();
        $perimetroEsperado = 25.132741228718;
        echo "\nPerimetro = " . $perimetro;
        $this->assertEquals($perimetro, $perimetroEsperado);
    }
}
