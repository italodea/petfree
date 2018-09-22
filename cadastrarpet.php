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
<body class="grey lighten-3">


  <div id="container">
      <div id="menu">
        <ul id="slide-out" class="side-nav fixed">
          <br>
          <center><i class="large material-icons">person</i></center>
          <center><h4 class="card-title">Juarez</h4></center>
          <br>
          <li><a href="gerente.php"><i class="material-icons">home</i>início</a></li>
          <li><a href="arquivados.php"><i class="material-icons">call_to_action</i>Arquivados</a></li>
          <li class="grey lighten-3"><a href="cadastrarpet.php"><i class="material-icons">add</i>Cadastrar pet</a></li>
          <li><a href="cadastrargerente.php"><i class="material-icons">add</i>Cadastrar gerente</a></li>
          <li class="no-padding">
              <ul class="collapsible collapsible-accordion">
                <li>
                    <a class="collapsible-header">Pets<i class="material-icons">arrow_drop_down</i></a>
                    <div class="collapsible-body">
                      <ul>
                          <li><a href="gatos.php">Gatos</a></li>
                          <li><a href="caes.php">Cães</a></li>
                        </ul>
                    </div>
                  </li>
              </ul>
            </li>
            <li><a href="#!"><i class="material-icons red-text">exit_to_app</i>Sair</a></li>
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
            <div class="file-field input-field col s10 offset-s1">
              <div class="btn black">
                <span>Imagem</span>
                <input type="file" name="foto" required>
              </div>
              <div class="file-path-wrapper">
                <input class="file-path validate" type="text" placeholder="Faça o upload de uma ou mais fotos">
              </div>
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