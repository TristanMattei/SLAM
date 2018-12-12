<?php
$dbhost = 'localhost';
$dbname = "restaurant";
$dbuser = 'root';
$dbpass = '';

try
{
    $bdd = new PDO('mysql:host=localhost; dbname=restaurant', $dbuser, $dbpass);
    // set the PDO error mode to exception
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE IF NOT EXISTS contact (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    nom VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    sujet TEXT,
    message TEXT,
    reg_date TIMESTAMP
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin";
    // use exec() because no results are returned
    $bdd->exec($sql);
   
    $sql2 = "INSERT IGNORE INTO contact
    VALUES ('1', 'Pizza', 'pizza@empire.com', 'Bienvenue', 'Voici ta boîte de réception', CURRENT_TIMESTAMP);";
    // use exec() because no results are returned
    $bdd->exec($sql2);
}
catch (PDOException $e)
{
  die ('Erreur : '.$e ->getMessage());
}

$bdd = null;
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


<section class="bg-6 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h3 class="mt-30 mb-15">Contact</h3>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        <h2>Dites Bonjour</h2>
                        <h5 class="mt-10 mb-30">Envoyez-nous un message</h5>
                        <p class="mx-w-700x mlr-auto">Donnez-nous votre avis sur les menus ou bien ce qui se passe dans votre tête</p>
                </div>

                <form class="form-style-1 placeholder-1">
                        <div class="row">
                                <div class="col-md-6"> <input class="mb-20" type="text" placeholder="Nom" name="nom">  </div>
                                <div class="col-md-6"> <input class="mb-20" type="text" placeholder="Email" name="email">  </div>
                                <div class="col-md-12"><input class="mb-20" type="text" placeholder="Sujet" name="sujet">  </div>
                                <div class="col-md-12">
                                        <textarea class="h-200x ptb-20" placeholder="Message" name="message"></textarea></div>
                        </div><!-- row -->
                        <h6 class="center-text mtb-30"><a href="#" class="btn-primaryc plr-25" style="cursor: pointer; border: 1px dotted red"><b>Envoyer</b></a></h6>
                </form>
        </div><!-- container -->
</section>


<div class="map-area h-700x mb--30">
        <div id="map" style="height:100%;"></div>
</div><!-- map-area -->

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

<!-- SCIPTS -->
<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/bootstrap.min.js"></script>
<script src="plugin-frameworks/swiper.js"></script>
<script src="common/scripts.js"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB-oEyU88bRR6xcbV1gI_Cahc8ugKC_JPE&callback=initMap"></script>

</body>
</html>