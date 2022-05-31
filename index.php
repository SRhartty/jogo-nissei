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
    <title>index</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="index">
        <div class="coluna">
            <img class="logo" src="imagens/LOGO_2_.svg" alt="jogo para casais">
            <img class="bannerfinal" src="./imagens/bannerfinal.svg" alt="">
            <form class="formulario_inicial" name="form1" id="form1" action="" method="POST">
                <h4>Qual é o seu nome?</h4>
                <input class="seunome" type="text" name="nome" required><br>
                <h4>Qual é o seu E-mail?</h4>
                <input class="seunome" type="email" name="email" required><br>
                <h4>CPF</h4>
                <input class="seunome" type="text" name="cpf" required><br>
                <h4>@ do seu amor</h4>
                <input class="seunome" type="text" name="insta" required><br>
                <div>
                    <input type="checkbox" required> <span style="color:#ffffff ;">Li e aceito os<a href="lgpd.html" style="color:#ffffff ;"> termos de uso<a></span>
                </div>
                <a style="display: flex;justify-content: center;">
                    <input class="button" name="enviar" type="submit" value="iniciar jogo">
                </a>
            </form>
        </div>
        
    </div>
</body>

</html>

<?php
// atribui a sessao os valores dos formularios apos clicar no botao:
$enviar = filter_input(INPUT_POST, 'enviar');
if ($enviar) {
    $_SESSION['nome'] = $_POST['nome'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['cpf'] = $_POST['cpf'];
    $_SESSION['insta'] = $_POST['insta'];
    $cpf = $_SESSION['cpf'];



    function validaCPF($cpf)
    {
        // Extrai somente os números
        $cpf = preg_replace('/[^0-9]/is', '', $cpf);

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }

        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf[$c] * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf[$c] != $d) {
                return false;
            }
        }
        return true;
    }

    include_once "./conexao/conexao.php";

    $query = mysqli_query($link, "SELECT * FROM resp_namorados WHERE cpf='$cpf'");
    $numeros = mysqli_num_rows($query);
    if ($numeros > "0") {
        echo  "<script>alert('Voce so pode jogar uma vez!');</script>";
    } else {
        //se o cpf for valido ele inicia o quiz
        if (validaCPF($cpf) == false) {

            echo  "<script>alert('Insira um cpf valido!');</script>";
        }else{
            header('Location:./jogador_1/formulario_1.php');
        }
    }
}


?>