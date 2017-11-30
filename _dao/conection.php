<?php

function conexao() {

    $servidor = "localhost";
    $nomebanco = "aguas_crud";
    $usuario = "root";
    $senha = "";

// criando conexão com o bd
    $conn = new mysqli($servidor, $usuario, $senha, $nomebanco);

// Check connection
    if ($conn->connect_error) {
        header("location:../index.php");
    } else
        return $conn;
}



function alert($retorno) {
    if ($retortno = 's')
        echo '<h4 class="alert_success">Operação realizada com sucesso!</h4>';
    else
        echo '<h4 class="alert_error">Erro ao realizar operação!</h4>';
}
