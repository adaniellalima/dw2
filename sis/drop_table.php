<?php
$nome_tabela = $_POST["tabela"];
$sql = "DROP TABLE $nome_tabela";

$conexao = mysqli_connect("localhost", "root", "", "oficina");

$sql = "DROP TABLE $nome_tabela";

$resultado = mysqli_query($conexao, $sql);

echo "\n $nome_tabela apagado!";

?>