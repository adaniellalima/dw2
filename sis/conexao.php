<?php

$conexao = mysqli_connect("localhost", "root", "", "oficina");

if($conexao == false){
    $erro = mysqli_connect_error();
    die($erro);
}

?>