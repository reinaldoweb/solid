<?php

require __DIR__ . "/vendor/autoload.php";


use App\CarrinhoCompra;

$carrinho1 = new CarrinhoCompra();
echo "<h3>Sem SRP</h3>";
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
