<?php

namespace App;


class CarrinhoCompra
{

	//Atributos

	private $itens;
	private $status;
	private $valorTotal;


	//Metodos


	public function __construct()
	{
		$this->itens = [];
		$this->status = 'aberto';
		$this->valorTotal = 0;
	}


	public function ExibirItens()
	{
		return $this->itens;
	}

	public function AdicionarItem(string $item, float $valor)
	{
		array_push($this->itens, ['item' => $item, 'valor' => $valor]);
		$this->valorTotal += $valor;
	}
	public function exibirValorTotal()
	{
		return $this->valorTotal;
	}

	public function exibirStatus()
	{
		return $this->status;
	}

	public function confirmarPedido()
	{

		if ($this->validarCarrinho()) {

			$this->status = 'Confirmado';
			$this->enviarEmailConfirmacao();
			return true;
		}

		return false;
	}

	public function enviarEmailConfirmacao()
	{
		echo '<br />.....Enviar Email de confirmação....<br />';
	}

	public function validarCarrinho()
	{

		return count($this->itens) > 0;
	}

}