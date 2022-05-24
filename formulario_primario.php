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
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <div class="index_primaria">
    <img class="logo2" src="imagens/LOGO_2_.svg" alt="jogo para casais">
    <form action="" method="post">
    <div class="coluna">
      <!-- Criando a listagem -->
      <div class="abas">
        <!-- Aqui, criação da primeira aba -->
        <div class="aba" id="aba-1">
          <h1><img class="vetor" src="imagens/Vector 1.svg" alt=""></h1>
          <section class="conteudo">
            <h2 class="sub">Para começar bem o dia, você gosta de...</h2>

            <input name="resp1" type="radio" value="01" id="i1" onclick="window.location='#aba-2';">
            <label class="radio" for="i1">
              <h2 class="resp">Um banho bem gelado.</h2>
            </label>


            <input name="resp1" type="radio" value="02" id="i2" onclick="window.location='#aba-2';">
            <label class="radio" for="i2">
              <h2 class="resp">Uma xicara de cafe quentinho.</h2>
            </label>

            <input name="resp1" type="radio" value="03" id="i3" onclick="window.location='#aba-2';">
            <label class="radio" for="i3">
              <h2 class="resp">Um banho bem quente</h2>
            </label>

            <input name="resp1" type="radio" value="04" id="i4" onclick="window.location='#aba-2';">
            <label class="radio" for="i4">
              <h2 class="resp">Mais cinco minutos de sono.</h2>
            </label>
          </section>
        </div>
        <!-- Aqui, criação da segunda aba -->
        <div class="aba" id="aba-2">
          <h1><img class="vetor" src="imagens/Vector 2.svg" alt=""></h1>
          <section class="conteudo">

            <h2 class="sub">Você gosta mais de...</h2>
            <div class="linhaimg">
              <input name="resp2" type="radio" value="01" id="i1" onclick="window.location='#aba-3';">
              <label class="imagem" for="i1">
                <img class="respimg" src="imagens/dia.png" alt="">
              </label>
              
              <input name="resp2" type="radio" value="02" id="i2" onclick="window.location='#aba-3';">
              <label class="imagem" for="i2">
                <img class="respimg" src="imagens/noite.png" alt="">
              </label>
            </div>

          </section>
        </div>

        <!-- Aqui, criação da terceira aba -->
        <li class="aba" id="aba-3">
          <h1><img class="vetor" src="imagens/Vector 3.svg" alt=""></h1>
          <section class="conteudo">
            <table border="1">
              <tbody>
                <tr>
                  <td><input class="resp1" name="resp3" type="radio" value="01" required>Resposta 1</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp3" type="radio" value="02">Resposta 2</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp3" type="radio" value="03">Resposta 3</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp3" type="radio" value="04">Resposta 4</td>
                </tr>
              </tbody>
            </table>
          </section>
        </li>

        <!-- Aqui, criação da quarta aba -->
        <li class="aba" id="aba-4">
          <h1><img class="vetor" src="imagens/Vector 4.svg" alt=""></h1>
          <section class="conteudo">
            <table border="1">
              <tbody>
                <tr>
                  <td><input class="resp1" name="resp4" type="radio" value="01" required>Resposta 1</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp4" type="radio" value="02">Resposta 2</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp4" type="radio" value="03">Resposta 3</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp4" type="radio" value="04">Resposta 4</td>
                </tr>
              </tbody>
            </table>
          </section>
        </li>

        <!-- Aqui, criação da quinta aba -->
        <li class="aba" id="aba-5">
          <h1><img class="vetor" src="imagens/Vector 5.svg" alt=""></h1>
          <section class="conteudo">
            <table border="1">
              <tbody>
                <tr>
                  <td><input class="resp1" name="resp5" type="radio" value="01" required>Resposta 1</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp5" type="radio" value="02">Resposta 2</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp5" type="radio" value="03">Resposta 3</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp5" type="radio" value="04">Resposta 4</td>
                </tr>
              </tbody>
            </table>
          </section>
        </li>

        <!-- Aqui, criação da sexta aba -->
        <li class="aba" id="aba-6">
          <h1><img class="vetor" src="imagens/Vector 6.svg" alt=""></h1>
          <section class="conteudo">
            <table border="1">
              <tbody>
                <tr>
                  <td><input class="resp1" name="resp6" type="radio" value="01" required>Resposta 1</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp6" type="radio" value="02">Resposta 2</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp6" type="radio" value="03">Resposta 3</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp6" type="radio" value="04">Resposta 4</td>
                </tr>
              </tbody>
            </table>
          </section>
        </li>

        <!-- Aqui, criação da setima aba -->
        <li class="aba" id="aba-7">
          <h1><img class="vetor" src="imagens/Vector 7.svg" alt=""></h1>
          <section class="conteudo">
            <table border="1">
              <tbody>
                <tr>
                  <td><input class="resp1" name="resp6" type="radio" value="01" required>Resposta 1</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp6" type="radio" value="02">Resposta 2</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp6" type="radio" value="03">Resposta 3</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp6" type="radio" value="04">Resposta 4</td>
                </tr>
              </tbody>
            </table>
          </section>
        </li>

        <!-- Aqui, criação da oitava aba -->
        <li class="aba" id="aba-8">
          <h1><img class="vetor" src="imagens/Vector 8.svg" alt=""></h1>
          <section class="conteudo">
            <table border="1">
              <tbody>
                <tr>
                  <td><input class="resp1" name="resp8" type="radio" value="01" required>Resposta 1</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp8" type="radio" value="02">Resposta 2</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp8" type="radio" value="03">Resposta 3</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp8" type="radio" value="04">Resposta 4</td>
                </tr>
              </tbody>
            </table>
          </section>
        </li>

        <!-- Aqui, criação da nona aba -->
        <li class="aba" id="aba-9">
          <h1><img class="vetor" src="imagens/Vector 9.svg" alt=""></h1>
          <section class="conteudo">
            <table border="1">
              <tbody>
                <tr>
                  <td><input class="resp1" name="resp9" type="radio" value="01" required>Resposta 1</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp9" type="radio" value="02">Resposta 2</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp9" type="radio" value="03">Resposta 3</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp9" type="radio" value="04">Resposta 4</td>
                </tr>
              </tbody>
            </table>
          </section>
        </li>

        <!-- Aqui, criação da decima aba -->
        <li class="aba" id="aba-10">
          <h1><img class="vetor" src="imagens/Vetor 10.svg" alt=""></h1>
          <section class="conteudo">
            <table border="1">
              <tbody>
                <tr>
                  <td><input class="resp1" name="resp10" type="radio" value="01" required>Resposta 1</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp10" type="radio" value="02">Resposta 2</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp10" type="radio" value="03">Resposta 3</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp10" type="radio" value="04">Resposta 4</td>
                </tr>
              </tbody>
            </table>
          </section>
        </li>

        <!-- Aqui, criação da 11 aba -->
        <li class="aba" id="aba-11">
          <h1><img class="vetor" src="imagens/Vetor 11.svg" alt=""></h1>
          <section class="conteudo">
            <table border="1">
              <tbody>
                <tr>
                  <td><input class="resp1" name="resp11" type="radio" value="01" required>Resposta 1</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp11" type="radio" value="02">Resposta 2</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp11" type="radio" value="03">Resposta 3</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp11" type="radio" value="04">Resposta 4</td>
                </tr>
              </tbody>
            </table>
          </section>
        </li>

        <!-- Aqui, criação da 12 aba -->
        <li class="aba" id="aba-12">
          <h1><img class="vetor" src="imagens/Vetor 12.svg" alt=""></h1>
          <section class="conteudo">
            <table border="1">
              <tbody>
                <tr>
                  <td><input class="resp1" name="resp12" type="radio" value="01" required>Resposta 1</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp12" type="radio" value="02">Resposta 2</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp12" type="radio" value="03">Resposta 3</td>
                </tr>
                <tr>
                  <td><input class="resp1" name="resp12" type="radio" value="04">Resposta 4</td>
                </tr>
              </tbody>
            </table>
          </section>
        </li>
      </div>
    </div>
    </form>
  </div>
</body>

</html>

<?php
// atribui a sessao os valores dos formularios apos clicar no botao:
$enviar = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);
if ($enviar) {
  //header("location: poust_database.php");
  $_SESSION['resp1'] = $_POST['resp1'];
  $_SESSION['resp2'] = $_POST['resp2'];
  $_SESSION['resp3'] = $_POST['resp3'];
  $_SESSION['resp4'] = $_POST['resp4'];
  $_SESSION['resp5'] = $_POST['resp5'];
  $_SESSION['resp6'] = $_POST['resp6'];
  $_SESSION['resp7'] = $_POST['resp7'];
  $_SESSION['resp8'] = $_POST['resp8'];
  $_SESSION['resp9'] = $_POST['resp9'];
  $_SESSION['resp10'] = $_POST['resp10'];
  $_SESSION['resp11'] = $_POST['resp11'];
  $_SESSION['resp12'] = $_POST['resp12'];
}
?>