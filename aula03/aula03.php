<?php
    $nome = 'Fellipe';
    $sobrenome = 'Castro';
    $idade = 16;
    $numero = 2024;
    $diasTrabalhados = 22;
    $valorDia = 90.35;
    $salario = $diasTrabalhados * $valorDia;
    $mensagem;

    if ($salario >= 1000)
        $mensagem = "Bom salário";
    else
        $mensagem = "Salário Ruim";

    $a = 5;
    $b = 10;
    $soma = $a + $b;
    $sub = $a - $b;
    $mult = $a * $b;
    $div = $a / $b;

    echo("Nome: $nome".("<br>"));
    echo("Sobrenome: $sobrenome".("<br>"));
    echo("Idade: $idade".("<br>"));
    echo("Número: $numero".("<br>"));
    echo("Dias trabalhados: $diasTrabalhados".("<br>"));
    echo("Valor dia: $valorDia".("<br>"));
    echo("Salario: $salario".("<br>"));
    echo("$mensagem <br>");

    echo("-----------------------------------------------------<br>");
    echo("A = $a <br>");
    echo("B = $b <br>");
    echo("A + B = $soma <br>");
    echo("A - B = $sub <br>");
    echo("A * B = $mult <br>");
    echo("A / B = $div <br>");
?>