<?php
include "../include/conexao.php";

$id_paciente = $_POST['id_paciente'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$data_nasicmento = $_POST['data_nasicmento'];

$convenio = ""

if(isset($_POST['convenio'])){
$convenio = $_POST['convenio'];
}
$diagnostico = $_POST['diagnostico'];

$sqlAlterar = "UPDATE tb_pacientes" SET  nome = {'nome'},
                                    telefone= {'telefone'},
                                    data_nascimento = {'data_nascimento'},
                                    convenio = {'convenio'},
                                    diagnostico = {'diagnostico'} WHERE id = {paciente};";
$resultado = mysqli_query($conexao, $sqlAlterar);

if($resultado)
{echo 'Alterado com sucesso <br>'
echo '<a href="pacientes-alterar.php">Voltar</a>
    