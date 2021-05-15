<?php include "../include/conexao.php"; 

$id_medico = $_GET['id_medico'];

$sqlexcluir = "DELETE FROM tb_medicos WHERE id = {id_medico}";

$resultado = mysqli_query($conexao , $sqlExcluir);

if($resultado)
{echo "excluido com sucesso"; echo "<a href='medicos-listar.php'>VOLTAR</a>"}
else
{echo "Ocorreu algum problema"}

















?>