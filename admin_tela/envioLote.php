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
</head>
<body>
    <nav class="barraNav">
        <h1>
            <?php 
                echo 'admin'; 
            ?>
            <i class="bi bi-person-circle"></i>
        </h1>
        <a href="../index.php" class="logo"><img src="../img/spt_logo.png" alt=""></a>
        <a href="../logout.php" class="btn_sair"> <i class="bi bi-box-arrow-left"></i></a>
        <a href="listausuarios.php" class="return"><i class="bi bi-arrow-left-short"></i></a>
        
    </nav> 
    <main class="lote">
        <form action="" method="post" id="form">

            <div class="campo" id="campo">
                <div class="card">
                    <input type="file" name="arq1" id="">
                    <select name="" id="select">
                        <option value="Maycon">Maycon</option>
                        <option value="Douglas"> Douglas</option>
                    </select>
                </div>
                
            </div>
            <div class="btne">
            
                <button type="submit" class="envia">Enviar Arquivos</button>
            </div>
        </form>

        
        <button id="add">Adicionar a lista</button>
    
  
    </main>
        

<script src="../js/enviolote.js"></script>
</body>
</html>