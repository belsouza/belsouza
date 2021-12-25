<?php

$nome = $email = $telefone = $endereco = $marker1 = $success = null;


function subscribe($nome, $email, $telefone, $endereco, $marker1)
{
    if ($marker1 != "") {
        //receive newsetter
    }
    
    if (($nome || $email || $telefone || $endereco || $marker1) === null) {
        return false;
    }
    return true;
}


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    if (isset($_POST["nome"])) {
        $nome = $_POST["nome"];
    }

    if (isset($_POST["email"])) {
        $email = $_POST["email"];
    }
    
    if (isset($_POST["telefone"])) {
        $telefone = $_POST["telefone"];
    }

    if (isset($_POST["endereco"])) {
        $endereco = $_POST["endereco"];
    }

    if (isset($_POST["marker1"])) {
        $marker1 = $_POST["marker1"];
    }
    
    if (isset($_POST["marker2"])) {
        $marker2 = $_POST["marker2"];
    }

    if (subscribe($nome, $email, $telefone, $endereco, $marker1)) {
        printf("Subscrição feita com sucesso! Agora, faça o seu download!");
    } else {
        printf("Não foi possivel processar a requisicao!");
    }
} else {
    if ($_SERVER["REQUEST_METHOD"] == 'GET') {
        printf("Método errado!");
    }
    printf("Erro durante o processamento ajax!");
}