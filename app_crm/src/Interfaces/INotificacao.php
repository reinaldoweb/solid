<?php

namespace src\Interfaces;

use src\Interfaces;
use src\componentes\Notificacao;

interface INotificacao{
    public function EnviarNotificacao(Notificacao $notificacao);
}