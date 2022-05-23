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
    <div class="formulario">
        <div class="fundo_form">
            <form class="formulario_inicial" name="form1" id="form1" action="" method="POST">
                Qual é o seu nome?
                <input type="text" name="nomes" required><br>
                Qual é o seu telefone?
                <input type="text" name="sobrenomes" required><br>
                <input name="enviar" type="submit" value="Enviar">
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