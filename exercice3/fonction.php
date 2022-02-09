<?php
/**
  *fonction qui permet de generer 
  *des nombres aleatoires
  */
  function generer_deux_nombre(){
    $a=rand(1,10000);
    $b=rand(1,10000);
    if($a>$b){
        $max=$a;
        $min=$b;
    }else{
        $max=$b;
        $min=$a;
    }
    $tab[1]=$min;
    $tab[2]=$max;
    return $tab;
}
/**
 * fonction qui prend en parametre 
 * deux reels et qui fait la sommes
 */
function somme($a,$b){
    return $a+$b ;
}

/**
 * fonction qui prend en parametre 
 * deux reels et qui fait le produit
 */
function produit($a,$b){
    return $a*$b ;
}
/**
 * fonction qui prend en parametre 
 * deux reels et qui fait le Difference
 */
function difference($a,$b){
    if($a>$b){
    return $a-$b ;
    }
    return $b-$a ;
}
/**
 * fonction qui prend en parametre 
 * deux reels et qui fait le modulo
 */
function modulo($a,$b){
    return $a%$b ;
}
/**
 * fonction qui prend en parametre 
 * deux reels et qui fait la division
 */
function division($a,$b){
    return $a/$b ;
}
/**
 * fonction qui prend en parametre 
 * deux reels et qui fait le produit
 */
function carre($a){
    return $a*$a ;
}
?>