<?php
    // Variável de tipo inteiro
    $inteiro = 42;
    echo "<p>Variável inteira: " . $inteiro . "</p>";

    // Variável de tipo string
    $string = "oi professor!";
    echo "<p>Variável string: " . $string . "</p>";

    // Variável de tipo array
    $array = ["Maçã", "Banana", "Laranja"];
    echo "<p>Variável array:</p>";
    foreach ($array as $fruta) {
        echo "<li>" . $fruta . "</li>";
    }
    ?>