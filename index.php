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
                <input class="seunome" type="text" name="nome" required><br>
                <h4>Qual é o seu telefone?</h4>
                <input class="seunome" type="text" name="telefone" required><br>
                <h4>CPF</h4>
                <input class="seunome" type="text" name="cpf" required><br>
                <input class="button" name="enviar" type="submit" value="iniciar jogo">
            </form>
        </div>
    </div>
</body>

</html>

<?php
// atribui a sessao os valores dos formularios apos clicar no botao:
$enviar = filter_input(INPUT_POST, 'enviar' );
if ($enviar) {
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['telefone'] = $_POST['telefone'];
    $_SESSION['cpf'] = $_POST['cpf'];
    $cpf = $_POST['cpf'];

    if (empty($_GET['id'])) {
        header("location: jogador_1/formulario_1.php?#aba-1");
    } else {
        $_SESSION['id'] = $_GET['id'];
        header("location: jogador_2/formulario_1.php?#aba-1");
    }
}


?>