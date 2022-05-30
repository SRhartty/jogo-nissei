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
  <title>formulario_primario</title>
  <link rel="stylesheet" type="text/css" href="../style.css">
</head>



<body>
  <div class="index_primaria">
    <img class="logo2" src="../imagens/LOGO_2_.svg" alt="jogo para casais">
    <div class="container">
      <!-- Criando a listagem -->
      <div class="abas">
        <div class="aba" id="aba-1">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-2">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-3">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-4">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-5">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-6">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-7">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-8">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-9">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-10">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-11">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
      </div>



      <!-- Aqui, criação da primeira aba -->
      <form class="formulario" method="POST" action="formulario_11.php">
        <div class="conteudo">
          <section class="conteudo1" id="aba-1">
            <h2 class="sub">Você gosta mais de...</h2>
            <div class="linhaimg">
            <input name="resp1" type="radio" value="01" id="i1">
            <label class="radioimg" for="i1">
              <div>
              <img class="imgform" src="../imagens/doce.jpg" alt="">
              <h2 class="subimg">Doce</h2>
              </div>
            </label>

            <input name="resp1" type="radio" value="02" id="i2" required>
            <label class="radioimg" for="i2">
              <div>
              <img class="imgform" src="../imagens/salgado.jpg" alt="">
              <h2 class="subimg">Salgado</h2>
              </div>
            </label>
            </div>
            <input class="button" type="submit" name="enviar">
          </section>
        </div>
      </form>
    </div>
  </div>
</body>

</html>

<?php
// atribui a sessao os valores dos formularios apos clicar no botao:
$enviar = filter_input(INPUT_POST, 'enviar');
if ($enviar) {
  $_SESSION['resp10'] = $_POST['resp1'];
  //header('Location: formulario_11.php?#aba-11');
}


?>