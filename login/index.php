<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>PetFree</title>

	<!-- CSS  -->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="/css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
	<link href="/css/design.css" type="text/css" rel="stylesheet"  media="screen,projection"/>
</head>

<!-- CONTEÚDO -->
<body class="brown lighten-5">
	<!-- BARRA DE NAVEGAÇÃO -->
	<nav class="white" role="navigation">
		<div class="nav-wrapper container">
			<a id="logo-container" href="index.php" class="brand-logo">PetFree</a>
		</div>
	</nav>

	<br>

	<!-- CARD -->
	<div class="row">
		<div class="col s12 m8 offset-m2 xl6 offset-xl3">
			<div class="card white">
				<div class="card-content black-text">
					<div class="row">
						<center>
							<span class="card-title">Cadastro</span>
						</center>
					</div>
					<form method="post" action="/login/logar.php">
						<div class="row">
        			<div class="input-field col s10 offset-s1">
          			<input name="email" type="email" class="validate">
          			<label for="Email">Email</label>
        			</div>
      			</div>
      			<div class="row">
        			<div class="input-field col s10 offset-s1">
          			<input name="senha" type="password" class="validate">
          			<label for="Senha">Senha</label>
        			</div>
      			</div>
      			<div class="row">
      				<input class="waves-effect waves-teal btn-flat col offset-s8 s2" value="Login" type="submit">
      			</div>
					</form>
				</div>
			</div>
		</div>
	</div>


	<!--  Scripts-->
	<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<script src="/js/materialize.js"></script>
	</body>
</html>