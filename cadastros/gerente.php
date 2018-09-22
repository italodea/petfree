<?php 

include '../etc/conexao.php';

$nome = $_POST['primeiro_nome']." ".$_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "insert into gerente(`nome`,`email`,`senha`) values('$nome','$email',md5('$senha'));";
$run = mysqli_query($con,$query);

if (mysqli_error($con) == "Duplicate entry '$email' for key 'email'"){
	echo '<script> 
            alert("Atenção: este email já está sendo utilizado!");
            window.location.href="/cadastrargerente.php"; 
            </script>';
}else{
	header("Location:/cadastrargerente.php");
}


?>