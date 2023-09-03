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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    

    <nav class="barraNav">

        <h1>
            <?php echo "$nomeUsuario"; 
            ?>
        </h1>

        <a href="logout.php" class="btn_sair"> <i class="bi bi-box-arrow-left"></i> Sair</a>

    </nav>
    <div class="container">
        <div class="card_func">
            <a href="cadastro_usuario.php" class="ilustra">
            <i class="bi bi-person-add"></i>
            </a>
            <p>Cadastro de usuário</p>
        </div>

        <div class="card_func">
            <a href="cadastro_usuario.php" class="ilustra">
            <i class="bi bi-filetype-pdf"></i>
            </a>
            <p>Envio de boletos</p>
        </div>
    </div>







</body>
</html>