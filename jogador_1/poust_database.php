<?php
session_start();
//conexao com o banco de dados:
include_once "../conexao/conexao.php";

//envia ao banco de dados os info do formulario:
$resp1 = $_SESSION['resp01'];
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
$resp13 = $_SESSION['resp13'];
$resp14 = $_SESSION['resp14'];
$resp15 = $_SESSION['resp15'];
$resp16 = $_SESSION['resp16'];
$resp17 = $_SESSION['resp17'];
$resp18 = $_SESSION['resp18'];
$resp19 = $_SESSION['resp19'];
$resp20 = $_SESSION['resp20'];
$nome = $_SESSION['nome'];
$email = $_SESSION['email'];
$cpf = $_SESSION['cpf'];
$insta = $_SESSION['insta'];



$resul_table = "INSERT INTO resp_namorados(resp1, resp2, resp3, resp4, resp5, resp6, resp7, resp8, resp9, resp10, resp11, resp12, resp13, resp14, resp15, resp16, resp17, resp18, resp19, resp20 , nome, email, cpf, insta) 
VALUES ('$resp1', '$resp2', '$resp3', '$resp4', '$resp5', '$resp6', '$resp7', '$resp8', '$resp9', '$resp10', '$resp11', '$resp12', '$resp13', '$resp14', '$resp15', '$resp16', '$resp17', '$resp18', '$resp19', '$resp20', '$nome', '$email', '$cpf', '$insta')";
$result_quest = mysqli_query($link, $resul_table);

//busca o id das respostas no banco de dados:
$result_usuarios = "SELECT max(id) as id FROM resp_namorados";
$resultado_usuarios = mysqli_query($link, $result_usuarios);
while ($row_usuario = mysqli_fetch_assoc($resultado_usuarios)) {
        $iduser = $row_usuario['id'];
}
//gera e mostra a url para o segundo jogador:
$URL_ATUAL = "http://$_SERVER[HTTP_HOST]/jogo_namorados/jogador_2/formulario_1.php?id=$iduser";
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


        <div class="index_primaria">
                <img class="logo2" src="../imagens/LOGO_2_.svg" alt="jogo para casais">
                <div class="containerfinal">
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
                                <div class="aba" id="aba-12">
                                        <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
                                </div>
                                <div class="aba" id="aba-12">
                                        <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
                                </div>
                                <div class="aba" id="aba-12">
                                        <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
                                </div>
                                <div class="aba" id="aba-12">
                                        <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
                                </div>
                                <div class="aba" id="aba-12">
                                        <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
                                </div>
                                <div class="aba" id="aba-12">
                                        <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
                                </div>
                                <div class="aba" id="aba-12">
                                        <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
                                </div>
                                <div class="aba" id="aba-12">
                                        <h1><img class="vetor" src="../imagens/coracaox.svg" alt=""></h1>
                                </div>
                        </div>



                        <!-- Aqui, criação da primeira aba -->
                        <form class="formulario" method="POST" action="formulario_2.php">
                                <div class="conteudo">
                                        <section class="conteudo1">
                                                <h1 class="titulo">PARABÉNS!</h1>
                                                <p class="paragrafo">Você acabou a primeira etapa do nosso desafio.
                                                        Falta pouco! <b>Compartilhe</b> com o seu amor, siga <b>@nisseioficial_</b>
                                                        e publique uma foto do resultado nos mencionando nos seus stories.</p>
                                                <div>
                                                        <div class="link">
                                                                <a class="a" href="https://www.instagram.com/nisseioficial_/" target="_blank" style="text-decoration: none;">
                                                                        <h2 class="resp">Seguir o Instagram da Nissei agora! <img class="svg" src="../imagens/insta.svg" alt=""></h2>
                                                                </a>
                                                        </div>
                                                        <div class="link">
                                                                <a class="a" href="https://api.whatsapp.com/send?text=<?php echo $URL_ATUAL; ?>" target="_blank" style="text-decoration: none;">
                                                                        <h2 class="resp" id="link"><?php echo "clique para enviar"; ?> <img class="svg" src="../imagens/copiar.svg" alt=""></h2>
                                                                </a>
                                                        </div>
                                                </div>

                                        </section>
                                </div>
                        </form>
                        <img class="bannerfinal" src="../imagens/bannerfinal.svg" alt="">
                </div>
        </div>
</body>

</html>