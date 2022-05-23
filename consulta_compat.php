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
if ($_SESSION['resp1'] == $row_usuario['resp1']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp2'] == $row_usuario['resp2']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp3'] == $row_usuario['resp3']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp4'] == $row_usuario['resp4']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp5'] == $row_usuario['resp5']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp6'] == $row_usuario['resp6']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp7'] == $row_usuario['resp7']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp8'] == $row_usuario['resp8']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp9'] == $row_usuario['resp9']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp10'] == $row_usuario['resp10']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp11'] == $row_usuario['resp11']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp12'] == $row_usuario['resp12']) {
    $_SESSION['compat'] += 1;
}

echo $_SESSION['compat'] . " respostas iguais!";
