<?php
    function palavraAleatoria($letras) {
        $palavra = "";
        
        for ($i = 0; $i < $letras; $i++) {
            $palavra .= chr(65 + rand(0,25));
        };

        return $palavra;
    };

    echo "<h2>Palavra aleatória</h2>";
    echo palavraAleatoria(4);

    echo "<br> <br>";
    
    $i = 0;
    do {
        if ($i % 3 == 0) {
            echo "PIN <br>";
        };
        echo "$i <br>";
        $i++;
    } while ($i <= 10); 

?>
