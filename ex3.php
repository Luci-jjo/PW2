<?php
    $idade = 60;

    if ($idade < 12) {
        echo "Criança";
    } else if ($idade >12 && $idade <18) {
        echo "Adolescente";
    } else if ($idade >= 60) {
        echo "Idoso";
    } else {
        echo "Adulto";
    }

?>