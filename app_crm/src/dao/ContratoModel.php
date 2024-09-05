<?php

namespace src\dao;

use src\BD;

use src\Interfaces\ICadastro;


class ContratoModel extends BD implements ICadastro{


    public function Salvar(){
        echo "Contrato salvo";
    }



}