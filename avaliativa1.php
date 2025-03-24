<?php
/* 1. Escreva um programa que leia o número inicial, leia o número final (número inicial sempre menor que o final) 
e imprima-os (eles e os números sequenciais até o maior ou menor) na tela, em ordem decrescente.*/

$numeroInicial = (int)readline("Digite o número inicial: ");
$numeroFinal = (int)readline("Digite o número final: ");

if ($numeroInicial >= $numeroFinal) {
    echo "O número inicial deve ser menor que o número final!\n";
} else {
    echo "Números em ordem decrescente:\n";
    for ($i = $numeroFinal; $i >= $numeroInicial; $i--) {
        echo $i . "\n";
    }
}
?>