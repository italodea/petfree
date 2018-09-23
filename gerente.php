<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Início</title>

  <!-- CSS  -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<?php session_start();
include 'etc/conexao.php';



if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['id']) == true))
{
  unset($_SESSION['email']);
  unset($_SESSION['id']);
  unset($_SESSION['nome']);
  header('location:index.php');
  }

?>

<body class="grey lighten-3">


	<div id="container">
  		<div id="menu">
	    	<ul id="slide-out" class="side-nav fixed">
	    		<br>
	    		<center><i class="large material-icons">person</i></center>
	    		<center><h4 class="card-title"><?php echo $_SESSION['nome']; ?></h4></center>
	    		<br>
	    		<li class="grey lighten-3"><a href="gerente.php"><i class="material-icons">home</i>início</a></li>
	    		<li><a href="arquivados.php"><i class="material-icons">call_to_action</i>Arquivados</a></li>
	    		<li><a href="solicitacoes.php"><i class="material-icons">drafts</i>Solicitações</a></li>
	    		<li><a href="cadastrarpet.php"><i class="material-icons">add</i>Cadastrar pet</a></li>
	      		<li><a href="cadastrargerente.php"><i class="material-icons">add</i>Cadastrar gerente</a></li>
	      		<li><a href="/etc/exit.php"><i class="material-icons red-text">exit_to_app</i>Sair</a></li>
	    	</ul>
  		</div>
		<div class="navbar-fixed">
	  		<nav class="white" role="navigation">
			    <div class="nav-wrapper container">
			      <a id="logo-container" href="gerente.php" class="brand-logo"><i class="material-icons">pets</i>PetFree</a>
			    </div>
			</nav>
		</div>

  		<div id="content" class="grey lighten-3">

    		<a href="#" data-activates="slide-out" class="button-collapse hide-on-large-only"><i class="material-icons">menu</i></a>
    
    		<h4>Informações atuais</h4>

    		<div class="row">
			    <div class="col s6 m6">
			      <div class="card white">
			        <div class="card-content">
			          <span class="card-title">Animais em espera</span>
			          <h1>
			          	<?php
			          		$query = "select id from animal where adotado = 'esperando';";
			          		$run = mysqli_query($con,$query); 
			          		echo  mysqli_num_rows($run);
			          		?></h1>
			        </div>
			      </div>
			    </div>

			    <div class="col s6 m6">
			      <div class="card white">
			        <div class="card-content">
			          <span class="card-title">Animais adotados</span>
			          <h1>
			            	<?php
			          		$query = "select id from animal where adotado != 'esperando';";
			          		$run = mysqli_query($con,$query); 
			          		echo  mysqli_num_rows($run);
			          		?></h1>
			        </div>
			      </div>
			    </div>
			</div>

			<h4>Meus cadastros</h4>



<?php


$query = "SELECT animal.id, animal.nome, animal.caracteristicas, foto.nomeArquivo, foto.postador, foto.animal from animal, foto where animal.id = foto.animal and foto.postador = '".$_SESSION['id']."' and animal.adotado = 'esperando'; ";

$run = mysqli_query($con,$query);

while ($row = mysqli_fetch_array($run)) {
	echo 	"


<div class='row'>
				    <div class='col s6 m6'>
				      <div class='card large'>
				        <div class='card-image'>
				          <img src='/fotos_animais/".$row['nomeArquivo']."'>
				          <span class='card-title black-text'>".$row['nome']."</span>
				          <a class='btn-floating halfway-fab waves-effect waves-light black'><i class='material-icons'>create</i></a>
				        </div>
				        <div class='card-content'>
				          <p>".$row['caracteristicas']."</p>
				        </div>
				      </div>
				    </div>








	";
}











?>				    
    		

  		</div>
    
	</div>


    <!--  Scripts-->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
  <script src="js/materialize.js"></script>
 
  <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js'></script>
  <script  src="js/func.js"></script>

  </body>
</html>