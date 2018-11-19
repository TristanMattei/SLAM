<html>
<head></head>
<body>
          <form action="Exercice4-4.php">
          choisissez votre table : <select name="table">
          <?php
          for ($i=1;$i<=20;$i++) {
            echo "";
            if ($table==$i) echo " selected=\"selected\"";
            echo "<option>$i</option>\n";
          }
          ?>
          </select><br />
          choisissez le nombre de lignes : <select name="lignes">
            <?php
          for ($i=10;$i<=20;$i++) {
            echo "";
            if ($lignes==$i) echo " selected=\"selected\"";
            echo "<option>$i</option>\n";
          }
          ?>
          </select><br />
          <input type="submit" value="afficher la table choisie" />
          </form>
          <p />
       </body>
              </html>
