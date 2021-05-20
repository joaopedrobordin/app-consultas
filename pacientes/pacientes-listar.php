<?php include "../include/cabecalho.php"; ?>


<hr>
<p> <a href="medicos-formulario-inserir.php">Novo medico</a> </p>

<?php 
include "../include/conexao.php";
$sqlBusca = "SELECT * FROM tb_pacientes;";
$listaDePascientes = mysqli_query($conexao , $sqlBusca);
?>
<p>
<a href="pacientes-formulario-inserir.php">Novo pacientes</a>
</p>
<table class="table">
    <tr>
        <th>ID</th>  
        <th>Nome</th>
        <th>Telefone</th>
        <th>Data De nascimento</th>
        <th>convenio</th>
        <th>ações</th>
    </tr>
    <?php
    while($paciente = mysqli_fetch_assoc($listaDePascientes)){
     echo "<tr>";
        echo "<td>{$paciente['id']}</th>";  
        echo "<td>{$paciente['nome']}</th>";
        echo "<td>{$paciente['telefone']}</th>";
        echo "<td>{$dataBrasil = date ("d-m-Y" , strtotime ($paciente['Data De Nascimento'])}</th>";
        echo "<td>{$paciente['ação']}</th>";
        echo "<td>  <a href='#'>alterar</a> | ";
        echo "<a href="Pacientes-Excluir.php$id={$pacientes['id']}'>Escluir</a></td>";
        echo "</tr>"
     }?>
</table>

<?php include "../include/rodape.php"; ?>


     
    