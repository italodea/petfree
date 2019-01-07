<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>PetFree</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="grey lighten-3">

	<nav class="white" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="../animais" class="brand-logo"><i class="material-icons">arrow_back</i>PetFree</a>

				<ul id="nav-mobile" class="sidenav">
					<li><a href="#">Navbar Link</a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			</div>
	</nav>

	<br>
	<div class="row">
		<form class="col s12 m6 offset-m3 white" method="post" action=<?php echo "'enviar_solicitacao.php?id=".$_GET['id']."'";?> enctype="multipart/form-data">
			<h4>Adotar pet</h4><br>
			<div class="row"><br>
				<div class="input-field col s12 m10 offset-m1">
					<label>Insira o seu nome:</label>
					<input placeholder="Adotador" name="nome" type="text" class="validate">
				</div>
				<div class="input-field col s12 m10 offset-m1">
					<label>Endereço:</label>
					<input placeholder="rua, número, bairro, cidade" name="endereco" type="text" class="validate">
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12 m10 offset-m1">
					<label>Número:</label>
					<input placeholder="celular/telefone" name="telefone" type="text" class="validate">
				</div>
				<div class="input-field col s12 m10 offset-m1">
					<label>Endereço de email:</label>
					<input id="email_inline" type="email" class="validate" name="email">
				</div>
			</div>
			
			<div class="row">
				<a href="../animais" class="modal-close waves-effect btn-flat">Cancelar</a>
				<button class="btn waves-effect waves-light black" type="submit" name="action">Concluir</button>
			</div>
						 
					</form>
				</div>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="../js/materialize.js"></script>
	<script src="../js/init.js"></script>

	</body>
</html>