<?php
    $idade = 14;
    $pessoa;

    if ($idade >= 0 and $idade <= 12) {
        $pessoa = "Criança";
    } else if ($idade > 12 and $idade < 18) {
        $pessoa = "Adolescente";
    } else if ($idade >= 18) {
        $pessoa = "Adulto";
    };

    $hora = date("H") - 3;

    if ($hora >= 0 and $hora < 6) {
        echo "Boa madrugada $pessoa, são $hora horas";
    } else if ($hora >= 6 and $hora <= 12) {
       echo "Bom dia $pessoa, são $hora horas";
    } else if ($hora > 12 and $hora <= 18) {
       echo "Boa tarde $pessoa, são $hora horas";
    } else if ($hora > 18 and $hora <= 23) {
        echo "Boa noite $pessoa, são $hora horas";
    }

    echo "<br>";

    $favColor = 'verde';

    switch ($favColor) {
        case "vermelho": 
            echo "Sua cor favorita é vermelho";
            break;
        case "azul": 
            echo "Sua cor favorita é azul";
            break;
        case "verde": 
            echo "Sua cor favorita é verde";
            break;
        default: 
            echo "Sua cor favorita não é vermelho, azul nem verde";
    };
?>