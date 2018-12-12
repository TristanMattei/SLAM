<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Menu</title>
	<meta charset="UTF-8">
    
	<!-- Style Début -->
    <?php include "app/styles.php"?>
    <!-- Style Fin -->

	<!-- Perso Style -->
	<link rel="stylesheet" href="css/styles.css"/>
    <link rel="stylesheet" href="css/style1.css"/>
    
</head>
    
    <!-- Menu Début -->
    <?php include "app/header.php"?>
    <!-- Menu Fin -->
    
    <body>
        <section class="row" id="menuback">
       <div class="container site">
            <?php
				require 'admin/database.php';
			 
                echo '<nav>
                        <ul class="nav nav-pills">';

                $db = Database::connect();
                $statement = $db->query('SELECT * FROM categories');
                $categories = $statement->fetchAll();
                echo    '</ul>
                      </nav>';

                echo '<div class="tab-content">';

                foreach ($categories as $category) 
                {
                    if($category['id'] == '1')
                        echo '<div class="tab-pane active" id="' . $category['id'] .'">';
                    else
                        echo '<div class="tab-pane" id="' . $category['id'] .'">';
                    
                    echo '<div class="row">';
                    
                    $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
                    $statement->execute(array($category['id']));
                    while ($item = $statement->fetch()) 
                    {
                        echo '<div class="col-sm-6 col-md-3">
                                <div class="thumbnail">
                                    <img src="img/' . $item['image'] . '" alt="...">
                                    <div class="price">' . number_format($item['price'], 2, '.', ''). ' €</div>
                                    <div class="caption">
                                        <h4>' . $item['name'] . '</h4>
                                        <p>' . $item['description'] . '</p>
                                        <a href="#" class="btn btn-order" role="button"><span class="glyphicon glyphicon-shopping-cart"></span> Réservation</a>
                                    </div>
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
        </section>
        
        
            <!-- Footer Début -->	
    	       <?php include "app/footer.php"?>
			<!-- Footer Fin -->
    </body>
</html>

