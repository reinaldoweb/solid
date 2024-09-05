<?php

namespace src\dao;

use src\BD;

use src\Interfaces\ICadastro;

use src\Interfaces\INotificacao;

use src\componentes\Notificacao;

class LeadModel extends BD implements ICadastro, INotificacao{


    public function Salvar(){
        echo "Lead salvo";
    }



    public function EnviarNotificacao(Notificacao $notificacao){
        echo "Notificacao enviada";
    }



}