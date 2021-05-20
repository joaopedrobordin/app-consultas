<?php
include "../include/conexao.php";

$id_pacientes = $_GET['id'];

$sqlExcluir = "DELETE FROM tb_pacientes WHERE id = {$id_paciente};";

$resultado mysql_qyery($conexao, $resultado)

if($resultado)
{echo "Excluido com sucesso"; echo "<a href='pacientes-listar.php'>VOLTAR</a>";}

else
{echo "Algum erro aconteceu";}


?>