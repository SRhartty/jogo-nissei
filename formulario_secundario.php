<?php
//inicia a sessao: 
session_start();

?>
<form name="form1" id="form1" action="" method="POST">
  <table border="1">
    <tbody>
      <tr>
        <td><input class="resp1" name="resp1" type="radio" value="01" checked>Resposta 1</td>
      </tr>
      <tr>
        <td><input class="resp1" name="resp1" type="radio" value="02">Resposta 2</td>
      </tr>
      <tr>
        <td><input class="resp1" name="resp1" type="radio" value="03">Resposta 3</td>
      </tr>
      <tr>
        <td><input class="resp1" name="resp1" type="radio" value="04">Resposta 4</td>
      </tr>
    </tbody>
  </table>
  <table border="1">
    <tbody>
      <tr>
        <td><input class="resp2" name="resp2" type="radio" value="01" checked>Resposta 1</td>
      </tr>
      <tr>
        <td><input class="resp2" name="resp2" type="radio" value="02">Resposta 2</td>
      </tr>
      <tr>
        <td><input class="resp2" name="resp2" type="radio" value="03">Resposta 3</td>
      </tr>
      <tr>
        <td><input class="resp2" name="resp2" type="radio" value="04">Resposta 4</td>
      </tr>
    </tbody>
  </table>
  <input name="enviar" type="submit" value="Enviar">
</form>
<?php
// atribui a sessao os valores dos formularios apos clicar no botao:
$enviar = filter_input(INPUT_POST, 'enviar', FILTER_SANITIZE_STRING);
if ($enviar) {
  $_SESSION['resp1'] = $_POST['resp1'];
  $_SESSION['resp2'] = $_POST['resp2'];
  header("location: consulta_compat.php");
}
?>