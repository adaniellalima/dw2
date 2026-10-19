<?php

$conexao = mysqli_connect("localhost", "root", "", "oficina");

if ($conexao == true){
    echo "Deu certo a conexão!";
} else{
    $erro = mysqli_connect_error();
    die($erro);
}

$comando = "CREATE TABLE tarefa(
    `id` INT(11) not null auto_increment,
    `titulo` VARCHAR(100) not null,
    `descricao` VARCHAR (80) not null,
    primary key(id)
);
";

$resultado = mysqli_query($conexao, $comando);

if ($resultado == true){
    echo "\n tarefa criado!";
} else{
    $erro = mysqli_connect_error();
    die($erro);
}

?>