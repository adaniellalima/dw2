<?php

$conexao = mysqli_connect("localhost", "root", "", "escola");

if ($conexao == true){
    echo "Conectado a escola!";
} else{
    $erro = mysqli_connect_error();
    die($erro);
}

?>