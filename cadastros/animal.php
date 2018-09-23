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



$tmp = explode('.', $nome_arquivo);
$extensao =  end($tmp);

$tmp1 = explode('/', $nome_temporario);
$novo_nome_arquivo = end($tmp1) . ".$extensao";
$path_de_envio = $local_salvamento . basename($novo_nome_arquivo);
echo "extensao:".$extensao."<br>";
echo "nametmp:".$nome_temporario."<br>";
echo "path:".$novo_nome_arquivo."<br>";

try {
	if ($tamanho > 2000000) {
		echo "O arquivo tem de ter menos de 2MB";
		//header("Location:../");
	}else if(! in_array($extensao,$extensões_permitidas)) {
		echo "Extensão não suportada apenas arquivos JPEG ou PNG";
		//header("Location:../");
	}
	session_start();
	$fazerupload = move_uploaded_file($nome_temporario, $path_de_envio);
	$query = "INSERT INTO animal(`nome`,`caracteristicas`,`idade`,`tipo`) VALUES('$nome','$caracteristicas','$idade','$tipo_animal');";
	$run = mysqli_query($con,$query);
	
	$ultimo_animal = mysqli_fetch_array(mysqli_query($con,"select id from animal ORDER BY id DESC
LIMIT 1;"));
	$query = "INSERT INTO foto(nomeArquivo,postador,animal) VALUES('$novo_nome_arquivo','".$_SESSION['id']."','".$ultimo_animal['id']."');";
	$run = mysqli_query($con,$query);
	echo "$query";
	header("Location:../gerente.php");
} catch (Exception $e) {
	
}


?>