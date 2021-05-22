<?php
include "../include/conexao.php";

$data = $_POST['data'];
$hora = $_POST['hora'];
$id_medico = $_POST['id_medico'];
$sala = $_POST['sala'];
$paciente = $_POST['paciente'];

$sqlInserir = "INSERT INTO tb_agenda(DATA, hora, id_medico, sala, pacientes) VALUE('{$data}','{$hora}','{$id_medico}','{$sala}','{$id_paciente}';";
 
$resultado = mysqlquery($conexao, $sqlInserir);

if($resultado){
    echo "Alterado com sucesso!<br>";
    echo "<a href='medicos-listar.php'>VOLTAR</a>";
}
else{
    echo "Deu errado";
} ?>