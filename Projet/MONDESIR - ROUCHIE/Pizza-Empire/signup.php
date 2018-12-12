<?php 
include_once('app/app.php');

if(isset($_COOKIE['user'])) {
    $session->create('message', 'Erreur vous etes déjà connecté.');
    $session->create('message-box-color', 'alert-info');
    header('location: ' . root_folder . '/index.php');
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
        <title>Pizza Empire</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">

        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
        <link rel="stylesheet" href="fonts/beyond_the_mountains-webfont.css" type="text/css"/>

        <!-- Stylesheets -->
        <link href="plugin-frameworks/bootstrap.min.css" rel="stylesheet">
        <link href="plugin-frameworks/swiper.css" rel="stylesheet">
        <link href="fonts/ionicons.css" rel="stylesheet">
        <link href="common/styles.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Scripts -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <style>
          /* The message box is shown when the user clicks on the password field */
          #message {
              display:none;
              background: #f1f1f1;
              color: #000;
              position: relative;
              padding: 20px;
              margin-top: 10px;
          }

          #message p {
              padding: 10px 35px;
              font-size: 18px;
          }

          /* Add a green text color and a checkmark when the requirements are right */
          .valid {
              color: green;
          }

          .valid:before {
              position: relative;
              left: -35px;
              content: "✔";
          }

          /* Add a red text color and an "x" when the requirements are wrong */
          .invalid {
              color: red;
          }

          .invalid:before {
              position: relative;
              left: -35px;
              content: "✖";
          }
        </style>

</head>
<body>

<header class="fixed-top">
        <div class="container">
                <a class="logo" href="index.php"><img src="images/logo_pizza.png" alt="Logo"></a>

                <div class="right-area">
                        <h6><a href="booking.php" class="plr-5 color-white btn-fill-primary">Commandes: +33 1 23 12 19 99</a></h6>
                </div><!-- right-area -->

                <a class="menu-nav-icon" data-menu="#main-menu" href="#"><i class="ion-navicon"></i></a>

                <ul class="main-menu font-mountainsre" id="main-menu">
                        <li><a href="index.php"><i class="fa fa-lg fa-home"></i>&nbsp;Home</a></li>
                        <li><a href="about.php"><i class="fa fa-lg fa-history"></i>&nbsp;Histoire</a></li>
                        <li><a href="contact.php"><i class="fa fa-lg fa-phone"></i>&nbsp;Contact</a></li>
                        <li><a href="signin.php"><i class="fa fa-lg fa-sign-in"></i>&nbsp;Se connecter</a></li>
                        <li><a href="signup.php"><i class="fa fa-lg fa-user"></i>&nbsp;S'inscrire</a></li>
                </ul>

                <div class="clearfix"></div>
        </div><!-- container -->
</header>


<section class="story-area left-text center-sm-text pos-relative">
        <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
        <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        <h2>Inscription</h2>
                        <h2><?php echo $_SESSION["message"]; ?><h2>
                </div>
                <form class="form-style-1 placeholder-1" method="post" action="process/register-process.php">
      <div class="form-group">
        <label class="control-label col-sm-2" for="nom">Nom:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nom" placeholder="Pizza" name="nom" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="prenom">Prénom:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="prenom" placeholder="Empire" name="prenom" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="psswd">Mot de passe:</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="psswd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Au moins un chiffre, une majuscule, une minuscule et au moins 8 caractères" placeholder="Pizza023" name="psswd" required="">
          <div id="message">
            <h6>Mot de passe devant contenir:</h6>
            <p id="letter" class="invalid">Une lettre <b>minuscule</b></p>
            <p id="capital" class="invalid">Une lettre <b>majuscule</b></p>
            <p id="number" class="invalid">Un <b>chiffre</b></p>
            <p id="length" class="invalid">Minimum <b>8 caractères</b></p>
          </div>
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="birth">Date de naissance:</label>
        <div class="col-sm-10">
          <input type="date" class="form-control" id="birth" placeholder="2002-12-25" max="2002-12-31" name="birth" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="postal">Adresse postale:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="postal" placeholder="Dugny etc..." name="postal" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email" placeholder="ok@ok" name="email" required="">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2" for="phone">Téléphone:</label>
        <div class="col-sm-10">
          <input type="tel" class="form-control" id="phone" placeholder="0612345678" name="phone" pattern="[0-9]{10}"
       required>
        </div>
      </div>
      <div class="form-group">        
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default" style="cursor: pointer; border: 1px dotted red">Valider</button>
        </div>
      </div>
    </form>
               
        </div><!-- container -->
