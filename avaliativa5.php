<?php
/*5. Escreva um programa que permita ao usuário inserir os valores dos produtos comprados por um cliente.
O programa deve terminar quando o usuário inserir o valor 0.
Se o usuário digitar um valor negativo não deve ser processado e um novo valor deve ser solicitado como entrada.
Ao final, informe o valor total a pagar, lembrando que, caso as vendas ultrapassem o total de R$ 1.000,00, deverá ser aplicado um desconto de 15%.
*/

$total = 0;

echo "Digite os valores dos produtos (0 para finalizar)\n";
echo "Digite . para centavos\n";

while (true) {
    $valor = (float)readline("Valor do produto: R$ ");

    if ($valor == 0) {
        break;
    }

    if ($valor < 0) {
        echo "Valor inválido. Digite um valor positivo.\n";
        continue;
    }

    $total += $valor;
}

if ($total > 1000) {
    $desconto = $total * 0.15;
    $totalComDesconto = $total - $desconto;
    echo "\nTotal das compras: R$ " . number_format($total, 2, ',', '.');
    echo "\nDesconto aplicado (15%): R$ " . number_format($desconto, 2, ',', '.');
    echo "\nTotal a pagar: R$ " . number_format($totalComDesconto, 2, ',', '.');
} else {
    echo "\nTotal a pagar: R$ " . number_format($total, 2, ',', '.');
}

?>