<?php
    // Mostrar informações na tela
    echo('<h1>Hello World</h1>'); // melhor opção (segundo profº)
    print('<p>Hello World</p>');

    // comentário

    # cometário tbm

    /*
        outro comentário tbm
    */

    $nome = 'Fellipe';
    $sobrenome = 'Castro';
    $idade = 16;
    $numero = 2024;
    $dia = 22;
    $valorDia = 90.35;
    $salario = $dia * $valorDia;

    echo("Nome: $nome".("<br>"));
    echo("Sobrenome: $sobrenome".("<br>"));
    echo("Idade: $idade".("<br>"));
    echo("Número: $numero".("<br>"));
    echo("Dia: $dia".("<br>"));
    echo("Valor dia: $valorDia".("<br>"));
    echo("Salario: $salario".("<br>"));
?>