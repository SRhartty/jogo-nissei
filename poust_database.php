<?php
session_start(); 
//conexao com o banco de dados:
$host = "localhost";
$user = "root";
$pass = "";
$database = "jogo";


$link = mysqli_connect($host, $user, $pass, $database);
 
//envia ao banco de dados os info do formulario:
$resp1 = $_SESSION['resp1'];
$resp2 = $_SESSION['resp2'];
$nomes= $_SESSION['nomes'];
$sobrenomes = $_SESSION['sobrenomes'];


$resul_table = "INSERT INTO resp_primaria(respostas, resp2, nome_pessoa, sobrenome_pessoa ) VALUES ('$resp1', '$resp2', '$nomes', '$sobrenomes')";
$result_quest = mysqli_query($link, $resul_table);

//busca o id das respostas no banco de dados:
$result_usuarios = "SELECT max(id) as id FROM resp_primaria";
		$resultado_usuarios = mysqli_query($link, $result_usuarios);
		while($row_usuario = mysqli_fetch_assoc($resultado_usuarios)){
			echo "ID: " . $row_usuario['id'] . "<br>";
            $iduser = $row_usuario['id'];

		}
//gera e mostra a url para o segundo jogador:
        $URL_ATUAL= "http://$_SERVER[HTTP_HOST]/jogo_namorados/index.php?id=$iduser";
        $_SESSION['url'] = $URL_ATUAL;
        echo $URL_ATUAL;
        
        mysqli_close($link);

//header("location: finalizar_jogador1.php");
