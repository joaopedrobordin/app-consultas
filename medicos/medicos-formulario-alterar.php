<?php include "../include/cabecalho.php";
        include "../include/conexao.php";

$sqlBusca = "SELECT * FROM tb_pacientes"; //busca a lista no banco de dados

$listaDePacientes = mysqli($conexao , $sqlBuscar);?>

<table class="table table-hover">
    <tr>
        <td>ID</td>
        <td>nome</td>
        <td>telefone</td>
        <td>Data de nacimento</td>
        <td>Convenio</td>
        <td>Ações</td>
    </tr>

    

<?php 
while($pacientes = mysql_fetch_assoc($listaDePacientes))
{  echo "<tre>";
    echo "<td>{$pacientes['id']}</td>"
 }

include "../include/rodape.php";




?>
