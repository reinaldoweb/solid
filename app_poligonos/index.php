<?php
require __DIR__.'/vendor/autoload.php';

use src\Quadrado;
use src\Retangulo;

$retangulo = new Retangulo();

$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3>Área do retangulo: '.$retangulo->getArea().'</h3>';



$quadrado = new Quadrado();

$quadrado->setAltura(5);
//$quadrado->setLargura(10);

echo '<h3>Área do Quadrado: '.$quadrado->getArea().'</h3>';



$retangulo = new Quadrado();

$retangulo->setAltura(5);
$retangulo->setLargura(10);

echo '<h3>LSP - Área do retangulo: '.$retangulo->getArea().'</h3>';