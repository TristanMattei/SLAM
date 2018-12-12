<html lang="en" dir="ltr">
<!-- Style -->
<?php include "style.php" ?>
<body>
<!-- Navigation -->
<?php include "navbar.php" ?>

<!-- Header -->
<?php include "header.php" ?>

<!-- Contenu -->
<body style="border-style: 1px black">
<div id="bloc_page" >

    <hr style="width: 100%; height: 10px">
    <form method="POST" action="traitementModification.php">

        <div class="container">

            <div class ="col-lg-offset-1"></div>
            <br>

            <div class="form-group">
                &nbsp; <label for="Nom">Nom</label>
                &nbsp;<input type="text" class="form-control" name="nom" id="Nom" placeholder="Nom">
            </div>
            <div class="form-group">
                &nbsp;<label for="Prenom">Prénom</label>
                &nbsp;<input type="text" class="form-control" name="prenom" id="Prenom" placeholder="Prenom">
            </div>
            <div class="form-group">
                &nbsp;<label for="date_naissance">Date de naissance</label>
                &nbsp;<input type="date" class="form-control" name="date_naissance" id="date_naissance">
                <div class="form-group">
                    &nbsp;<label for="Mail">Address Mail</label>
                    &nbsp;<input type="email" class="form-control" name="mail" id="Mail"  placeholder="Email">
                </div>
                <div>

                    <div class="form-group">
                        &nbsp;<label for="postale">Adresse Postale</label>
                        &nbsp;<input type="number" class="form-control" name="postale" id="postale" placeholder="Adresse postale (5 chiffres)">
                    </div>
                    <div class="form-group">
                        &nbsp;<label for="Tel">Téléphone</label>
                        &nbsp;<input type="number" class="form-control" name="tel" id="Tel" placeholder="Téléphone (10 chiffres)">
                    </div>

                    <div class="form-group form-check">
                    </div>
                    <button type="submit" class="btn btn-primary">Modifier</button>
    </form>

</div>
</div>
</div>




<!-- Pied de page -->
<?php include "footer.php" ?>
</body>
</html>
