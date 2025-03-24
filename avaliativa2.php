<?php
/*  2. Escreva um programa que solicite um número de 1 a 10 e imprima a sua tabuada, baseado no número final digitado(inclusive). 
Por exemplo: Digite o valor da tabuada: 5, depois digite o valor final 15.
 */

 $baseNumber = (int)readline("Digite de 1 a 10 para a base da tabuada: ");
 $finalNumber = (int)readline("Digite um número final: ");
 
 if ($baseNumber >= 1 && $baseNumber <= 10) {
     for ($i = 0; $i <= $finalNumber; $i++) {
         $result = $baseNumber * $i;
         echo "$baseNumber x $i = $result\n";
     }
 } else {
     echo "Por favor, digite um número entre 1 e 10.";
 }
 
 ?>