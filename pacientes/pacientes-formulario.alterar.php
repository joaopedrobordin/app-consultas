<?php include "../include/cabecalho.php"; ?>

<?php include "../include/conexao.php"; 

$id_pacientes = $_GET['id']; ?>

sqlBuscar = 'SELECT * FROM tb_pacientes WHERE id={$id_pacientes}'

<form name="formulario-pacientes" method="post" action="pacientes-inseir.php">
<input name="id_paciente" type="hiddem" value="<?php echo id_paciente ; ?>">

<p>
    <label>nome:</label>
    <input name="nome">
</p>
<p>
    <label>telefone:</label>
    <input name="telefone">
</p>
<p>
    <label>data de nacimento:</label>
    <input name="data_nascimento" type="date">
</p>
<p>
    <label>Convenio:</label>
    <input name="convenio">
</p>
<p>
    <label>Diagnóstico:</label>
    <textarea name="diagnòstico"></textarea>
</p>
<p>
    
    <button type="submit">Salvar</button>
</p>



</form>





<?php include "../include/rodape.php"; ?>