<?php 

include '../etc/conexao.php';

session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = "select * from gerente where email = '$email' and senha = md5('$senha');";
$run = mysqli_query($con,$query);
$array = mysqli_fetch_array($run);
if (mysqli_num_rows($run) > 0){
	$_SESSION['email'] = $email;
	$_SESSION['id'] = $array['id'];
	$_SESSION['nome'] = $array['nome'];
	header('location:/gerente.php');
}else{
	unset ($_SESSION['login']);
	echo '<script> 
            alert("Login ou senha incorretos!");
            window.location.href="/login/"; 
            </script>';
    }


echo $;

?>