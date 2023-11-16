<?php

session_start();
include_once "../bd.php";
    $usuarioLogado = isset($_SESSION['logado']) ?  $_SESSION['logado'] : false;

    if($usuarioLogado== false){
        header('location: login.php');
        exit;
    }
    $nomeUsuario = isset($_SESSION['nome']) ?  $_SESSION['nome'] : 'Sem nome';
    $id = $_SESSION['id'];
    
    $sqlValidar = "SELECT func FROM user WHERE id = $id";
    $registro = $bd->query($sqlValidar);
    $resultado = $registro->fetchAll();    
    $resultValidar = $resultado[0]['func'];
    if($resultValidar!=1){
        header('location: ../index.php');
    }    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar arquivos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/lote.css">
    <link rel="stylesheet" href="../css/enviar.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="../img/spt_logo.png" type="image/x-icon">
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
        <h1>
            <?php 
                echo "$nomeUsuario"; 
            ?>
            <i class="bi bi-person-circle"></i>
        </h1>
        <a href="../index.php" class="logo"><img src="../img/spt_logo.png" alt=""></a>
        <a href="../logout.php" class="btn_sair"> <i class="bi bi-box-arrow-left"></i></a>
        <a href="listausuarios.php" class="return"><i class="bi bi-arrow-left-short"></i></a>
        
    </nav>
    <section>
    <?php
         $sql = "SELECT * FROM user WHERE id = $id";
         $resultado = $bd->query($sql);
         $registros = $resultado->fetchAll();
         $nome = $registros[0]['nome'];
         $cidade = $registros[0]['cidade'];
        ?>
           

        <div class="info">
            <p><?php echo $nome;?></p>
            <span class="city">
                <i class="bi bi-pin-map"></i> <?php echo $cidade;?>
            </span>
        </div>
       
        <form action="./enviaArq.php" method="POST" id="form" enctype="multipart/form-data">
            <input type="date" name="data_atual" id="" value='<?php echo $data;?>' style="display:none"> 
            <input type="number" name="id" id="" value='<?php echo $id;?>' style="display:none">
            <h2>Informe os dados de envio</h2>
            <div class="data">
              
                <select name="data_bol" id="">
                    <option value="janeiro">Janeiro</option>
                    <option value="fevereiro">Fevereiro</option>
                    <option value="março">Março</option>
                    <option value="abril">Abril</option>
                    <option value="maio">Maio</option>
                    <option value="junho">Junho</option>
                    <option value="julho">Julho</option>
                    <option value="agosto">Agosto</option>
                    <option value="setembro">Setembro</option>
                    <option value="outubro">Outubro</option>
                    <option value="novembro">Novembro</option>
                    <option value="dezembro">Dezembro</option>
                </select>
                <input type="number" name="ano" class="input_ano" placeholder="Digite o ano">
        </div>
            <div class="campo" id="campo">
                <div class="card">
                    <input title = "Carregue apenas arquivos PDF" name="arq" id="Documento" type="file"  placeholder="">
                </div>
                
            </div>
            <div class="btne">
            
                <button type="submit" class="envia">Enviar Arquivos</button>
            </div>
        </form>
    </section>

</main>
</body>
</html>