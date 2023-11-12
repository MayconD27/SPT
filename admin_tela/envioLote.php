<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envio em Lote</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/lote.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
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
<body>
    <nav class="barraNav">
        <h1>
            <?php 
               echo "$nomeUsuario";
            ?>
            <i class="bi bi-person-circle"></i>
        </h1>
        <a href="../index.php" class="logo"><img src="../img/spt_logo.png" alt=""></a>
        <a href="../logout.php" class="btn_sair"> <i class="bi bi-box-arrow-left"></i></a>
        <a href="../index.php" class="return"><i class="bi bi-arrow-left-short"></i></a>
        
    </nav> 
    <main class="lote">
        <?php
             $data = date('Y-m-d');
        ?>
        <form action="./enviarEmLote.php" method="post" id="form" enctype="multipart/form-data">
        <input type="date" name="data_atual" id="" style="display:none" value='<?php echo $data;?>'> 
        <h2>Informe os dados de envio</h2>
        <div class="data">
              
                <select name="data_bol" id="">
                    <option value="janeiro">Janeiro</option>
                    <option value="fevereiro">Fevereiro</option>
                </select>
                <input type="number" name="ano" class="input_ano" placeholder="Digite o ano">
        </div>
            <div class="campo" id="campo">
                <div class="card">
                    <input input title = "Carregue apenas arquivos PDF" name="Documento[]" id="Documento" type="file"  placeholder="" multiple>
                </div>
                
            </div>
            <div class="btne">
            
                <button type="submit" class="envia">Enviar Arquivos</button>
            </div>
        </form>
    </main>
        

</body>
</html>