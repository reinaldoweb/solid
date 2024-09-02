<?php

require __DIR__ . '/vendor/autoload.php';

use src\Leitor;

//--------------TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');
$array_txt = $leitorTXT->lerArquivo();

//--------------CSV
$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$araay_csv = $leitorCSV->lerArquivo();

echo '<pre>';
    print_r(array_merge($array_txt, $araay_csv));
'</pre>';