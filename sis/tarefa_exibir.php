<?php

require "conexao.php";
$id = $_GET["id"];
$comando = "SELECT * FROM tarefa WHERE id=$id";

$resultado = mysqli_query($conexao, $comando);

$registro =  mysqli_fetch_assoc($resultado);

echo $registro["id"];
echo "<br>";
echo $registro["titulo"];
echo "<br>";
echo $registro["descricao"];
echo "<br>";
?>
<img src="<?=$registro["imagem"]?>"/>