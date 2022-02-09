<?php
/**
 * fonction qui prend deux parametres nombres 
 * a et n qui calcule la puissance   
 */
function puissane($a,$n){
    if($n==0){
        return 1 ;
    }
    return $a*puissane($a,$n-1);
}

/**
 * fonction qui a deux parametres 
 * longeur et largeur et calcule 
 * le perimetre du rectangle 
 */
function perimetre_carre($cote){
    return $cote*2 ;
}
/**
 * fontion qui prend deux parametre et qui
 * calcule la surface du rectangle
 */
function surface_carre($cote){
    return $cote*$cote ;
}
/**
 * fonction qui prend deux parametres
 * et qui calcule la longueur du diagonal
 */
 function longueur_diagonal($cote){
     $t = sqrt( puissane($cote,2) + puissane($cote,2) );
     return $t ;
 }
 
 
 /**
  * fonction qui permet de generer 
  *des nombres aleatoires
  */
  function cote_carre(){
      $a=rand(1,100);
    
      return $a;
  }
?>
