<!DOCTYPE html>
<html lang="FR-fr" class="no-js">

<?php include("header.php")?>
<section class="banner-area">
<div class="container">
  <div class="row fullscreen align-items-center justify-content-between">
    <div class="col-lg-12 banner-content">
      <h6 class="text-white"></h6>
      <br/>
      <h1 class="text-white" style="text-align: center;">Inscription</h1>
      <br/>

    </div>
  </div>
</div>
</section>
<body>
  <br/>
  <br/>
  <br/>
  <br/>
    <center><h1 class="text-black">Inscrivez vous !</h1></center>
    <form class="enregistrement" method="POST" action="PDOtraitement/PDOinscription.php">
      <div class="row">
        <div class="offset-md-4 col-md-2">
      <label for="nom" class="identifie"> Nom </label> <br>
             <input type="text" name="nom" id="nom" placeholder="Ex: Smith"size="60%" required ><br/><br>

      <label for="prenom" class="identifie"> Prenom </label><br>
             <input type="text" name="prenom" id="prenom" placeholder="Ex: John"size="60%" required ><br/><br>

      <label for="password" class="identifie"> Mot de Passe </label><br>
             <input type="password" name="ins_password" id="ins_password" placeholder="Ex: Momodu48"size="60%" required><br/><br>

      <label for="naiss_date" class="identifie">Date de naissance:</label>
             <input type="date" id="nais_date" name="nais_date" max="2018-12-31"
             placeholder="Ex: Momodu48"size="80%" required><br/><br>

      <label for="adresse" class="identifie">Adresse Postal</label><br>
             <input type="text" name="adresse" id="adresse" placeholder="Ex: 28 rue des Sablon"size="60%" required><br/><br>

      <label for="mail" class="identifie">Adresse Mail</label><br>
             <input type="text" name="mail" id="mail" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" placeholder="Ex: jean.JP@hotmail.fr"size="60%" required><br/><br>

       <label for="num_tel" class="identifie">Téléphone</label><br>
             <input type="number" name="num_tel" id="num_tel" placeholder="Ex: xx.xx.xx.xx.xx"size="60%" required><br/><br>

             <br/><input type="submit" name="Valider" value="Valider"> <br/> <br/>
           </div>
         </div>
     </form>

    <br/>
    <br/>
    <br/>
    <br/>


<?php include("footer.php") ?>


</body>
</html>
