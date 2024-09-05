<?php

namespace src\Interfaces;

use src\componentes\Log;
use src\componentes\Notificacao;

interface ICadastro{

    public function Salvar();
    public function ResgistrarLog(Log $log);
    public function EnviarNotificacao(Notificacao $notificacao);
}