<?php
$id = $_POST["id"];
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];

require "conexao.php";
$comando ="update tarefa set titulo='$titulo', descricao='$descricao' where id='$id'";
$resultado = mysqli_query($conexao, $comando);
if($resultado == true){
    echo "Registro alterado com sucesso";
}else{
    echo "Não foi possível alterar o registro";
}

?>