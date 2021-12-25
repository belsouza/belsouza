<?php

//inicializando as variáveis
$nome = $email = $telefone = $empresa = $data = "";


if (isset($_POST["nome"]) && isset($_POST["email"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];

    if (isset($_POST["empresa"])) {
        $empresa = $_POST["empresa"];
    }

    if (isset($_POST["telefone"])) {
        $telefone = $_POST["telefone"];
    }

    //echo "data received successfull: " . $nome . " ". $email. " ". $empresa . " " . $telefone;
    echo "Sucesso!";
} else {
    echo "fail: no data received";
}