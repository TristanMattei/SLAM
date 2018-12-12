<!DOCTYPE html>
<html lang="en" dir="ltr">
<!-- Style -->
<?php include "style.php" ?>
    <!-- Navigation -->
  <?php include "navbar.php" ?>

    <!-- Header -->
  <?php include "header.php" ?>

    <!-- Contenu -->

    <body>
        <div class="container site">
            <h1 style="text-align: center; "class="text-logo"><span class="glyphicon glyphicon-cutlery"></span> Les menus Caliente <span class="glyphicon glyphicon-cutlery"></span></h1><br>
            <?php
        require 'admin/database.php';

                echo '<nav>
                        <ul class="nav nav-pills">';

                $db = Database::connect();
                $statement = $db->query('SELECT * FROM categories');
                $categories = $statement->fetchAll();


                echo '<div class="tab-content">';

                foreach ($categories as $category)
                {
                    echo '<div class="row">';

                    $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
                    $statement->execute(array($category['id']));
                    while ($item = $statement->fetch())
                    {
                        echo '<div class="col-sm-6 col-md-4">
                                    <center><img width="150" src="img/' . $item['image'] . '" alt="..."></center>
                                    <div style="text-align: center;" class="price">' . number_format($item['price'], 2, '.', ''). ' €</div>
                                    <div class="caption">
                                        <h4>' . $item['name'] . '</h4>
                                        <p>' . $item['description'] . '</p>
                                    </div>
                            </div>';
                    }
                   echo    '</div>
                        </div>';
                }
                Database::disconnect();
                echo  '</div>';
            ?>
        </div>
    </body>
<div class="card-footer">
    <div class="offset-1 col-md-10">
        <form id="form-postcomment" role="form" method="POST" action="./process/comment-process.php?mid=1">
            <div class="form-group">
                <textarea type="text" class="form-control" id="comment" name="comment" placeholder="Ecrivez ici votre commentaire" required=""></textarea>
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</div>
<div class="container" style="padding-top: 10px;">
    <div class="row">
        <div style="padding-bottom: 10px;" class="col-2">
            <img class="card-img-top card-u" src="img/m4.png" alt="Card image cap">
        </div>
        <div style="padding-bottom: 10px;" class="col-10">
            <div class="card">
                <div class="card-header">
                    <span>Message posté par</span>&nbsp;<span style="color:#009933"> Louis</span>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Bonjour</p>
                        <footer>12/12/2018</footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div style="padding-bottom: 10px;" class="col-2">
            <img class="card-img-top card-u" src="img/m2.png" alt="Card image cap">
        </div>
        <div style="padding-bottom: 10px;" class="col-10">
            <div class="card">
                <div class="card-header">
                    <span>Message posté par</span>&nbsp;<span style="color:#009933"> Jacques</span>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote mb-0">
                        <p>Super menus, surtout le Tradizionne</p>
                        <footer>12/12/2018</footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Pied de page -->
    <?php include "footer.php" ?>
</html>
