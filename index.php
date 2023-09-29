<?php
// Criar um array de 10 a 20 com um loop for
$numeros = [];
for ($i = 10; $i <= 20; $i++) {
    $numeros[] = $i;
}

// Fazer um loop no array criado dinamicamente
foreach ($numeros as $numero) {

// Verificar se o número é ímpar
    if ($numero % 2 !== 0) {

 // Imprimir apenas os números ímpares
        echo $numero . "\n";
    }
}
?>
