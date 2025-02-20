<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="index.php" method="get">

<fieldset>
    <legend>Informações do Personagem</legend>

    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" placeholder="Nome do personagem" required>

    <br>

    <label for="poder">Poder</label>
    <input type="text" name="poder" id="poder" placeholder="poder do personagem" required>

    <button type="submite">Send</button>

    </fieldset>

</form>

<?php
    if(isset($_GET['nome'])){
        if(empty($_GET['nome'])) {
            echo '<br>nome obrigatorio';
        } else {
            echo $_GET['nome'];
        }
    }

        if(isset($_GET['poder'])){
            if(empty($_GET['poder'])) {
                echo '<br>poder obrigatorio';
            } else {
                echo $_GET['poder'];
            }

    }


    if(isset($_GET['poder'])){
        echo $_GET['poder'];

    }
?>


</body>
</html>