<?php

namespace src\Poligonos;

class Quadrado {

    protected $largura;
    protected $altura;

public function setAltura(float $altura): void{
    $this->altura = $altura;
    $this->largura = $altura;
}


public function setLargura(float $largura): void{
    $this->altura = $largura;
    $this->largura = $largura;
}

    public function getLargura(): float
    {
        return $this->largura;
    }

    public function getAltura(): float{
    return $this->altura;
}


}