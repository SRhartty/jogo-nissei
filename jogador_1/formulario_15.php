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
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-13">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-14">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-15">
          <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-16">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-17">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-18">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-19">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-20">
          <h1><img class="vetor" src="../imagens/coracaov.svg" alt=""></h1>
        </div>
      </div>



      <!-- Aqui, criação da primeira aba -->
      <form class="formulario" method="POST" action="formulario_16.php?#aba-15">
        <div class="conteudo">
          <section class="conteudo1" id="aba-1">
            <h2 class="sub">Nao troca por nada seu...</h2>
           
            <input name="resp1" type="radio" value="02" id="i2" required>
            <label class="radio" for="i2">
              <h2 class="resp">Playstation</h2>
            </label>

            <input name="resp1" type="radio" value="03" id="i3">
            <label class="radio" for="i3">
              <h2 class="resp">Xbox</h2>
            </label>

            <input name="resp1" type="radio" value="04" id="i4">
            <label class="radio" for="i4">
              <h2 class="resp">Nintendo switch</h2>
            </label>
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
$enviar = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);
if ($enviar) {
  //header('Location: formulario_2.php?#aba-2');
  $_SESSION['resp15'] = $_POST['resp1'];
 
}

?>