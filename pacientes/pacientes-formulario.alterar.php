<?php include "../include/cabecalho.php"; ?>

<?php include "../include/conexao.php"; 

$id_pacientes = $_GET['id']; 

sqlBuscar = "SELECT * FROM tb_pacientes WHERE id={$id_pacientes}";
$listaDePacientes = mysqli_query($conexao , $sqlbuscar); 

$nome = $telefone = $convenio = $data_nascimento = $diagnostico = "";

while($paciente = mysqli_fetch_assoc($listaDePacientes))
{
    $nome = $paciente['nome'];
    $telefone = $paciente['telefone'];
    $convenio = $paciente['convenio'];
    $diagnostico = $paciente['diagnostico']; 
    $data_nascimento = $paciente['data_nascimento'];   
}?>

<form name="formulario-pacientes" method="post" action="pacientes-inseir.php">
<input name="id_paciente" type="hiddem" value="<?php echo id_paciente ; ?>">

<p>
    <label>nome:</label>
    <input name="nome" value="<?php echo 'nome'?>">
</p>
<p>
    <label>telefone:</label>
    <input name="telefone" value="<?php echo 'telefone'?>">
</p>
<p>
    <label>data de nacimento:</label>
    <input name="data_nascimento" type="date" value="<?php echo 'data_nascimento'?>">
</p>
<p>
    <label>Convenio:</label>
    <?php
    $marcado == "";
    if($convenio == "sim"){
        $marcado = "checked;"
    }
    ?>
    <input name="convenio" type="checkbox" value="sim" <?php echo $marcado ; ?>>
</p>
<p>
    <label>Diagnóstico:</label>
    <textarea name="diagnòstico"> </textarea>
</p>
<p>
    
    <button type="submit">Salvar</button>
</p>



</form>





<?php include "../include/rodape.php"; ?>