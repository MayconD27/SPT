<?php
include_once "../bd.php";
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
            <?php 
                echo "$nomeUsuario"; 
            ?>
            <i class="bi bi-person-circle"></i>
    </h1>
    <a href="../index.php" class="logo"><img src="../img/spt_logo.png" alt=""></a>
    <a href="../index.php" class="return"><i class="bi bi-arrow-left-short"></i></a>
    <a href="logout.php" class="btn_sair"> <i class="bi bi-box-arrow-left"></i></a>

    </nav>
<form action="listausuarios.php" method="post" class="buscar">
        
        <input type="text" name="busca" placeholder="Nome do usuário" class="inpB">
        <button type="submit">Buscar <i class="bi bi-search"></i></button>
</form>
<section class="container_user">

    <ul class='list'>
        
        <?php
            if (isset($_POST['busca'])) {
                $busca = $_POST['busca'];
                $sql = "SELECT * FROM user WHERE UPPER(nome) LIKE '%$busca%' AND func != 1";
            }
            else{
                $sql = "SELECT * FROM user WHERE func != 1";
            }
           
                    
            
            $resultado = $bd->query($sql);
            $registros = $resultado->fetchAll();
            foreach ($registros as $usuarios) {
                $nome =$usuarios['nome']; 
                $id = $usuarios['id'];
                $cpf = $usuarios['cpf'];
                echo "<li class='infoUser'>
                        <div class='info'>
                            <p>$nome</p>
                            <span> $cpf</span>
                        </div>
                        <a href='cadastraArq.php?idUser=$id'><i class='bi bi-box-arrow-up'></i></a>
                        </li>";
            } 
    
        ?>

    </ul>
</section>
</body>
</html>