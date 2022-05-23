<?php
//inicia a sessao: 
session_start();
?>
<form name="form1" id="form1" action="" method="POST">
    Digite seu nome:
    <input type="text" name="nomes" required><br>
    Digite seu sobrenome:
    <input type="text" name="sobrenomes" required><br>
    <input name="enviar" type="submit" value="Enviar">
</form>

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