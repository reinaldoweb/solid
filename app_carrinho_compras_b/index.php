<?php

require __DIR__ . "/vendor/autoload.php";


use src\CarrinhoCompra;
use src\Item;
use src\Pedido;
use src\EmailService;



echo "<h3>Com SRP</h3>";


$pedido = new Pedido();

$item1 = new Item();
$item2 = new Item();

$item1->setDescricao("Camiseta");
$item1->setvalor(89.90);
$item2->setdescricao("Calça");
$item2->setvalor(159.90);

echo "<h4>Pedido Iniciado</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";

$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);



echo "<h4>Pedido com itens</h4>";
echo "<pre>";
print_r($pedido);
echo "</pre>";


echo "<h4>Itens do carrinho</h4>";
echo "<pre>";
print_r($pedido->getCarrinhoCompra()->getItens());
echo "</pre>";




echo "<h4>Valor do Pedido</h4>";
$total = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
	$total += $item->getValor();
}

echo $total;


echo "<h4>Carrinho está valido</h4>";

echo $pedido->getCarrinhoCompra()->validarCarrinho();


echo "<h4>Status do pedido</h4>";
echo $pedido->getStatus();


echo "<h4>Cofirmar pedido</h4>";
echo $pedido->confirmar();


echo "<h4>Email</h4>";
if ($pedido->getStatus() == "Confirmado") {
	echo EmailService::dispararEmail();
}
;
















/*
print_r($carrinho1->ExibirItens());

echo "Valor total:" . $carrinho1->exibirValorTotal();

$carrinho1->AdicionarItem("Camiseta", 89.90);
$carrinho1->AdicionarItem("Calça", 159.90);
$carrinho1->AdicionarItem("Bermuda", 78.90);
$carrinho1->AdicionarItem("Camisa Social", 259.90);
$carrinho1->AdicionarItem("Sapato", 220.89);
$carrinho1->AdicionarItem("Gravata", 59.90);

echo "<br/>";
print_r($carrinho1->ExibirItens());
echo "Valor total recalculado:" . $carrinho1->exibirValorTotal();
echo "<br/>";
echo "Stastus:" . $carrinho1->exibirStatus();

echo "<br/>";
if ($carrinho1->confirmarPedido()) {
	echo "Pedido realizado com sucesso!";
} else {
	echo "Erro ao realizar o pedido. (Carrinho vazio)";
}

echo "<br/>";
echo "Stastus:" . $carrinho1->exibirStatus();
*/