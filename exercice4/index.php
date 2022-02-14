<?php
require('fonction.php');

?>
<!doctype HTML>
<html>
    <heade>
        <title>Exercice4</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </heade>
    <body>
    <p>
    <a href="../exercice3"> 3 < < <</a> | <a href="../exercice5"> > > > 5</a>
        </p>
        <p>VOUS ETES DANS EXERCICE 4 </p>
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
            Permutation :
            <br>
            <?php
                permuter($a,$b) ;
            ?>
        </div>
        <hr>
    </body>
</html>