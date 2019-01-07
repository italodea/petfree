<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Início</title>

  <!-- CSS  -->
  <link href='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body class="grey lighten-3">
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

  <div id="container">
      <div id="menu">
        <ul id="slide-out" class="side-nav fixed">
          <br>
          <center><i class="large material-icons">person</i></center>
          <center><h4 class="card-title"><?php echo $_SESSION['nome'];?></h4></center>
          <br>
          <li><a href="gerente.php"><i class="material-icons">home</i>início</a></li>
          <li><a href="arquivados.php"><i class="material-icons">call_to_action</i>Arquivados</a></li>
          <li><a href="solicitacoes.php"><i class="material-icons">drafts</i>Solicitações</a></li>
          <li class="grey lighten-3"><a href="cadastrarpet.php"><i class="material-icons">add</i>Cadastrar pet</a></li>
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

        <div class="row">
          <form class="col s12 white" method="post" action="cadastros/animal.php" enctype="multipart/form-data">

            <h4>Cadastro de Pet</h4>
            <br>

            <div class="row">
              <br>
              <div class="input-field col s5  offset-s1">
                <input placeholder="insira o nome do pet" name="nome" type="text" class="validate">
                <label for="first_name">Nome</label>
              </div>
              <div class="input-field col s5">
                <input placeholder="Quantos anos tem o pet? (aprox.)" type="number" class="validate" name="idade">
                <label>Idade</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s10 offset-s1">
                <textarea name="caracteristicas" class="materialize-textarea" maxlength="120"></textarea>
                <label for="textarea1">Descreva as características do pet</label>
              </div>
            </div>

            <div class="row">
              <div class="input-field col s10 offset-s1">
              <select class="browser-default" name="tipo">
                <option value="" disabled selected>Tipo do pet:</option>
                <option value="gato">Gato</option>
                <option value="cao">Cão</option>
              </select>
            </div>
          </div>

          <div class="row">
              <div class="input-field col s10 offset-s1">
                <textarea name="imagem" class="materialize-textarea"></textarea>
                <label for="textarea1">Link da foto</label>
              </div>
          </div>
           <div class="row">
             <div class="modal-footer col s4">
                <a href="gerente.php" class="modal-close waves-effect btn-flat">Cancelar</a>
                <button class="btn waves-effect waves-light black" type="submit" name="action">Concluir
                </button>
             </div>
          </div>
          </form>
        </div>

      </div>
    
  </div>

   <!--  Scripts-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src="js/materialize.js"></script>
   
    <script src='https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js'></script>
    <script  src="js/func.js"></script>

  </body>
</html>