</section>

<footer class="pb-50  pt-70 pos-relative">
        <div class="pos-top triangle-bottom"></div>
        <div class="container-fluid">
                <a href="index.php"><img src="images/logo_pizza.png" alt="Logo"></a>

                <div class="pt-30">
                        <p class="underline-secondary"><b>Adresse:</b></p>
                        <p>42 rue des Restos, 93 666 Pas-Très-Seine-Saint-Denis</p>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b>Numéro:</b></p>
                        <a href="tel:+33 6 27 75 16 52 ">+33 1 23 12 19 99 </a>
                </div>

                <div class="pt-30">
                        <p class="underline-secondary mb-10"><b>Email:</b></p>
                        <a href="mailto:website@localhost">pizza@empire.com</a>
                </div>

                <ul class="icon mt-30">
                        <li><a href="https://www.pinterest.fr/"><i class="ion-social-pinterest"></i></a></li>
                        <li><a href="https://www.facebook.com/"><i class="ion-social-facebook"></i></a></li>
                        <li><a href="https://twitter.com/"><i class="ion-social-twitter"></i></a></li>
                        <li><a href="https://dribbble.com/"><i class="ion-social-dribbble-outline"></i></a></li>
                        <li><a href="https://www.linkedin.com/"><i class="ion-social-linkedin"></i></a></li>
                        <li><a href="https://vimeo.com/fr/"><i class="ion-social-vimeo"></i></a></li>
                </ul>

                <p class="color-light font-9 mt-50 mt-sm-30"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Tous droits réservés | Site fait avec <i class="ion-heart" aria-hidden="true"></i> par <a href="https://colorlib.com" target="_blank">MONDESIR et ROUCHIÉ</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
        </div><!-- container -->
</footer>

<!-- SCRIPTS -->
<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/bootstrap.min.js"></script>
<script src="plugin-frameworks/swiper.js"></script>
<script src="common/scripts.js"></script>
</body>
</html>

<script>
  var myInput = document.getElementById("psswd");
  var letter = document.getElementById("letter");
  var capital = document.getElementById("capital");
  var number = document.getElementById("number");
  var length = document.getElementById("length");
  
  // When the user clicks on the password field, show the message box
  myInput.onfocus = function() {
      document.getElementById("message").style.display = "block";
  }
  
  // When the user clicks outside of the password field, hide the message box
  myInput.onblur = function() {
      document.getElementById("message").style.display = "none";
  }
  
  // When the user starts to type something inside the password field
  myInput.onkeyup = function() {
    // Validate lowercase letters
    var lowerCaseLetters = /[a-z]/g;
    if(myInput.value.match(lowerCaseLetters)) {  
      letter.classList.remove("invalid");
      letter.classList.add("valid");
    } else {
      letter.classList.remove("valid");
      letter.classList.add("invalid");
    }
    
    // Validate capital letters
    var upperCaseLetters = /[A-Z]/g;
    if(myInput.value.match(upperCaseLetters)) {  
      capital.classList.remove("invalid");
      capital.classList.add("valid");
    } else {
      capital.classList.remove("valid");
      capital.classList.add("invalid");
    }
  
    // Validate numbers
    var numbers = /[0-9]/g;
    if(myInput.value.match(numbers)) {  
      number.classList.remove("invalid");
      number.classList.add("valid");
    } else {
      number.classList.remove("valid");
      number.classList.add("invalid");
    }
    
    // Validate length
    if(myInput.value.length >= 8) {
      length.classList.remove("invalid");
      length.classList.add("valid");
    } else {
      length.classList.remove("valid");
      length.classList.add("invalid");
    }
  }
</script>