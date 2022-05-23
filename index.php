<?php
//inicia a sessao: 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="index">
        <div class="coluna">
            <img class="logo" src="imagens/LOGO_2_.svg" alt="jogo para casais">
            <form class="formulario_inicial" name="form1" id="form1" action="" method="POST">
                <h4>Qual é o seu nome?</h4>
                <input type="text" name="nomes" required><br>
                <h4>Qual é o seu telefone?</h4>
                <input type="text" name="sobrenomes" required><br>
                <input class="button" name="enviar" type="submit" value="iniciar jogo">
            </form>
        </div>
    </div>
</body>

</html>

<?php
// atribui a sessao os valores dos formularios apos clicar no botao:
$enviar = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);
if ($enviar) {
    $_SESSION['nomes'] = $_POST['nomes'];
    $_SESSION['sobrenomes'] = $_POST['sobrenomes'];


    if (empty($_GET['id'])) {
        header("location: formulario_primario.php");
    } else {
        $_SESSION['id'] = $_GET['id'];
        header("location: formulario_secundario.php");
    }
}


?>