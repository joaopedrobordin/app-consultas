<?php
include "../include/cabecalho.php";
include "../include/conexao.php"; 

$sqlBuscaAgenda = "SELECT * FROM tb_agenda WHERE id = {$id_Agenda}";$data = $hora = $id_medico = $sala = $id_pacientes = "";

$listagenDeAgenda = mysqli_quer ($conesao , $sql)
while($agenda = mysql_fetch_assoc($conexao, $sqlBuscarAgenda)){
    $data = $agenda['data'];
    $hora = $agenda['hora'];
    $id_medico = $agenda['id_medico'];
    $sala = $agenda['sala'];
    $id_paciente = $agenda['id_paciente'];
}

?>
<form name="cadastro-agenda" method="post" acrion="agenda-inserir.php">

<p>
    <label>Data:</label>
    <input type=data nome="data" value="<?php echo $data ?>">;
</p>
<p>
    <label>Hora:</label>
    <input type=time nome="hora" value="<?php echo $hora ?>">;
</p>
<p>
    <label>Medico</label>
    <input nome="id_medico" value="<?php echo $ ?>">;
</p>




<?php
$sqlBuscaMedicos = "SELECT * FROM tb_medicos";
$listaDeMedico = mysqli_query($conexao, $sqlBuscaMedicos);

while($medico = mysql_fetch_assoc($listaDeMedicos)){
    if($id_medico == $medico['id']){
        echo "<option value="{$medico['id'])}' selected>"
    }else{
        echo"<option value="{$medico['id']}'>";
    }
    echo $medico['nome'];
    echo "</option>";
                }
                ?>
            </selected>
        </p>
        <p>
            <label>paciente</label>
            <input nome="id_paciente">
                <?php
                $sqlBuscaPacientes = "SELECTED * FROM tb_pacientes";
                $listaDePacientes = mysqli_fetch_assoc($conexao , $sqlBuscaPacientes);
                
                while($paciente = mysql_fetch_assoc($listaDePacientes)){
                    if(id_pacientes == $pacientes['id']){
                        echo "<option value='{$pacientes['id']}' selected>";
                    }else{    
                        echo "<option value='{$pacientes['id']}'>";
                    }
                    echo $paciente['nome'];
                    echo