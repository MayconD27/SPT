<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
                include_once '../bd.php';
                    $arquivo = $_FILES["arq"];
                    $data_bol = $_POST['data_bol']." ". $_POST['ano'];
                    $data_atual = isset($_POST['data_atual']) ? $_POST['data_atual'] : '';
                    $id = isset($_POST['id']) ? $_POST['id'] : '';

                    
                    $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);
                
                    if ($extensao != 'pdf') {
                        echo "<script src='../js/alertErro.js'></script>";
                    } else {
                        move_uploaded_file($arquivo['tmp_name'], '../arquivos/' . $arquivo['name']);
                        $caminho_arquivo = '../arquivos/' . $arquivo['name'];

                        $sqlCad = "INSERT INTO arquivos VALUE (NULL,'$caminho_arquivo','$data_bol', '$data_atual',$id)";
                        $registro = $bd->prepare($sqlCad);
                        $resultado = $registro->execute();

                        echo "<script src='../js/alertOk.js'></script>";
                    }
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=], initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/telaRetorno.css">
</head>
<body>
<h1>Seu envio foi bem sucedido</h1>
        <img src="../img/Bus Stop-pana.svg" alt="">
        <a href="./envioLote.php"><i class="bi bi-arrow-left-circle-fill"></i>   Retornar para a tela de envio em lote</a>
    
</body>
</html>