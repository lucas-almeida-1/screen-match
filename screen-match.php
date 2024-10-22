<?php

echo "Bem-vindo(a) ao\t\tscreen match!\n"; // "\n" quebra linha, "\t" gera um espaçamento

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Thor: Ragnarok";
$nomeFilme = "Se beber não case";

$anoLancamento = $argv[1] ?? 2022; // operador de coalescência nula(??) é usado para exibir um resultado padrão de uma variável
// $somaNotas = 9 + 6 + 8 + 7.5 + 5;
$somaNotas = 9;
$somaNotas += 6;
$somaNotas += 8;
$somaNotas += 7.5;
$somaNotas += 5;

$notaFilme = $somaNotas / 5;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;

echo 'Nome do filme: '. $nomeFilme . "\n"; // Ponto serve para concatenar strings // Aspas simples('') não interpreta o código, logo não funciona o \n ou \t etc. Para isso, use aspas duplas(""). Não tem vantagem de uso, depende de como sua equipe define o uso.
echo "Nota do Filme: " . $notaFilme . "\n";
echo "Ano de Lançamento: " . $anoLancamento . "\n";

if ($anoLancamento > 2022) {
    echo "Esse filme é um lançamento\n";
} elseif($anoLancamento > 2020 && $anoLancamento <= 2022) {
    echo "Esse filme ainda é novo\n";
} else {
    echo "Esse filme não é um lançamento\n";
}

$genero = match($nomeFilme) {
    "Top Gun - Maverick" => "ação",
    "Thor: Ragnarok" => "super-herói",
    "Se beber não case" => "comédia",
    default => "gênero desconhecido",
};

echo "O gênero do filme $nomeFilme é $genero\n";

?>