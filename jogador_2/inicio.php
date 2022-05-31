<?php

session_start();
$_SESSION['id'] = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>

<body>
    <div class="index">
        <div class="coluna">
            <img class="logo" src="../imagens/LOGO_2_.svg" alt="jogo para casais">
            <form class="form" name="form1" id="form1" action="formulario_1.php" method="POST">
                
                <input class="button" name="iniciar" type="submit" value="iniciar jogo">
            </form>
        </div>
    </div>
</body>

</html>