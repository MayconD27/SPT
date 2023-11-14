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
                        echo "$caminho_arquivo";
                    }
?> 