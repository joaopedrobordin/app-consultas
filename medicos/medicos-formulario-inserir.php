<?PHP include "../include/cabecalho.php" ; ?>

<form nome="formulario-inserir-medicos" method="post" action="medicos-alterar.php">

<input name="id_medico" type="hidden"value="<?php echo $_GET['id_medico']; ?>">
    <p>
    <label>Nome:</lebel>   // <input name="nome" values="<?php echo $nome ; ?>">
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