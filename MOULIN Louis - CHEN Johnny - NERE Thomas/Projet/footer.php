<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">
<div class="footer-bottom-area bg-dark-light section-padding-sm">
                <div class="container">
                    <div class="row widgets footer-widgets">

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-about">
                                <h5 class="widget-title">A propos</h5>
                                <p>Restaurant Italien proposant une carte avec des spécialités culinaires italiennes préparés maison </p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-quick-links">
                                <h5 class="widget-title">Mon compte</h5>
                                <ul>
                                    <?php if(isset($_COOKIE['id'])) { ?>
                                    <li><a href="membre.php">Espace membre</a></li>
                                    <li><a href="traitementDeconnexion.php">Se deconnecter</a></li>
                                    <?php } elseif(isset($_COOKIE['admin'])) { ?>
                                    <li><a href="admin">Panel Admin</a></li>
                                    <li><a href="traitementDeconnexion.php">Se deconnecter</a></li>
                                    <?php } else { ?>
                                    <li><a href="connexion.php">Se connecter</a></li>
                                    <li><a href="inscription.php">S'inscrire</a></li>

                                    <?php } ?>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-quick-links">
                                <h5 class="widget-title">Notre restaurant</h5>
                                <ul>
                                    <li><a href="menu.php">Nos menus</a></li>
                                    <li><a href="reservation.php">Réservation</a></li>
                                    <li><a href="contact.php">Nous contacter</a></li>
                                    <li><a href="plan.php">Localisation</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 col-12">
                            <div class="single-widget widget-contact">
                                <h5 class="widget-title">Nous contacter</h5>
                                <ul>
                                    <li class="address">
                                        <span class="icon"><i class="fa fa-map-marker"></i></span>
                                        Adresse : Narbonne
                                    </li>
                                    <li class="phone">
                                        <span class="icon"><i class="fa fa-phone"></i></span>
                                        <a href="#">+33 6 66 66 66 66</a>
                                    </li>
                                    <li class="email">
                                        <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                        <a href="#">restaurantcaliente@gmail.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
