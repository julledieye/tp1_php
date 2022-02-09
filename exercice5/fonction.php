<?php
/**
  *fonction qui permet de generer 
  *un tableau qui contient 4 nombres nombres aleatoirs
  */
  function generer_coordonner(){
    $a=rand(1,100);
    $b=rand(1,100);
    $c=rand(1,100);
    $d=rand(1,100);
    $tab[1]=$a;
    $tab[2]=$b;
    $tab[3]=$c;
    $tab[4]=$d;
    return $tab;
}
/**
 * fonction qui prend en parametre 
 * deux nombres et qui calcule la distance
 */
function calculer_distance($x1,$x2,$y1,$y2){
  $d=sqrt( pow(($x2-$x1),2) + pow(($y2-$y1),2) );
  return $d;
}
?>