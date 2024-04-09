<?php
    echo "Númers pares de 1 ate 10 <br>";
    $i = 0;
    while ($i <= 10) {
        if ($i % 2 == 0) {
            echo "$i <br>";
        };
        $i++;
    };

    echo "<br> <br>";

    echo "Númers impares de 1 ate 10 <br>";
    for ($i = 0; $i <= 10; $i++) {
        if ($i % 2 !== 0) {
            echo "$i <br>";
        };
    };
?>