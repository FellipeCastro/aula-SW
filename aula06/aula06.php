<?php
    $linguagem = "portugues";

    if ($linguagem == "ingles") {
        echo "Hello World";
    } else if ($linguagem == "portugues") {
        echo "Olá Mundo";
    } else {
        echo "Linguagem não identificada";
    }

    echo "<br>";

    $hora = date("H") - 3;
     if ($hora < 12) {
        echo "BOM DIA: $hora horas";
     } else {
        echo "BOA NOITE: $hora horas";
     }
?>
