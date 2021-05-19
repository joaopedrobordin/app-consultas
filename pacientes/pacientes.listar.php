<?php include "../include/cabecalho.php"; ?>


<hr>
<p> <a href="medicos-formulario-inserir.php">Novo medico</a> </p>

<?php 
include "../include/conexao.php";
$sqlBusca = "SELECT * FROM tb_pacientes;";
$listaDePascientes = mysqli_query($conexao , $sqlBusca);
?>
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
        echo "<td>{$paciente['Data De Nascimento']}</th>";
        echo "<td>{$paciente['ação']}</th>";
        echo "<td>  <a href='#'>alterar</a> | ";
        echo "<a href='Excluir'></a></td>";
        echo "</tr>"
     }?>
</table>

<?php include "../include/rodape.php"; ?>


     
    