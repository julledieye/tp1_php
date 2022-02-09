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
        <div> 
            <?php
                $lon_lar=longuer_largeur();
                $longeur=$lon_lar[2];
                $largeur=$lon_lar[1];
                echo "<br> longeur ::".$longeur." m" ;
                echo "<br> largeur ::".$largeur." m" ;
            ?>
        </div>
        <hr>
        <div>
            Perimetre :
            <?php
                $perimetre = perimetre_rectangle($longeur,$largeur);
                echo "<br>".$perimetre." m" ;
            ?>
        </div>
        <hr>
        <div>
            Surface :
            <?php
                $perimetre = surface_rectangle($longeur,$largeur);
                echo "<br>".$perimetre." m" ;
            ?>
        </div>
        <hr>
        <div>
            longueur digonal :
            <?php
                $lon_diago = longueur_diagonale($longeur,$largeur);
                echo "<br>".number_format($lon_diago,2)." m" ;
            ?>
        </div>
    </body>
</html>