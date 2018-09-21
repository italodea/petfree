<!DOCTYPE html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>PetFree</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/design.css" type="text/css" rel="stylesheet"  media="screen,projection"/>
</head>

<!-- CONTEÚDO -->
<body class="brown lighten-5">

  <!-- BARRA DE NAVEGAÇÃO -->
  <nav class="white" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="index.php" class="brand-logo"><i class="material-icons">pets</i>PetFree</a>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <br>

  <!-- CARD -->
  <div class="row">
    <div class="col s4 offset-s4">
      <div class="card white">

        <div class="card-content black-text">
          <div class="row">
            <center>
              <span class="card-title">Login</span>
            </center>
          </div>
          <form>
              <div class="row">
                <div class="input-field col s8 offset-s2">
                  Email:
                  <input id="email" type="email" name="email" class="validate">
                </div>
              </div>
              <div class="row">
                <div class="input-field col s8 offset-s2">
                  Senha:
                  <input id="password" type="password" name="password" class="validate">
                </div>
              </div>
              <center>
              <div class="row">
                <div>
                  <a href="gerente.php" class="waves-effect waves-light btn black">Entrar</a>
                </div>
              </div>
              o</center>


          </form>
        </div>
      </div>
    </div>
  </div>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script type="text/javascript">
      $(document).ready(function(){
      $('.datepicker').datepicker();
    });
  </script>
  </body>
</html>