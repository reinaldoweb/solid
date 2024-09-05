<?php

namespace src\dao;

use src\BD;

use src\Interfaces\ICadastro;

use src\Interfaces\INotificacao;

use src\Interfaces\ILog;

use src\componentes\Log;

use src\componentes\Notificacao;


class UsuarioModel extends BD implements ICadastro, INotificacao, ILog{


    public function Salvar(){
        echo "Usuario salvo";
    }


    public function Alterar(){
        echo "Usuario alterado";
    }


    public function ResgistrarLog(Log $log){
        echo "Log salvo";
    }


    public function EnviarNotificacao(Notificacao $notificacao){
        echo "Notificacao enviada";
    }

}