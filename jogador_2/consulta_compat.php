<?php
session_start();
include_once "../conexao/conexao.php";

$_SESSION['compat'] = 0;
$id = $_SESSION['id'];
$result_id = "SELECT * FROM resp_namorados WHERE id = '$id'";
$resultado_id = mysqli_query($link, $result_id);

$row_usuario = mysqli_fetch_assoc($resultado_id);
if ($_SESSION['resp01'] == $row_usuario['resp1']) {
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
                        <form class="formulario" method="POST" action="../index.php">
                <div class="conteudo">
                    <section class="conteudo1" id="aba-1">
                        <h1 class="acerto">Você acertou...</h1>
                        <h1 class="pontos"><?php echo $_SESSION['compat'] . " PTS"; ?></h1>

                        <div>
                            <P class="feedback">
                                <?php
                                if ($_SESSION['compat'] <= 5) {
                                    echo  "Essa química tá fraca, hein? Bora pra um sushi<br> botar a conversa em dia <3";
                                } elseif (($_SESSION['compat'] > 5) && ($_SESSION['compat'] <= 10)) {
                                    echo  "O Namô tá ficando sério!";
                                } elseif (($_SESSION['compat'] > 10) && ($_SESSION['compat'] <= 15)) {
                                    echo  "Arrasaram! Isso que é casal top!!!";
                                } elseif (($_SESSION['compat'] > 15) && ($_SESSION['compat'] <= 20)) {
                                    echo  "MEU DEUS! QUE CASALZÃO É ESSE? Vocês são os<br> últimos Romeu e Julieta!";
                                }
                                ?>
                            </P>
                            <div class="reenvio">
                                <div class="link">
                                    <h1 class="txtenvio">Faça agora o seu  e envie para o mozão</h1>
                                </div>

                                <div>
                                    <button class="buttonreenvio">Iniciar jogo</button>
                                </div>
                            </div>
                            <div class="link">
                                <a class="a" href="https://www.instagram.com/nisseioficial_/" target="_blank" style="text-decoration: none;">
                                    <h2 class="resp">Seguir o Instagram da Nissei agora! <img class="svg" src="../imagens/insta.svg" alt=""></h2>
                                </a>
                            </div>
                        </div>

                    </section>
                </div>
            </form>
                        
                </div>
        </div>
</body>
</html>