<?php
$nome_User = $_POST["nome"];
$cpf_User = $_POST["cpf"];
$email_User = $_POST["email"];
$telefone_User = $_POST["telefone"];
$qtd_User = $_POST["qtd_dias"];
$func = $_POST["func"];
$senha = $_POST["senha"];
$bairro = $_POST["bairro"];
$cidade =$_POST["cidade"];
$rua = $_POST["rua"];

include_once "../bd.php";


$sql = "INSERT INTO user VALUE (NULL,'$nome_User','$email_User', '$cidade','$bairro','$rua',$qtd_User,'$telefone_User','$cpf_User','$func','$senha')";
        $resultado = $bd->prepare($sql);
        $registro = $resultado->execute();
        header('cadastro_usuario.php');
?>