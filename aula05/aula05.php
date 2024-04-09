<?php
    echo "<h1>Usando funções PHP</h1>";

    echo "<h2>Valor de PI</h2>";
    echo (pi());

    echo "<h2>Valor mínimo de 1, 2, 3, 4, 5, 6, 7, 8, 9</h2>";
    echo (min(1, 2, 3, 4, 5, 6, 7, 8, 9));

    echo "<h2>Valor máximo de 1, 2, 3, 4, 5, 6, 7, 8, 9</h2>";
    echo (max(1, 2, 3, 4, 5, 6, 7, 8, 9));

    echo "<h2>Raiz quadrada de 100</h2>";
    echo (sqrt(100));

    echo "<h2>Número aleatório</h2>";
    echo (rand());

    echo "<h2>Palavra aleatória</h2>";
    echo (chr(64+rand(0,25)).chr(64+rand(0,25)).chr(64+rand(0,25)).chr(64+rand(0,25)));
?>