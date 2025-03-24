<?php
// 3.Escreva um programa que solicite um número, após ele deve contar o número total de dígitos e mostrar o resultado

$numero = readline("Informe um número qualquer: ");

if (!empty($numero)) {
    $totalDigitos = strlen((string)$numero);
    echo "O número $numero tem $totalDigitos dígitos.";
} else {
    echo "Erro, número não informado!";
}
