<?php
session_start();
//conexao com o banco de dados:
$host = "localhost";
$user = "root";
$pass = "";
$database = "jogo";


//$link = mysqli_connect($host, $user, $pass, $database);//

//envia ao banco de dados os info do formulario:
$resp1 = $_SESSION['resp1'];
$resp2 = $_SESSION['resp2'];
$resp3 = $_SESSION['resp3'];
$resp4 = $_SESSION['resp4'];
$resp5 = $_SESSION['resp5'];
$resp6 = $_SESSION['resp6'];
$resp7 = $_SESSION['resp7'];
$resp8 = $_SESSION['resp8'];
$resp9 = $_SESSION['resp9'];
$resp10 = $_SESSION['resp10'];
$resp11 = $_SESSION['resp11'];
$resp12 = $_SESSION['resp12'];
$nomes = $_SESSION['nomes'];
$sobrenomes = $_SESSION['sobrenomes'];


//$resul_table = "INSERT INTO resp_primaria(resp1, resp2, resp3, resp4, resp5, resp6, resp7, resp8, resp9, resp10, resp11, resp12, nome_pessoa, sobrenome_pessoa ) 
//VALUES ('$resp1', '$resp2', '$resp3', '$resp4', '$resp5', '$resp6', '$resp7', '$resp8', '$resp9', '$resp10', '$resp11', '$resp12','$nomes', '$sobrenomes')";
//$result_quest = mysqli_query($link, $resul_table);

//busca o id das respostas no banco de dados:
$result_usuarios = "SELECT max(id) as id FROM resp_primaria";
$resultado_usuarios = mysqli_query($link, $result_usuarios);
while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
        $iduser = $row_usuario['id'];
}
//gera e mostra a url para o segundo jogador:
$URL_ATUAL = "http://$_SERVER[HTTP_HOST]/jogo_namorados/index.php?id=$iduser";
$_SESSION['url'] = $URL_ATUAL;


mysqli_close($link);

//header("location: finalizar_jogador1.php");
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
        <div class="index">
                <div class="coluna">
                        <?php echo $URL_ATUAL; ?>

                </div>
        </div>
</body>