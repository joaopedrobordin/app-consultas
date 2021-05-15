<?PHP include "../include/cabecalho.php" ; ?>

<form nome="formulario-inserir-medicos" method="post" action="medicos-inserir.php">
    <p>
    <label>Nome:</lebel>    <input name="nome"> 
    </p>

    <p>
    <label>telefone:</label>    <input name="telefone">   
    </p>

    <p>
    <label>crm</label>     <input name="crm">
    </p>

    <p>
    <label>Especialidade:</label>
    <select name="especialidade">
         <option values="cardiologista">cardiologista</option>   
         <option values="nutricionista">nutricionista</option>
         <option values="ortopedista">ortopedista</option>
    </select>
    </p>

    <p>
        <button type="submit">Salvar</button>
    </p>
</form>

<?PHP include "../include/rodape.php" ; ?>





?>