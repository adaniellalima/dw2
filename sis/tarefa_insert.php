<?php
require "conexao.php";
$titulo = $_POST["titulo"];
$descricao = $_POST["descricao"];

$imagem = $_FILES["imagem"];
$de = $imagem["tmp_name"];
$para = "upload/" . $imagem["name"];

move_uploaded_file($de, $para);

$comando = "INSERT INTO tarefa (titulo, descricao, imagem) VALUES ('$titulo', '$descricao', '$para')";

$resultado = mysqli_query($conexao, $comando);

if ($resultado == true){
    echo "A tarefa foi cadastrada com sucesso!";
}
else{
    echo "Deu problema ao inserir a tarefa!";
}

?>

<a href="tarefa_listar.php">Ver todos os registros</a>