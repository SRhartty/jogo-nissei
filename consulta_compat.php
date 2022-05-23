<?php
session_start();
//conexao com o banco de dados:
$host = "localhost";
$user = "root";
$pass = "";
$database = "jogo";


$link = mysqli_connect($host, $user, $pass, $database);
$_SESSION['compat'] = 0;
$id = $_SESSION['id'];
$result_id = "SELECT * FROM resp_primaria WHERE id = '$id'";
$resultado_id = mysqli_query($link, $result_id);

$row_usuario = mysqli_fetch_assoc($resultado_id);
if ($_SESSION['resp1'] == $row_usuario['respostas']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp2'] == $row_usuario['resp2']) {
    $_SESSION['compat'] += 1;
}

echo $_SESSION['compat'] . " respostas iguais!";
