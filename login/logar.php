<?php 

include '/etc/conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "select * from gerente where email = '$email' and senha = md5('$senha');";

$run = mysqli_query($con,$query);

if (mysql_numi_rows($run) == 0){
	echo "não encontrado";
}else{
	var_dump($run);
}

?>