<?php
session_start();

if(isset($_SESSION['id'])) {
  $pdo = new PDO('mysql:host=localhost;dbname=restauration','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $req = $pdo->prepare("SELECT * FROM informations WHERE id = ?");
  $req->execute([
    $_SESSION['id'],
  ]);
  $valeur = $req->fetch();
}
?>

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="shortcut icon" href="img/fav.png">

  <meta name="description" content="">

  <meta name="keywords" content="">

  <meta charset="UTF-8">

  <title>Site restaurant</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>
    <header id="header">
      <div class="header-top">
        <div class="container">
            <div class="row justify-content-center">
                <div id="logo">
                  <a href="index.php"><img style="width: 100px; height: 100px;" src="img/logo.png" alt="" title="" /></a>
                </div>
            </div>

        </div>
        <div class="offset-lg-10 col-lg-2"
        <?php if(isset($valeur['id'])) { ?>
        <div class="dropdown" style="width: 400px;">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="logo" src="img/user.png" alt="logo" style="width:25px; height:25px;"><?php echo $valeur['nom']; ?>
          </button>
          <ul id="login-dp" class="dropdown-menu" style="width:400px">
        <li>
           <div class="row" >
              <div class="offset-md-2 col-md-15" >
                <form class="form" role="form" method="post" action="Espace_membre.php">
                    <button type="submit" class="btn btn-primary btn-block">Espace membre</button></br>
                </form>
                <form class="form" role="form" method="post" action="Reservation_user.php">
                    <button type="submit" class="btn btn-primary btn-block">Mes réservations</button></br>
                </form>
                <form class="form" role="form" method="post" action="PDOtraitement/PDOuserdeco.php">
                    <button type="submit" class="btn btn-primary btn-block">Deconnexion</button></br>
                </form>

              </div>
           </div>
        </li>
      </ul>
  </div>
    <?php } else { ?>
      <div class="dropdown" style="width: 400px;">
        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="logo" src="img/user.png" alt="logo" style="width:25px; height:25px;"> Login
        </button>
        <ul id="login-dp" class="dropdown-menu" style="width:400px">
      <li>
         <div class="row" >
            <div class="offset-md-2 col-md-15" >
              Connectez vous !
               <form class="form" role="form" method="post" action="PDOtraitement/PDOuserconnect.php" accept-charset="UTF-8" id="login-nav">
                  <div class="form-group">
                     <label class="sr-only" for="log_email">Email</label>
                     <input type="email" name="log_email" class="form-control" id="log_email" placeholder="Email address" required>
                  </div>
                  <div class="form-group">
                     <label class="sr-only" for="log_password">Mot de passe</label>
                     <input type="password" name="log_pass" class="form-control" id="log_pass" placeholder="Password" required>
                                           <div class="help-block text-right"><a href="">Mot de passe oublié ?</a></div>
                  </div>
                  <div class="form-group">
                     <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                  </div>
                  <div class="checkbox">
                     <label>
                     <input type="checkbox"> Enregistrer ma connexion
                     </label>
                  </div>
                  <div class="offset-lg-2">
                    Nouveau ici ! <a href="inscription.php"><b>S'inscrire</b></a>
                  </div>
               </form>
            </div>
         </div>
      </li>
    </ul>
  </div>
  <?php } ?>
      </div>
      <div class="container main-menu">
        <div class="row align-items-center justify-content-center d-flex">
            <nav id="nav-menu-container">
              <ul class="nav-menu">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="menu.php">Menu du restaurant</a></li>
                <li><a href="reserva.php">Réservation</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="plan.php">Plan</a></li>

              </ul>
            </nav>
        </div>
      </div>
    </header>
