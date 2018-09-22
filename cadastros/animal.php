<?php 

include '../etc/conexao.php';

$nome = $_POST['nome'];
$idade = $_POST['idade'];
$caracteristicas = $_POST['caracteristicas'];
$tipo_animal = $_POST['tipo'];



//arquivo
$extensões_permitidas = ['jpeg','jpg','png'];
$local_salvamento = "../fotos_animais/";

$nome_arquivo = $_FILES['foto']['name'];
$nome_temporario = $_FILES['foto']['tmp_name'];
$tamanho = $_FILES['foto']['size'];
$extensao =  strtolower(end(explode('.', $nome_arquivo)));
$novo_nome_arquivo = end(explode('/',$nome_temporario)).".$extensao";
$path_de_envio = $local_salvamento . basename($novo_nome_arquivo);
echo "extensao:".$extensao."<br>";
echo "nametmp:".$nome_temporario."<br>";
echo "path:".$novo_nome_arquivo."<br>";

try {
	$fazerupload = move_uploaded_file($nome_temporario, $path_de_envio);
	if ($tamanho > 2000000) {
		echo "O arquivo tem de ter menos de 2MB";
	}else if(! in_array($extensao,$extensões_permitidas)) {
		echo "Extensão não suportada apenas arquivos JPEG ou PNG";
	}
	session_start();
	$query = "INSERT INTO animal(`nome`,`caracteristicas`,`idade`,`tipo`) VALUES('$nome','$caracteristicas','$tipo_animal','$idade');";
	$run = mysqli_query($con,$query);
	$ultimo_animal = mysqli_num_rows(mysqli_query($con,"select id from animal;"));
	$query = "INSERT INTO foto(nomeArquivo,postador,animal) VALUES('$novo_nome_arquivo','".$_SESSION['id']."','$ultimo_animal');";
	$run = mysqli_query($con,$query);
	echo "$query";
	header("Location:../gerente.php");
} catch (Exception $e) {
	
}


?>