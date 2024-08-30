<?php


namespace src;



class Item
{
    private $descricao;
    private $valor;


    public function __construct()
    {
        $this->descricao = '';
        $this->valor = 0;
    }


    public function getDescricao()
    {
        return $this->descricao;
    }

    public function getvalor()
    {
        return $this->valor;
    }

    public function setdescricao(string $descricao)
    {
        $this->descricao = $descricao;
    }

    public function setvalor(float $valor)
    {
        $this->valor = $valor;
    }

    public function itemValido()
    {
        if ($this->descricao == "" || $this->valor <= 0) {
            return false;
        }

        return true;
    }

}