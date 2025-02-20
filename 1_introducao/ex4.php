<?php
    $nota = "B";

    if ($nota === "I") {
        echo "Reprovado";
    } else if ($nota === "R" || $nota === "B" || $nota === "MB") {
        echo "Aprovado";
    } else {
        echo "Nota inválida";
    }

?>