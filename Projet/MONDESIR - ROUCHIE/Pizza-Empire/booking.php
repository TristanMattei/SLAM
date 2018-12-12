<?php 
session_start();
$_SESSION['message']='';
include_once ('app/Menu.php');
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
            @media (min-width: 700px){
                .histoire{padding-left: 200px; padding-right: 200px}
            }
        </style>
</head>
<body>

<header>
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
                        <h2>Réservations</h2>
                        <h2><?php echo $_SESSION["message"]; ?><h2>
                </div>
                    <form id="form-contact" role="form" method="POST" action="./process/booking-process.php">
                        <div class="offset-2 col-md-8 col-xs-2">
                        <div class="form-area text-center">
                        <br style="clear:both">
                        <h3 style="margin-bottom: 25px; text-align: center;">Faites une réservation</h3>

                        <select class="form-control" name="menu_id">
                            <option value="0">La Margherita</option>
                            <option value="1">La Pesco Végane</option>
                            <option value="2">La Spaghet'</option>
                            <option value="3">Pasta Pesto</option>
                            <option value="4">Big Burger</option>
                            <option value="5">Pizza Cake</option>
                            <option value="6">Gelato</option>
                            <option value="7">Banana Split</option>
                        </select>
                        
                        <br style="clear:both">

                        <div class="form-group">
                            <input type="number" class="form-control" id="number" name="number" min="0" max="40" placeholder="Quantité (40 max)" required>
                        </div>

                        <div class="form-group">
                            <input type="date" class="form-control" id="res_date" name="res_date" min="2018-12-12" placeholder="Date" required>
                        </div>

                        <button type="submit" id="submit" name="submit" class="btn btn-primary">Reserver Maintenant</button>
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