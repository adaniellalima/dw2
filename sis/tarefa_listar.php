<a href="tarefa_form.php">Cadastrar nova tarefa</a>
<br>
<?php
require "conexao.php";

$comando = "SELECT * FROM tarefa";
$resultado = mysqli_query($conexao, $comando);

while($registro =  mysqli_fetch_assoc($resultado)): ?>

    <p>ID: <?= $registro["id"];?></p>
    <p>Título: <?= $registro["titulo"];?></p>
    <a href="tarefa_exibir.php?id=<?=$registro["id"]?>">Detalhes</a>
    <a href="tarefa_deletar.php?id=<?=$registro["id"]?>">Deletar</a>
    <a href="tarefa_editar.php?id=<?=$registro["id"]?>">Editar</a>
    <hr/>

<?php endwhile ?>