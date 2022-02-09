<?php
/**
  *fonction qui permet de generer 
  *un tableau qui contient deux nombres aleatoirs
  */
  function generer_deux_nombre(){
    $a=rand(1,100);
    $b=rand(1,100);
    $tab[1]=$a;
    $tab[2]=$b;
    return $tab;
}
/**
 * fonction prend en parametre deux 
 * nombres et qui les permites
 */
function permuter($a,$b){
    echo "<br> befor :"."a = ".$a." and b = ".$b."<br>" ;
    $t=$a ;
    $a=$b ;
    $b=$t;
    echo "<br> after :"."a = ".$a." and b = ".$b."<br>" ;
}
?>