<?php
session_start();
//conexao com o banco de dados:
$host = "localhost";
$user = "root";
$pass = "";
$database = "nissei";


$link = mysqli_connect($host, $user, $pass, $database);
$_SESSION['compat'] = 0;
$id = $_SESSION['id'];
$result_id = "SELECT * FROM resp_namorados WHERE id = '$id'";
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
if ($_SESSION['resp13'] == $row_usuario['resp13']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp14'] == $row_usuario['resp14']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp15'] == $row_usuario['resp15']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp16'] == $row_usuario['resp16']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp17'] == $row_usuario['resp17']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp18'] == $row_usuario['resp18']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp19'] == $row_usuario['resp19']) {
    $_SESSION['compat'] += 1;
}
if ($_SESSION['resp20'] == $row_usuario['resp20']) {
    $_SESSION['compat'] += 1;
}


?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>formulario_primario</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>



<body>
  <div class="index_primaria">
    <img class="logo2" src="../imagens/LOGO_2_.svg" alt="jogo para casais">
    <div class="container">

      <!-- Aqui, criação da primeira aba -->
      <form class="formulario" method="POST" action="formulario_2.php?#aba-2">
        <div class="conteudo">
          <section class="conteudo1" id="aba-1">
              <h1>Você acertou...</h1>
         <?php echo $_SESSION['compat'] . " PTS";?>
         <P>MEU DEUS! QUE CASALZÃO É ESSE? Vocês <BR>são os últimos Romeu e Julieta!</P>
         <div>Faça agora o seu e envie<br> para o mozão
             <button class="button">Iniciar jogo</button>
         </div>
          </section>
        </div>
      </form>
    </div>
  </div>
</body>

</html>
