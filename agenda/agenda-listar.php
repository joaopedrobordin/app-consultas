<?php include "../include/cabecalho.php"; ?>
<?php include "../include/conexao.php";


$sqlBusca = "SELECT * FROM tb_agenda";
$listarDeAgenda = mysqli_query($conexao , $sqlbusca);
?>

<table class="table table-hover">
<tr>
<td>id</td> 
<td>data</td>
<td>hora</td>
<td>medico</td>
<td>sala</td>
<td>paciente</td>
<td>Ações</td>
</tr>

<?php
while($agenda = mysqli_fetch_assoc(listaDeAgenda)){

}
?>





























<?php include "../include/rodape.php"; ?>