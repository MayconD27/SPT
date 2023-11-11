<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/telaRetorno.css">
<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

/* Informa o nível dos erros que serão exibidos */
//  error_reporting(E_ALL);

/* Habilita a exibição de erros */
//  ini_set("display_errors", 1);

include './pdfparser/vendor/autoload.php';
include '../bd.php';
$Documento= array();

//Variável para receber a ultima aliquota
$UltAliquota = 0;

//Quantidade de PDF's carregados
$Tam  = count($_FILES['Documento']['tmp_name']);



for($cont = ($Tam-1);$cont>=0;$cont--){
    //Recebe os valores do PDF
    $Doc=BuscaDadosPDF($_FILES['Documento']['tmp_name'][$cont]);
    $docs = $_FILES['Documento']['name'][$cont];
    $caminho_arquivo = '../arquivos/' . $docs;
    move_uploaded_file($_FILES['Documento']['tmp_name'][$cont],$caminho_arquivo);

    $sql = "INSERT INTO arquivos VALUE (NULL,'$caminho_arquivo','novembro 2023', '2023-11-09',1)";
    $resultado = $bd->prepare($sql);
    $registro = $resultado->execute();
    echo "<script src='../js/alertEnvioArq.js'></script>";
}

?>

    <?php

    
        function BuscaDadosPDF($PDF){   
        // Parse pdf file and build necessary objects.
            $parser = new \Smalot\PdfParser\Parser();
            $pdf    = $parser->parseFile($PDF);
            $text = $pdf->getText();

			
			
            
            //Partir Stringo em Setoriais:
            $PartesES = explode("\n", $text);
			$linha = explode(' ', $PartesES[46]);
			$linha = explode(' ', end($linha));
            $x = str_replace("\t", "*", $linha);
            $x = explode('*',end($x));
            $cpf = $x[1];
            
			return($cpf);

        }
    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Envio Bem sucedido</title>
    </head>
    <body>
        <h1>Seu envio foi bem sucedido</h1>
        <img src="../img/Bus Stop-pana.svg" alt="">
        <a href="./envioLote.php"><i class="bi bi-arrow-left-circle-fill"></i>   Retornar para a tela de envio em lote</a>
    </body>
    </html>
