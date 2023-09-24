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
    <title>Enviar arquivos</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/enviar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <?php
        if (isset($_GET['idUser'])) {
            $id = $_GET['idUser'];
        }
        
        $data = date('Y-m-d');
    ?>
    
<main>
    <nav class="barraNav">
       <img src="../img/spt_logo.png" alt="img" class="logo">
        
        <a href="../logout.php" class="btn_sair"> <i class="bi bi-box-arrow-left"></i></a>

    </nav>
    <section>
        <div class="info">
            <p>Newton Paula</p>
            <span class="city">
                <i class="bi bi-pin-map"></i> Papagaio
            </span>
        </div>
        
        <form action="" class="form_arq">
            <p>Envio de arquivo</p>
            
            <div class="d">
               
                <i class="bi bi-calendar-event"></i><input type="date" disabled value='<?php echo $data;?>'class="data" name="data">
            </div>
            

            <input type="file" class="arq" value="Selecione um arquivo" name="arq">
            <label for="file-input" class="custom-file-upload">
            Adicone o arquivo para ser enviado
            </label>
            <div class="env_a">
                <button type="submit" class="envaqr">Enviar</button>
            </div>
            
        </form>
    </section>

</main>
</body>
</html>