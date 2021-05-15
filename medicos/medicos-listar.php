<?php include "../include/cabecalho.php"; ?>


<hr>
<p> <a href="medicos-formulario-inserir.php">Novo medico</a> </p>

<?php 
include "../include/conexao.php";
$sqlBusca = "SELECT * FROM tb_medicos;";
$listaDeMedicos = mysqli_query($conexao , $sqlBusca);
?>
<table class="table">
    <tr>
        <th>ID</th>  
        <th>Nome</th>
        <th>Telefone</th>
        <th>CRM</th>
        <th>Especialidade</th>
        <th>ações</th>
    </tr>
    <?php
    while($medico = mysqli_fetch_assoc($listaDeMedicos)){
     echo "<tr>";
        echo "<td>{$medico['id']}</th>";  
        echo "<td>{$medico['nome']}</th>";
        echo "<td>{$medico['telefone']}</th>";
        echo "<td>{$medico['crm']}</th>";
        echo "<td>{$medico['especialidade']}</th>";
        echo "<td>  <a href='medicos-formulario-alterar.php?id_medico={$medico['id']}'>alterar</a> | ";
        echo "<a class='btn btn-danger' href='medicos-excluir.php?id_medicos={$medico['id']}'><i class='bi bi-x-lg'></a></td>";
     
    }
    ?>












