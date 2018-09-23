<?php

$id_candidato = $_GET['id'];
$acao = $_GET['acao'];

include '../etc/conexao.php';
if ($acao == '1'){
	$query = "UPDATE `candidato` SET `estado` = 'aprovado' WHERE `candidato`.`id` ='".$id_candidato."';";
	$query1 = "UPDATE `animal` SET `adotado` = '".$id_candidato."' WHERE `animal`.`id` = '".$_GET['animal']."';";
	$run = mysqli_query($con,$query);
	$run = mysqli_query($con,$query1);
	header("location:../gerente.php");
}else{
	$query = "delete from candidato where id = '".$id_candidato."';";
	$run = mysqli_query($con,$query);
	header("location:../gerente.php");
}
?>