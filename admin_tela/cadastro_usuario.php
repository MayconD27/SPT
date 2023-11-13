<?php
    session_start();
    $usuarioLogado = isset($_SESSION['logado']) ?  $_SESSION['logado'] : false;

    if($usuarioLogado== false){
        header('location: login.php');
        exit;
    }
    $nomeUsuario = isset($_SESSION['nome']) ?  $_SESSION['nome'] : 'Sem nome';
    $id = $_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do usuário</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/card_user.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="shortcut icon" href="../img/spt_logo.png" type="image/x-icon">
</head>
<body>
    <nav class="barraNav">

        <h1>
            <?php 
                echo "$nomeUsuario"; 
            ?>
            <i class="bi bi-person-circle"></i>
        </h1>
       
        <a href="logout.php" class="btn_sair"> <i class="bi bi-box-arrow-left"></i></a>
        <a href="../index.php" class="logo"><img src="../img/spt_logo.png" alt=""></a>
        <a href="../index.php" class="return"><i class="bi bi-arrow-left-short"></i></a>

    </nav>
    <form action="inseriruser.php" method="post">
        <h2>
            Cadastro de Usuário
        </h2>
        <div class="divisorias">
        <div class="inputForm">
            <label for="nome">nome completo</label>
            <input type="text" name="nome">
        </div>
        <div class="inputForm">
            <label for="cpf">cpf(apenas número)</label>
            <input type="text"name = "cpf">
        </div>
           
            
        </div>


        <div class="divisorias">
            <div class="inputForm">
                <label for="email">email</label>
                <input type="email"name = "email">
            </div>
            <div class="inputForm">         
                <label for="senha">Senha</label>
                <input type="text" name="senha" id="">
            </div>

        </div>


        <div class="divisorias">
            <div class="inputForm">
                <label for="telefone">telefone(apenas número)</label>
                <input type="text" name = "telefone">
            </div>
            <div class="inputForm">
                <label for="qtd_dias">quantidade de dias</label>
                <input type="number" name = "qtd_dias">   
            </div>
 
        </div>
        <div class="divisorias">
            <div class="inputForm">
                <label for="cidade">Cidade</label>
                <input type="text" name="cidade" id="">
            </div>
            <div class="inputForm">
                <label for="bairro">Bairro</label>
                <input type="text" name="bairro" id="">
            </div>
            
        </div>
        
        <div class="divisorias">
        <div class="inputForm">
                <label for="rua">Rua/N°</label>
                <input type="text" name="rua">
            </div>
            <div class="inputForm">
                <label for="func">Função do Usuário</label>
                <select name="func" id="">
                    <option value="0">Usuário</option>
                    <option value="1">Administrador</option>
                </select>
            </div>
            
        </div>
        

       
            <button type="submit" class="enviar">
                cadastrar
            </button>
    </form>
    
</body>
</html>