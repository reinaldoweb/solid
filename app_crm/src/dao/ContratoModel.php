<?php

namespace src\dao;

use src\BD;

use src\Interfaces\ICadastro;

use src\componentes\Log;

use src\componentes\Notificacao;

class ContratoModel extends BD implements ICadastro{


    public function Salvar(){
        echo "Contrato salvo";
    }


    public function ResgistrarLog(Log $log){
        echo "Log salvo";
    }


    public function EnviarNotificacao(Notificacao $notificacao){
        echo "Notificacao enviada";
    }



}