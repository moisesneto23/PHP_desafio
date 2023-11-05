<?php
echo("digite o valor do produto") . "\n";
$valorProduto = fgets(STDIN) ."\n";
echo("digite a quantidade do produto") . "\n";
$quantidade = fgets(STDIN) ."\n";

$valor = $valorProduto * $quantidade;
echo(" o valor total é: ". $valor);