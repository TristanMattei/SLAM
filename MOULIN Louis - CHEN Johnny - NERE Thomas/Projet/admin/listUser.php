<?php if(isset($_COOKIE['admin'])) { ?>
<!DOCTYPE html>
<html>
<head>
    <title>Caliente</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
<div class="col-md-2 sidebar">
    <ul class="nav nav-pills nav-stacked">
        <li ><a href="index.php">Panel Admin</a></li>
        <li><a href="listMenu.php">Liste menus</a></li>
        <li class="active"><a href="listUser.php">Liste utilisateurs</a></li>
    </ul>
</div>
<h1 style="text-align: center;" class="text-logo col-md-8"><span class="glyphicon glyphicon-cutlery"></span> <a style="text-decoration: none; color: black;" href="../index.php ">Restaurant Caliente </a><span class="glyphicon glyphicon-cutlery"></span></h1>
<div class="container admin">
    <div class="row">
        <h1><strong>Liste des Utilisateur</strong></h1>
        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Mot de passe</th>
                <th>Date de naissance</th>
                <th>Code Postale</th>
                <th>Email</th>
                <th>Téléphone</th>
                <th>Supprimer</th>
            </tr>
            </thead>
            <tbody>
            <?php
            require 'database.php';

            $db = Database::connect();
            // On récupère toute la table information
            $statement = $db->query('SELECT * FROM information');
            while($item = $statement->fetch()) // Boucle égal au nombre de ligne de la table
            {
                // On affiche les infos utilisateur ligne par ligne
                echo '<tr>';
                echo '<td>'. $item['nom'] . '</td>';
                echo '<td>'. $item['prenom'] . '</td>';
                echo '<td>'. $item['mdp'] . '</td>';
                echo '<td>'. $item['date_naissance'] . '</td>';
                echo '<td>'. $item['postale'] . '</td>';
                echo '<td>'. $item['mail'] . '</td>';
                echo '<td>'. $item['telephone'] . '</td>';
                echo '<td width=100>';
                echo '<a class="btn btn-danger" href="deleteUser.php?id='.$item['id'].'"><span class="glyphicon glyphicon-remove"></span> Supprimer</a>';
                echo '</td>';

                echo '</tr>';
            }
            Database::disconnect();
            ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>
<?php } else {
    header('location: ../index.php');
}