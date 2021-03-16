<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Circulo extends Model
{
    use HasFactory;

    public $radio = 4.0;
    public $centrox = 0.0;
    public $centroy = 0.0;

    public function area(){
        return pi()*pow($this->radio, 2);
    }

    public function perimetro(){
        return 2*pi()*$this->radio;
    }
}