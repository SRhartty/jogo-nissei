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
          <h1><img class="vetor" src="../imagens/Vector 1.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-2">
          <h1><img class="vetor" src="../imagens/Vector 2.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-3">
          <h1><img class="vetor" src="../imagens/Vector 3.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-4">
          <h1><img class="vetor" src="../imagens/Vector 4.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-5">
          <h1><img class="vetor" src="../imagens/Vector 5.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-6">
          <h1><img class="vetor" src="../imagens/Vector 6.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-7">
          <h1><img class="vetor" src="../imagens/Vector 7.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-8">
          <h1><img class="vetor" src="../imagens/Vector 8.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-9">
          <h1><img class="vetor" src="../imagens/Vector 9.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-10">
          <h1><img class="vetor" src="../imagens/Vetor 10.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-11">
          <h1><img class="vetor" src="../imagens/Vetor 11.svg" alt=""></h1>
        </div>
        <div class="aba" id="aba-12">
          <h1><img class="vetor" src="../imagens/Vetor 12.svg" alt=""></h1>
        </div>
      </div>



      <!-- Aqui, criação da primeira aba -->
      <form class="formulario" method="POST">
        <div class="conteudo">
          <section class="conteudo1" id="aba-1">
            <h2 class="sub">Para começar bem o dia, você gosta de...</h2>
            <input name="resp1" type="radio" value="01" id="i1">
            <label class="radio" for="i1">
              <h2 class="resp">Um banho bem gelado.</h2>
            </label>

            <input name="resp1" type="radio" value="02" id="i2" required>
            <label class="radio" for="i2">
              <h2 class="resp">Uma xicara de cafe quentinho.</h2>
            </label>

            <input name="resp1" type="radio" value="03" id="i3">
            <label class="radio" for="i3">
              <h2 class="resp">Um banho bem quente</h2>
            </label>

            <input name="resp1" type="radio" value="04" id="i4">
            <label class="radio" for="i4">
              <h2 class="resp">Mais cinco minutos de sono.</h2>
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
$enviar = filter_input(INPUT_POST, 'resp1', FILTER_SANITIZE_STRING);
if ($enviar) {
  $_SESSION['resp9'] = $_POST['resp1'];
  header('Location: formulario_10.php?#aba-10');
}


?>