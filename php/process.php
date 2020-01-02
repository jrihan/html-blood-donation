<?php
session_start();

//INCLUSAO DO ARQUIVO PHP EXTERNO
include_once("connection.php");


//DEFINIR AS VARIAVEIS
$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_STRING);
$snome = filter_input(INPUT_POST, 'snome', FILTER_SANITIZE_STRING);
$sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$fone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
$cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
$estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
$sangue = filter_input(INPUT_POST, 'lecture', FILTER_SANITIZE_STRING);

//VERIFICACAO DO PHP
//echo "NOME:" .$_POST["sexo"];
//echo "<br>SOBRENOME: $sexo <br>";

//INCERSAO DOS DADOS NO BANCO DE DADOS

$result_usuario = "INSERT INTO `data` (`NOME`, `SOBRENOME`, `SEXO`, `EMAIL`, `FONE`, `CIDADE`, `ESTADO`, `SANGUE`) VALUES ('$nome','$snome','$sexo','$email','$fone','$cidade','$estado','$sangue')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "USUARIO CADASTRADO COM SUCESSO";
    header("Location: ../index.html");
}
else{
    header("Location: ../index.html");
}

?>
