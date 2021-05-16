<?PHP include "../include/cabecalho.php" ; 

$id_medico = $_GET['id_medico'] 

include "../include/conexao"; 
$sqlBuscar = 'SELECT * FROM tb_medicos WHERE id = {$id_medico};';

$lista_medicos = mysqli_query($conexao , $sqlBuscar);

$nome = $telefone = $crm = $especialidade = ""

while($medico = msqli_fetch_assoc($lista_medicos))
    {$nome = $medico['nome'];
     $telefone = $medico['telefone'];
     $crm = $medico['crm'];
     $especialide = $medicos['especialidade'];}
?>

<form nome="formulario-inserir-medicos" method="post" action="medicos-alterar.php">

<input name="id_medico" type="hidden"value="<?php echo $_GET['id_medico']; ?>">
    <p>
    <label>Nome:</lebel>    <input name="nome" values="<?php echo $nome; ?>"> 
    </p>

    <p>
    <label>telefone:</label>    <input name="telefone" values="<?php echo $telefone; ?>">   
    </p>

    <p>
    <label>crm</label>     <input name="crm" values="<?php echo $crm; ?>">
    </p>

    <p>
    <label>Especialidade:</label>
    <select name="especialidade">
         <option value="cardiologista"<?php if($especialidade == 'cardiologista'){ echo "selected "; } ?>>cardiologista</option>   
         <option value="nutricionista"<?php if($especialidade == 'nutricionista'){ echo "selected "; } ?>>nutricionista</option>
         <option value="ortopedista"<?php if($especialidade == 'ortopedista'){ echo "selected "; } ?>>ortopedista</option>
    </select>
    </p>

    <p>
        <button type="submit">Salvar</button>
    </p>
</form>

<?PHP include "../include/rodape.php" ; ?>





?>