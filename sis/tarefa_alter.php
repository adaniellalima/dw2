<?php
require "conexao.php";

$sql = "alter TABLE tarefa add imagem varchar(250)";
$resultado = mysqli_query($conexao, $sql);

echo "\n tarefa modificado!";

?>