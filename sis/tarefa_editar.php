<?php
require "conexao.php";
$id = $_GET["id"];
$comando = "select id, titulo, descricao from tarefa where id=$id";
$resultado = mysqli_query($conexao, $comando);
$registro = mysqli_fetch_assoc($resultado);
?>

<form method="post" action="tarefa_atualizar.php">
    <input type="hidden" name="id" value="<?=$registro["id"]?>">
    <input type="text" name="titulo" value="<?=$registro["titulo"]?>">
    <input type="text" name="descricao" value="<?=$registro["descricao"]?>">

    <button type="submit">Atualizar</button>
</form>