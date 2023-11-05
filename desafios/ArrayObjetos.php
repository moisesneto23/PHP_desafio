<?php

$pessoas = array(
 array("nome" => "maria", "estado" => "RJ"),
 array("nome" => "jose" , "estado" => "sp", "idade" => 25)
);
echo($pessoas[0]["estado"] . "\n") ;
echo($pessoas[1]["idade"]. "\n") ;

//adicionando função

function soma( float $a, float $b): float {
    return $a + $b;
}

echo soma(25,13);