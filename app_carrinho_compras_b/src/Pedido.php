<?php

namespace src;

use src\CarrinhoCompra;

class Pedido
{
    private $status;

    private $CarrinhoCompra;

    private $valorPedido;

    public function __construct()
    {
        $this->status = 'Aberto';
        $this->CarrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;

    }

    public function getCarrinhoCompra()
    {
        return $this->CarrinhoCompra;

    }

    public function getStatus()
    {
        return $this->status;
    }
    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function confirmar()
    {
        if ($this->CarrinhoCompra->validarCarrinho()) {
            $this->setStatus('Confirmado');
            return true;
        }
        return false;
    }


}