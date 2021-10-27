<?php

require("./../../app/bd-con.php");

$results = $banco->query("SELECT dados_name, dados_values FROM dados_site");
$data = $results->fetch_all();

if(isset($_POST['emailCadastroCurriculos']) && !empty($_POST['emailCadastroCurriculos'])){
    $novoEmail = $_POST['emailCadastroCurriculos'];
    $a = "UPDATE dados_site SET dados_values='$novoEmail' WHERE dados_name = 'emailCadastroCurriculos'";
    $query = $banco->query($a);
    if(!$query){
        echo json_encode([FALSE]);
        exit();
    }
}

if(isset($_POST['metodoEnvioEmail']) && !empty($_POST['metodoEnvioEmail'])){
    $metodoEnvioEmail = $_POST['metodoEnvioEmail'];
    $a = "UPDATE dados_site SET dados_values='$metodoEnvioEmail' WHERE dados_name = 'metodoEnvioEmail'";
    $query = $banco->query($a);
    if(!$query){
        echo json_encode([FALSE]);
        exit();
    }
}

if(isset($_POST['enderecoGmail']) && !empty($_POST['enderecoGmail'])){
    $gmailEnvioCurriculos = $_POST['enderecoGmail'];
    $a = "UPDATE dados_site SET dados_values='$gmailEnvioCurriculos' WHERE dados_name = 'enderecoGmail'";
    $query = $banco->query($a);
    if(!$query){
        echo json_encode([FALSE]);
        exit();
    }
}

if(isset($_POST['senhaGmail']) && !empty($_POST['senhaGmail'])){
    $senhaGmail = $_POST['senhaGmail'];
    $a = "UPDATE dados_site SET dados_values='$senhaGmail' WHERE dados_name = 'senhaGmail'";
    $query = $banco->query($a);
    if(!$query){
        echo json_encode([FALSE]);
        exit();
    }
}

echo json_encode([TRUE]);