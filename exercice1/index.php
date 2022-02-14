<?php
require('fonction.php');

?>
<!doctype HTML>
<html>
    <heade>
        <title>Exercice1</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </heade>
    <body>
        <p>
            <a href="../exercice2">>> 2</a>
        </p>
        <p>VOUS ETES DANS EXERCICE 1V </p>
        <div> 
            <?php
                $cote=cote_carre();
                echo "<br> largeur ::".$cote." m" ;
            ?>
        </div>
        <hr>
        <div>
            Perimetre :
            <?php
                $perimetre = perimetre_carre($cote);
                echo "<br>".$perimetre." m" ;
            ?>
        </div>
        <hr>
        <div>
            Surface :
            <?php
                $perimetre = surface_carre($cote);
                echo "<br>".$perimetre." m" ;
            ?>
        </div>
        <hr>
        <div>
            longueur digonal :
            <?php
                $lon_diago = longueur_diagonal($cote);
                echo "<br>".number_format($lon_diago,2)."m" ;
            ?>
        </div>
    </body>
</html>