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
function perimetre_rectangle($longueur , $largeur){
    return ($longueur+$largeur)*2 ;
}
/**
 * fontion qui prend deux parametre et qui
 * calcule la surface du rectangle
 */
function surface_rectangle($longueur,$largeur){
    return $longueur*$largeur;
}
/**
 * fonction qui prend deux parametres
 * et qui calcule la longueur du diagonal
 */
 function longueur_diagonale($longueur,$largeur){
     $t = sqrt( puissane($longueur,2) + puissane($largeur,2) );
     return $t ;
 }
 
 
 /**
  * fonction qui permet de generer 
  *des nombres aleatoires
  */
  function longuer_largeur(){
      $a=rand(1,100);
      $b=rand(1,100);
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
?>
