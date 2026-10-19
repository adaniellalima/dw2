<?php

require "conexao.php";

$id = $_GET["id"];

$comando = "delete from tarefa where id=$id";
$resultado = mysqli_query($conexao, $comando);

if ($resultado == true) {
    echo "Apagou";
}
else{
    echo "Não apagou";
}
?>