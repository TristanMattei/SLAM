<?php
include_once('app/app.php');
// Création de la base de données SQL inscription, gestion d'erreur et vérification
$dbhost = 'localhost';
$dbname = "restaurant";
$dbuser = 'root';
$dbpass = '';

try
{
	$bdd = new PDO('mysql:host=localhost', $dbuser, $dbpass);
	// set the PDO error mode to exception
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE DATABASE IF NOT EXISTS restaurant CHARACTER SET 'utf8';";
    // use exec() because no results are returned
    $bdd->exec($sql);
}
catch (PDOException $e)
{
  die ('Erreur : '.$e ->getMessage());
}

$bdd = null;

try
{
	$bdd = new PDO('mysql:host=localhost; dbname=restaurant', $dbuser, $dbpass);
	// set the PDO error mode to exception
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    psswd VARCHAR(30) NOT NULL,
    birth DATE NOT NULL,
    postal TEXT NOT NULL,
    email VARCHAR(50) NOT NULL,
    phone VARCHAR(10) NOT NULL,
    role CHAR(1) NOT NULL,
    reg_date TIMESTAMP
    ) ENGINE=InnoDB";
   // use exec() because no results are returned
   $bdd->exec($sql);
   
   $sql2 = "INSERT IGNORE INTO users
    VALUES ('1', 'Pizza', 'Empire', 'root', '1999-12-23', '42 rue des Restos, 93 666 Pas-Tres-Seine-Saint-Denis', 'pizza@empire.com', '0123121999', 'A', CURRENT_TIMESTAMP);";
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
<html lang="fr">
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
            @media (min-width: 700px){
                .histoire{padding-left: 200px; padding-right: 200px}
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
                        <li><a id="signin" href="signin.php"><i class="fa fa-lg fa-sign-in"></i>&nbsp;Se connecter</a></li>
                        <li><a id="signout" style="display: none;"> onclick="<?setcookie("user", "", time() - 3600);?>"><i class="fa fa-lg fa-sign-in"></i>&nbsp;Se déconnecter</a></li>
                        <li><a href="signup.php"><i class="fa fa-lg fa-user"></i>&nbsp;S'inscrire</a></li>
                </ul>

                <div class="clearfix"></div>
        </div><!-- container -->
</header>


<section class="bg-1 h-900x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white">

                                <h5><b>La Meilleure Dans La Ville</b></h5>
                                <h1 class="mt-30 mb-15">Pizza & Pasta</h1>
                                <h5><a href="#menu_jour" class="btn-primaryc plr-25"><b>Menu du Jour</b></a></h5>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text pos-relative">
        <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
        <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        <h2>Notre Empire</h2>
                </div>

                <div class="row">
                        <div class="dplay-tbl-cell center-sm-text color-white histoire">
                                <p class="mb-30">Nous mettons un point d’honneur à utiliser des produits de qualité majoritairement biologiques et italiens. Nous avons passé du temps à sélectionner les meilleurs producteurs et à tisser un lien de confiance avec eux pour vous offrir un max de qualité et de fraicheur. Nos fruits et légumes sont biologiques, notre bétaille est labellisé et élevé dans de très bonnes conditions dans la Pas-Très-Seine-Saint-Denis. Notre bœuf est d'origine italienne et élevé en plein air. Nos vins sont natures et en biodynamie, ils sont concoctés par des magiciens et proviennent de terroirs incroyables.
                                Nous travaillons uniquement des produits bruts car chez Nous, tout est fait maison avec beaucoup beaucoup d’amour ! Bref, nous ne proposons que de la qualité, le reste ne nous intéresse pas.</p>
                        </div><!-- col-md-6 -->
                </div><!-- row -->
        </div><!-- container -->
</section>


<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container" id="menu_jour">
                <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        <h2>Meilleures Ventes</h2>
                </div>

                <div class="row">
                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative">
                                                <h6 class="ribbon-cont"><div class="ribbon primary"></div><b>OFFRE</b></h6>
                                                <img src="images/cake.png" alt="cake" style="border-radius: 50%">
                                        </div>
                                        <h5 class="mt-20">La Tour de Pizz'</h5>
                                        <h4 class="mt-5"><b>20.00€</b></h4>
                                        <h6 class="mt-20"><a href="#" class="btn-brdr-primary plr-25"><b>Réserver</b></a></h6>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->

                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative">
                                                <h6  class="ribbon-cont"><div class="ribbon secondary"></div><b>SPÉCIALITÉ</b></h6>
                                                <img src="images/burger.png" alt="burger" style="border-radius: 50%">
                                        </div>
                                        <h5 class="mt-20">Big Burger</h5>
                                        <h4 class="mt-5"><b>12.00€</b></h4>
                                        <h6 class="mt-20"><a href="#" class="btn-brdr-primary plr-25"><b>Réserver</b></a></h6>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->

                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative"><img src="images/gelato.jpg" alt="gelato" style="border-radius: 50%"></div>
                                        <h5 class="mt-20">Ultimo Parfait Gelato</h5>
                                        <h4 class="mt-5"><b>6.00€</b></h4>
                                        <h6 class="mt-20"><a href="#" class="btn-brdr-primary plr-25"><b>Réserver</b></a></h6>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->


                        <div class="col-lg-3 col-md-4  col-sm-6 ">
                                <div class="center-text mb-30">
                                        <div class="ïmg-200x mlr-auto pos-relative">
                                                <h6 class="ribbon-cont color-black"><div class="ribbon white"></div><b>TAILLE XXL</b></h6>
                                                <img src="images/seller-2-200x200.png" alt="">
                                        </div>
                                        <h5 class="mt-20">Massima Banana Split</h5>
                                        <h4 class="mt-5"><b>7.00€</b></h4>
                                        <h6 class="mt-20"><a href="#" class="btn-brdr-primary plr-25"><b>Commander</b></a></h6>
                                </div><!--text-center-->
                        </div><!-- col-md-3 -->

                </div><!-- row -->

                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#menu_jour" class="btn-primaryc plr-25"><b>MENU DU JOUR</b></a></h6>
        </div><!-- container -->
</section>


<section>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        <h2>Notre Menu</h2>
                </div>

                <div class="row">
                        <div class="col-sm-12">
                                <ul class="selecton brdr-b-primary mb-70">
                                        <li><a class="active" href="#" data-select="*"><b>TOUT</b></a></li>
                                        <li><a href="#" data-select="pizzas"><b>PIZZAS</b></a></li>
                                        <li><a href="#" data-select="pastas"><b>PASTAS</b></a></li>
                                        <li><a href="#" data-select="specials"><b>SPÉCIALITÉS</b></a></li>
                                        <li><a href="#" data-select="desserts"><b>DESSERTS</b></a></li>
                                </ul>
                        </div><!--col-sm-12-->
                </div><!--row-->

                <div class="row">

                        <div class="col-md-6 food-menu pizzas">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="images/menu-1-120x120.jpg" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>La Margherita Prosciutto e Funghi</b><b class="color-primary float-right">20.00€</b></h5>
                                                <p class="pr-70">Tomates mozarella, du basilique frais et de l'ail.<br>
                                                <a href="booking.php" style="color: blue">12" pizza - 14" pizza - 16" pizza - Pizza Party</a></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <div class="col-md-6 food-menu pizzas">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="images/pescovegane.png" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>La Pesco Végane</b><b class="color-primary float-right">9.00€</b></h5>
                                                <p class="pr-70">Épinards, roquette, tofu fumé et des herbes... <!-- LES PLUS naturelles possibles --><br>
                                                <a href="booking.php" style="color: blue">12" pizza - 14" pizza - 16" pizza - Pizza Party</a></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <div class="col-md-6 food-menu pastas">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="images/meatballs.png" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>La Spaghet'</b><b class="color-primary float-right">8.00€</b></h5>
                                                <p class="pr-70">Spaghetti Bolognaise Panzani et boules de viande.<br>
                                                <a href="booking.php" style="color: blue">KidZ - TeenZ - BigZ - FatZ</a></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <div class="col-md-6 food-menu pastas">
                                <div class="sided-90x mb-30 ">
                                        <div class="s-left"><img class="br-3" src="images/pesto.jpg" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>Zucchini Pasta con Pesto</b><b class="color-primary float-right">8.00€</b></h5>
                                                <p class="pr-70">Nouilles italiennes accompagnées au pesto.<br>
                                                <a href="booking.php" style="color: blue">KidZ - TeenZ - BigZ - FatZ</a></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <div class="col-md-6 food-menu specials">
                                <div class="sided-90x mb-30">
                                        <div class="s-left"><img class="br-3" src="images/burger.png" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>Big Burger</b><b class="color-primary float-right">12.00€</b></h5>
                                                <p class="pr-70">Un Burger dont les calories ne peuvent être calculées.<br>
                                                    <a href="booking.php" style="color: blue">Commander</a></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <div class="col-md-6 food-menu specials">
                                <div class="sided-90x mb-30">
                                        <div class="s-left"><img class="br-3" src="images/cake.png" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>La Tour de Pizz'</b><b class="color-primary float-right">20.00€</b></h5>
                                                <p class="pr-70">La fameuse Pizza Cake 6 couches: pepperoni, jambon saucisses.<br>
                                                <a href="booking.php" style="color: blue">Commander</a></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <div class="col-md-6 food-menu desserts">
                                <div class="sided-90x mb-30">
                                        <div class="s-left"><img class="br-3" src="images/gelato.jpg" alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>Ultimo Parfait Gelato</b><b class="color-primary float-right">6.00€</b></h5>
                                                <p class="pr-70">Ou bien Rainbow Icecream, devinez chaque gôut!<br>
                                                <a href="booking.php" style="color: blue">Commander</a></p></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                        <div class="col-md-6 food-menu desserts">
                                <div class="sided-90x mb-30">
                                        <div class="s-left"><img class="br-3" src="images/banana.png"  alt="Menu Image"></div><!--s-left-->
                                        <div class="s-right">
                                                <h5 class="mb-10"><b>Massima Banana Split</b><b class="color-primary float-right">7.00€</b></h5>
                                                <p class="pr-70">Fraise, vanille chocolat, chantilly, cerises et banane.<br>
                                                <a href="booking.php" style="color: blue">Commander</a></p></p>
                                        </div><!--s-right-->
                                </div><!-- sided-90x -->
                        </div><!-- food-menu -->

                </div><!-- row -->

                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#menu_jour" class="btn-primaryc plr-25"><b>MENU DU JOUR</b></a></h6>
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

<!-- SCIPTS -->
<script src="plugin-frameworks/jquery-3.2.1.min.js"></script>
<script src="plugin-frameworks/bootstrap.min.js"></script>
<script src="plugin-frameworks/swiper.js"></script>
<script src="common/scripts.js"></script>

</body>
</html>
