<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>PetFree</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="grey lighten-3">

	<nav class="white" role="navigation">
			<div class="nav-wrapper container">
				<a id="logo-container" href="pets.php" class="brand-logo"><i class="material-icons">arrow_back</i>PetFree</a>

				<ul id="nav-mobile" class="sidenav">
					<li><a href="#">Navbar Link</a></li>
				</ul>
				<a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			</div>
	</nav>

	<br>
	<div class="row">
					<form class="col s12 white" method="post" action="cadastros/gerente.php" enctype="multipart/form-data">

						<h4>Adotar pet</h4>
						<br>

							<div class="row">
								<br>
								<div class="input-field col s5  offset-s1">
									Insira o seu nome:
									<input placeholder="Adotador" name="primeiro_nome" type="text" class="validate">
								</div>
								<div class="input-field col s5">
									Número:
									<input placeholder="celular/telefone" name="sobrenome" type="text" class="validate">
								</div>
							</div>

							<div class="row">
								<div class="col s5 offset-s1">
									Insira o endereço de email:
									<div class="input-field inline">
										<input id="email_inline" type="email" class="validate" name="email">
										<label for="email_inline">Email</label>
										<span class="helper-text" data-error="formato inválido" data-success="certo">exemplo@email.com</span>
									</div>
								</div>
							</div>

							<div class="row">
						 <div class="modal-footer col s4">
								<a href="pets.php" class="modal-close waves-effect btn-flat">Cancelar</a>
								<a href="pets.php" class="waves-effect waves-light btn orange lighten-1"><i class="material-icons left">check</i>Concluir</a>
						 </div>
						</div>
						 
					</form>
				</div>

	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="/js/materialize.js"></script>
	<script src="/js/init.js"></script>

	</body>
</html>