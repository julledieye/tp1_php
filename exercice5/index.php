<?php
include_once('fonction.php') ;
$tab = [];
$tab = generer_coordonner() ;
$x1 = $tab[1] ;
$y1 = $tab[2];
$x2 = $tab[3] ;
$y2 = $tab[4] ;
$d = calculer_distance($x1,$x2,$y1,$y2);
?>
<div>
    <p> la distance entre deux point est :</p>
    <p> <?php echo "".$d."" ?>
</div>