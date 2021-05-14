<?php

$banco = 'bd_consultorio';
$servidor = 'localhost';
$usuario = 'root';
$senha = '';

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);


if(!$conexao)
    {   die("<h3>Não deu certo</h3>!!! Erro: " .mysqli_connect_error());    }
    
    ?>