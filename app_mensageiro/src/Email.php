<?php

namespace src;


class Email implements IMensagemToken{


    public function enviar():void{
        echo "E-mail: Seu token é 553345";
    }
}