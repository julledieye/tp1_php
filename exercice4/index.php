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