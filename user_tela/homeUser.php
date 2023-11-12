<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela do usuário</title>
    
</head>
<body>
    <div class="container_bole">
        <?php
        
        include_once __DIR__ . '/../bd.php';

        $sql = "SELECT UPPER(data_bol) as data_bol, pdf FROM user NATURAL JOIN arquivos WHERE user.id = $id";
        $resultado = $bd->query($sql);
        $registros = $resultado->fetchAll();

        foreach ($registros as $bol) {
            $dataBol = $bol['data_bol'];
            $caminhoArq = $bol['pdf'];
            $caminhoArq = str_replace('..','.',$caminhoArq);

            echo "<div class='card_bole'>";
            echo "<p><i class='bi bi-file-earmark-binary-fill'></i> BOLETO $dataBol</p>";
            echo "<span>Baixar boleto</span>";
            echo "<a href ='". $caminhoArq."'><i class='bi bi-download'></i></a>";
            echo "</div>";
        }
        ?>    
</div>
        

    </div>
</body>
</html>