<?php
/* 4.Escreva um programa que leia n números inteiros a partir do teclado, até que o usuário digite 0 (para parar a somatória).
Ao final, mostre a soma de todos os números digitados. */

$soma = 0;

while (true) {
    $numero = (int)readline("Digite um número (0 para parar): ");
    if ($numero === 0) {
        break;
    }
    $soma += $numero;
}

echo "A soma dos números digitados é: $soma\n";

?>