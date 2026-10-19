<?php

$conexao = mysqli_connect("localhost", "root", "", "oficina");

if ($conexao == true){
    echo "Deu certo a conexão!";
} else{
    $erro = mysqli_connect_error();
    die($erro);
}

$comando = "CREATE TABLE usuario(
    `id` INT(11) not null auto_increment,
    `nome` VARCHAR(100) not null,
    `email` VARCHAR (80) not null,
    primary key(id)
);
";

$resultado = mysqli_query($conexao, $comando);

if ($resultado == true){
    echo "\n usuario criado!";
} else{
    $erro = mysqli_connect_error();
    die($erro);
}

$comando = "DROP TABLE usuario";

$resultado = mysqli_query($conexao, $comando);

if ($resultado == true){
    echo "\n usuario apagado!";
} else{
    $erro = mysqli_connect_error();
    die($erro);
}

?>