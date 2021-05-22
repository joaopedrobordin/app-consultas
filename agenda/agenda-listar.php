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
    echo"<tr>;
    echo"<td>{$agenda['id']}</td>";
    echo"<td>{$agenda['data']}</td>";
    echo"<td>{$agenda['hora']}</td>";
    echo"<td>{$agenda['nome_medico']}</td>";
    echo"<td>{$agenda['sala']}</td>";
    echo"<td>{$agenda['nome_paciente']}</td>";
    echo"<td>alterar | ";
    echo"<a href="agenda-exluir.php?id_agenda={$agendar['id']}">exlcuir</a></td>;
    echo"</tr>;

}
?>
</table>

<?php include "../include/rodape.php"; ?>




























<?php include "../include/rodape.php"; ?>