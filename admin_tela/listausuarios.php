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
    <title>Lista dos Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/listuser.css">
</head>
<body>
    <nav class="barraNav">

    <h1>
        <?php echo "$nomeUsuario"; 
        ?>
    </h1>

    <a href="logout.php" class="btn_sair"> <i class="bi bi-box-arrow-left"></i> Sair</a>

</nav>
<form action="listausuarios.php" method="post" class="buscar">
        
        <input type="text" name="busca" placeholder="Nome do usuário" class="inpB">
        <button type="submit">Buscar <i class="bi bi-search"></i></button>
    </form>
<section class="container_user">

    <ul class='list'>
        
        <?php
            $list= [1,2,3,4,5,6,7,8,9];
            $teste = 0;
            while ($teste<8 ){
                $teste++;
                echo  "
                    <li class='infoUser'>
                        <div class='info'>
                            <p>Nome Completo do Usuário</p>
                            <span> 111.111.111-01</span>
                        </div>
                        <a href='index.php'><i class='bi bi-box-arrow-up'></i></a>
                    </li>
                    ";
            }
            
        ?>

    </ul>
</section>
<footer>
    &copy2023
</footer>
</body>
</html>