<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/telaRetorno.css">
    <link rel="shortcut icon" href="../img/spt_logo.png" type="image/x-icon">
<?php

date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');

include './pdfparser/vendor/autoload.php';
include '../bd.php';
$Documento= array();

$mes = $_POST['data_bol'];
$ano = $_POST['ano'];
$dataBol = "$mes $ano";
$dataAtual = $_POST['data_atual'];
//Variável para receber a ultima aliquota
$UltAliquota = 0;

//Quantidade de PDF's carregados
$Tam  = count($_FILES['Documento']['tmp_name']);



for($cont = ($Tam-1);$cont>=0;$cont--){
    //Recebe os valores do PDF
    $cpf=BuscaDadosPDF($_FILES['Documento']['tmp_name'][$cont]);
    $docs = $_FILES['Documento']['name'][$cont];
    $caminho_arquivo ='../arquivos/' . $docs;

    $cpf = (int) $cpf;
    $sqlSel = "SELECT id FROM user WHERE cpf = $cpf";
    $resultadoCpf = $bd->query($sqlSel);
    $registroCpf = $resultadoCpf->fetch();

    $NumCpf = $registroCpf['id'];
    
    
    
    move_uploaded_file($_FILES['Documento']['tmp_name'][$cont],$caminho_arquivo);

    $sql = "INSERT INTO arquivos VALUE (NULL,'$caminho_arquivo','$dataBol', '$dataAtual',$NumCpf)";
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
            $cpf = str_replace(".", "", $cpf);
            $cpf = str_replace("-","",$cpf);
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

