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
    <a href="../exercice2"> 2 < < <</a> | <a href="../exercice4"> > > > 4</a>
        </p>
        <p>VOUS ETES DANS EXERCICE 3 </p>
        <div> 
            <?php
                $tab=generer_deux_nombre();
                $a=$tab[2];
                $b=$tab[1];
                echo "<br> a :: ".$a." " ;
                echo "<br> b :: ".$b." " ;
            ?>
        </div>
        <hr>
        <div>
            SOMME :
            <?php
                echo "<br>".somme($a,$b)." " ;
            ?>
        </div>
        <hr>
        <div>
            expotentielle:
            <?php
                echo "<br> Resultat :: ".($a**$b)." " ;
            ?>
        </div>
        <hr>
        <div>
            DIFERENCE :
            <?php
                echo "<br> Resultat :: ".($a-$b)." " ;
            ?>
        </div>
        <hr>
        <div>
            Produit :
            <?php
                echo "<br> Resultat :: ".($a*$b)." " ;
            ?>
        </div>
        <hr>
        <div>
            Modulo :
            <?php
                echo "<br> Resultat :: ".number_format($a%$b,2)." " ;
            ?>
        </div>
        <hr>
        <div>
            Division :
            <?php
                echo "<br> Resultat :: ".number_format($a/$b,3)." " ;
            ?>
        </div>
        <hr>
        <div>
            Carre :
            <?php
                echo "<br> a² :: ".($a*$a)." " ;
                echo "<br> b² :: ".($b/$b)." " ;
            ?>
        </div>
        <hr>
    </body>
</html>