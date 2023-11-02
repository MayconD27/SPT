<?php
    $arquivo = $_FILES["arq"];
    $extensao = pathinfo($arquivo['name'], PATHINFO_EXTENSION);

    if ($extensao != 'pdf') {
        echo "O arquivo não é um PDF.";
    } else {
        echo "Arquivo PDF detectado.";
        move_uploaded_file($arquivo['tmp_name'], '../arquivos/' . $arquivo['name']);
        $caminho_arquivo = '../arquivos/' . $arquivo['name'];
    }
?>
