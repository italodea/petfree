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
	      <a id="logo-container" href="../" class="brand-logo"><i class="material-icons">arrow_back</i>PetFree</a>

	      <ul id="nav-mobile" class="sidenav">
	        <li><a href="#">Navbar Link</a></li>
	      </ul>
	      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	    </div>
	</nav>

  <div class="row">
    <center>
      <img src="/img/titulo-pets.png">
    </center>
  </div>


<?php


include '../etc/conexao.php';

$query = "SELECT animal.id, animal.nome, animal.caracteristicas,animal.idade,animal.tipo, foto.nomeArquivo, foto.animal from animal, foto where animal.id = foto.animal and animal.adotado = 'esperando';";

$run = mysqli_query($con,$query);


while ($row = mysqli_fetch_array($run)){
  ?><div class='row'>
    <div class='col s12 m6 '>
      <div class='card medium'>
        <div class='card-image'>
          <!--<img src='/fotos_animais/".$row['nomeArquivo']."'>-->
					<img src='<?php echo $row['nomeArquivo'];?>'>
        </div>
        <div class='card-content'>
           <span class='card-title activator grey-text text-darken-4'><?php echo $row['nome'];?><i class='material-icons right'>keyboard_arrow_up</i></span>
        </div>

        <div class='card-reveal'>
        <span class='card-title grey-text text-darken-4'>Informações sobre <?php echo $row['nome'];?><i class='material-icons right'>close</i></span>
        <table class="striped">
        <tbody>
          <tr>
            <td>Descrição:</td>
            <td><?php echo $row['caracteristicas'];?></td>
          </tr>
          <tr>
            <td>Idade</td>
            <td><?php echo $row['idade'];?> ano(s)</td>
          </tr>
          <tr>
            <td>Tipo</td>
            <td><?php echo $row['tipo'];?></td>
          </tr>
        </tbody>
      </table>
        </div>
        <div class='card-action'>
          <a href='../adotar/?id=<?php echo $row['id'];?>'><i class='material-icons'>pets</i> adotar</a>
        </div>
      </div>
    </div>  
  <?php   
  }
  ?>









  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="../js/materialize.js"></script>
  <script src="../js/init.js"></script>

  </body>
</html>