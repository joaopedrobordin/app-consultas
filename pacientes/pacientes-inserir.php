<?php
include "../include/conexao.php";

$nome = $_POST['nome'];
$telefone = $_POST['tefone'];
$date_nascimento = $_POST['data_nascimento'];
$convenio = $_POST['convenio'];
$diagnostico = $_POST['diagnostco'];

$sqlInserir ="INSERT INTO tb_pacientes"(nome, telefone, data_nascimento, convenio) values({$nome}, {$telefone}, {data_nascimento}, {convenio}, {diagnostico});";

$sqlInserir =mysql_query($conexao, $sqlInserir);

if($resultado)
{echo "Cadastro realizado com sucesso.<br>" echo "<a href='pacientes-listar.php'>Voltar</a>"}
else
{echo "algo de errado"}
?>