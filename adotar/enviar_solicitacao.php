<?php 
include '../etc/conexao.php';
$id = $_GET['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$query = "insert into candidato(nome,telefone,email,animal) values('$nome','$telefone','$email','$id');";

$run=mysqli_query($con,$query);
header("location:../animais");
?>