<?php include "../include/cabecalho.php"; ?>


<hr>
<p> <a href="#">Novo medico</a> </p>

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
        echo "<th>{$medico['id']}</th>";  
        echo "<th>{$medico['nome']}</th>";
        echo "<th>{$medico['telefone']}</th>";
        echo "<th>{$medico['crm']}</th>";
        echo "<th>{$medico['especialidade']}</th>";
        echo "<th>ações | excluir</th>";
     echo"</tr>";
    }
    ?>












?>