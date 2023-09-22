<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar arquivos</title>
</head>
<body>
    <?php
        if (isset($_GET['idUser'])) {
            $id = $_GET['idUser'];
            echo "ID do usuário: $id";
        } else {
            echo "Parâmetro 'idUser' não foi definido na URL.";
        }
    ?>

</body>
</html>