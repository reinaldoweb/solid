<?php


namespace src;

use src\Email;


class Mensageiro{

    private $canal;


    public function getCanal(){
        return $this->canal;
    }


    public function setCanal($canal){
        $this->canal = $canal;
    }

    public function enviarToken():void{

        $classe = '\src\\'.ucfirst($this->getCanal());

        echo $classe;
        echo '<br/>';
        $obj = new $classe();
        $obj->enviar();
    }
}