<?php

include "../include/conexao.php";

$id_agenda = $_POST['id_agenda'];

$sqlExcluir = "DELETE FROM tb_agenda where id = {id_agenda}";
