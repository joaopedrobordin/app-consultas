<?php include "../include/cabecalho.php"; ?>



<form name="formulario-pacientes" method="post" action="pacientes-inseir.php">
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