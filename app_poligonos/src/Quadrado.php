<?php

namespace src;

class Quadrado extends Retangulo{

public function setAltura(float $altura): void{
    $this->altura = $altura;
    $this->largura = $altura;
}

public function setLargura(float $largura): void{
    $this->altura = $largura;
    $this->largura = $largura;
}

}