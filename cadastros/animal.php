<?php

session_start();

function cadastrar_pet(){
	include '../etc/conexao.php';
	# estrutura básica para cadastrar as informações sobre o pet
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$tipo_animal = $_POST['tipo'];
	$caracteristicas = $_POST['caracteristicas'];
	$query = "INSERT INTO animal(`nome`,`caracteristicas`,`idade`,`tipo`) VALUES('$nome','$caracteristicas','$idade','$tipo_animal');";

	$run = mysqli_query($con,$query);
}

function imagem_via_link(){
	include '../etc/conexao.php';
	$link = $_POST['imagem'];
	$ultimo_animal = mysqli_fetch_array(mysqli_query($con,"select id from animal ORDER BY id DESC LIMIT 1;"));
	$query = "INSERT INTO foto(`nomeArquivo`,`postador`,`animal`) VALUES('$link','".$_SESSION['id']."','".$ultimo_animal['id']."');";
	$run = mysqli_query($con,$query);




}
function imagem_loca(){
	include '../etc/conexao.php';
	$ultimo_animal = mysqli_fetch_array(mysqli_query($con,"select id from animal ORDER BY id DESC LIMIT 1;"));
	
	//Arquivos
	$extensões_permitidas = ['jpeg','jpg','png'];
	$local_salvamento = "../fotos_animais/";

	$nome_arquivo = $_FILES['foto']['name'];
	$nome_temporario = $_FILES['foto']['tmp_name'];
	$tamanho = $_FILES['foto']['size'];
	$tmp = explode('.', $nome_arquivo);
	$extensao =  end($tmp);
	$barrinha = explode(" ", "\ ");// linha auxiliar

	if(! in_array($extensao,$extensões_permitidas)) {
		echo "Extensão não suportada apenas arquivos JPEG ou PNG";
		//header("Location:../");
	}

	/*

	Aviso: Desfaça o comentário da variavel $tmp1 que corresponde ao SO
	do servidor em que o software está sendo executado;

	*/
	//$tmp1 = explode('/', $nome_temporario);//linux ou mac
	$tmp1 = explode($barrinha[0], $nome_temporario);//windows
	$novo_nome_arquivo = end($tmp1) . ".$extensao";
	$path_de_envio = $local_salvamento . basename($novo_nome_arquivo);

	$query = "INSERT INTO foto(nomeArquivo,postador,animal) VALUES('$novo_nome_arquivo','".$_SESSION['id']."','".$ultimo_animal['id']."');";
	$run = mysqli_query($con,$query);

}






cadastrar_pet();

//escolha se as imagem serão armazenadas só o link ou se serão armazenadas no servidor
//imagem_local();
imagem_via_link();
header("Location:../gerente.php");
?>
