<!DOCTYPE html>
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


<section class="bg-4 h-500x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white pt-90">
                                <h5><b>Élue Meilleure Pizzeria de France 2018</b></h5>
                                <h2 class="mt-30 mb-15">Qui nous sommes?</h2>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>


<section class="story-area left-text center-sm-text">
        <div class="container">

                <div class="row">
                        <div class="col-md-6"><img class="mb-30" src="images/about-1-600x400.jpg" alt=""></div>
                        <div class="col-md-6"><img class="mb-30" src="images/about-2-600x400.jpg" alt=""></div>
                        <div class="col-md-12">
                                <div class="mt-50 mt-sm-30 mb-50 mb-sm-30 center-text"> <h2>Venez comme vous êtes</h2> </div>

                                <h5 class="center-text mb-50 mb-sm-30 plr-25">Implanté en France depuis 1999, Pizza Empire compte aujourd'hui plus de 230 restaurants et plus de 700 collaborateurs qui servent près de 100 000 repas par jour.</h5>
                        </div>
                </div><!-- row -->

                <h6 class="center-text mt-40 mt-sm-30 mb-20">
                        <a href="index.php" class="btn-primaryc plr-25 mb-10 mlr-5"><b>MENU DU JOUR</b></a>
                        <a href="#" class="btn-primaryc secondary plr-50 mlr-5 mb-10"><b>RÉSERVER</b></a>
                </h6>

        </div><!-- container -->
</section>


<section class="story-area bg-seller color-white pos-relative">
        <div class="pos-bottom triangle-up"></div>
        <div class="pos-top triangle-bottom"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="images/heading_logo.png" alt="">
                        <h2>Ce Que Nos Clients Disent</h2>
                </div>

                <div class="swiper-container" data-slide-effect="slide" data-autoheight="false" data-swiper-speed="500" data-swiper-margin="25" data-swiper-slides-per-view="3"
                     data-swiper-breakpoints="true" data-scrollbar="true" data-swiper-loop="true" data-swpr-responsive="[1, 2, 2, 2]">

                        <div class="swiper-wrapper pb-90 pb-sm-60 left-text center-sm-text">
                                <div class="swiper-slide">
                                        <h4>Pizza Bio</h4>
                                        <p class="color-ash mb-50 mb-sm-30 mt-20">J'ai adoré cette pizza végétarienne. J'ai parcouru plusieurs restaurants, et enfin un menu sain pour ceux qui ont une âme.</p>
                                        <img class="circle-60 mb-20 " src="images/quoto-2-200x200.jpg" alt="">
                                        <h6><b class="color-primary">Jean-Marie</b>, <b class="color-ash">Client</b>
                                        </h6>
                                </div><!-- swiper-slide -->

                                <div class="swiper-slide">
                                        <h4>Énorme!!!</h4>
                                        <p class="color-ash mb-50 mb-sm-30 mt-20">Friand de fast-food et originaire d'Italie, j'ai été surprise par les spécialités de Pizza Empire (le cake et la tour).</p>
                                        <img class="circle-60 mb-20" src="images/quoto-1-200x200.jpg" alt="">
                                        <h6><b class="color-primary">Dana del Rei</b>, <b class="color-ash">Cliente</b>
                                        </h6>
                                </div><!-- swiper-slide -->

                                <div class="swiper-slide">
                                        <h4>Pastas Maniac</h4>
                                        <p class="color-ash mb-50 mb-sm-30 mt-20">En venant dans ce restaurant, j'ai retrouvé les goûts classiques de la gastronomie italienne et les pâtes sauce pesto, j'achète!</p>
                                        <img class="circle-60 mb-20" src="images/quoto-3-200x200.jpg"
                                             alt="">
                                        <h6><b class="color-primary">JM Généreux Jr.</b>, <b class="color-ash">Juge</b></h6>
                                </div><!-- swiper-slide -->

                                <div class="swiper-slide">
                                        <h4>Ils m'ont copié!</h4>
                                        <p class="color-ash mb-50 mb-sm-30 mt-20">Encore une enseigne s'inspirant de moi. Cependant, j'ai bien aimé leur pizzas et surtout leurs glaces!</p>
                                        <img class="circle-60 mb-20"
                                             src="images/mcdo.png" alt="">
                                        <h6><b class="color-primary">Rakka Ronald</b>, <b class="color-ash">Compétiteur</b>
                                        </h6>
                                </div><!-- swiper-slide -->
                        </div><!-- swiper-wrapper -->

                        <div class="swiper-pagination"></div>
                </div><!-- swiper-container -->
        </div><!-- container -->
</section>

<section class="counter-section section center-text" id="counter">
        <div class="container">
                <div class="row">
                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30 ">
                                        <i class="mlr-auto mb-30  icon-gradient icon-pizza"></i>
                                        <h2><b><span class="counter-value" data-duration="2000" data-count="98765">0</span></b>
                                        </h2>
                                        <h5 class="semi-black"><b>Pizzas par jour</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30">
                                        <i class="mlr-auto mb-30 icon-gradient icon-sea-food"></i>
                                        <h2><b><span class="counter-value" data-duration="500" data-count="14">0</span></b>
                                        </h2>
                                        <h5 class="semi-black"><b>Repas aux fruits de mer</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30">
                                        <i class="mlr-auto mb-30 icon-gradient icon-pasta"></i>
                                        <h2><b><span class="counter-value" data-duration="800"
                                                     data-count="23">0</span></b></h2>
                                        <h5 class="semi-black"><b>Pasta Chefs</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                        <div class="col-sm-6 col-md-3">
                                <div class="mb-30">
                                        <i class="mlr-auto mb-30 icon-gradient icon-salad"></i>
                                        <h2><b><span class="counter-value" data-duration="1000" data-count="43218">0</span></b>
                                        </h2>
                                        <h5 class="semi-black"><b>Salades par jour</b></h5>
                                </div><!-- margin-b-30 -->
                        </div><!-- col-md-3-->

                </div><!-- row-->
        </div><!-- container-->
</section><!-- counter-section-->


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