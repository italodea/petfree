<?php 
include '../etc/conexao.php';
$id = $_GET['id'];
$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$endereco = $_POST['endereco'];

$query = "insert into candidato(nome,telefone,email,endereco,animal) values('$nome','$telefone','$email','$endereco','$id');";

$run=mysqli_query($con,$query);
header("location:../animais");
?>