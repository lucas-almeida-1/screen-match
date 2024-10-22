<?php

// 1. Escreva um programa em PHP que exiba seu nome na tela.
echo "Lucas\n";

// 2. Crie um programa em PHP que calcule a média de três notas e exiba o resultado.
$a = 10;
$b = 20;
$c = 30;
$result = ($a + $b +$c) / 3;
echo $result . "\n";

// 3. Elabore um programa em PHP que receba um valor em metros e converta para centímetros.
$distance = 1.5;
$convertMToCm = $distance * 100;
echo "$distance metros convertidos em " . $convertMToCm . " centímetros.\n";

// 4. Desenvolva um programa em PHP que verifique se um ano é bissexto ou não.
$year = $argv[1] ?? 2024;
if ($year % 4 == 0) {
    echo "O ano de $year é bissexto.\n";
}
else {
    echo "O ano de $year não é bissexto.\n";
}

// 5. Escreva um programa em PHP que converta uma temperatura de Celsius para Fahrenheit.
$temperatureC = $argv[1] ?? 0;
$convertTempCtoF = ( ($temperatureC * 9/5) + 32 );
echo "A temperatura de ${temperatureC}°C é dada por " . $convertTempCtoF . "°F\n";

?>