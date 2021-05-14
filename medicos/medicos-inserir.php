<?PHP

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$crm = $_POST['crm'];
$especialidade = $_´POST['especialidade'];

include "../include/conexao.php";
$sqlInserir = "INSERT INTO tb_medicos(nome, telefone, crm, especialidade)" values('{$nome}' , '{telefone}' , '{crm}' . '{especialidade}');";

$resultado = mysqli_query($conexao, $sqlInserir);

if($resultado)

{ echo "medico inserido com sucesso!<br>";  echo "<a href='medicos-listar.php'>sair</a>";}

else
{echo "Alqum erro aconteceu";}
                                                                            
?>