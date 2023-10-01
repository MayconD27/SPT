<?php

    session_start();
    include_once "bd.php";

    $email = ($_POST['email']) ?  $_POST['email'] : '';

    $senha = ($_POST['senha']) ?  $_POST['senha'] : '';



    //SQL
    $sql ="SELECT id, nome FROM user WHERE email = '$email' AND senha = '$senha'";


    $resultado = $bd->prepare($sql);
    //Executa
    $resultado->execute();
    $registros = $resultado->fetchAll(); 

    
    if(count($registros)==1){
        $_SESSION['logado'] = true;
        $_SESSION['nome'] = $registros[0]['nome'];
        $_SESSION['id'] = $registros[0]['id'];
        header('location: index.php');
        exit;
    }else{
        header('location: mensagem_erro.php');
        exit;
    }
?>