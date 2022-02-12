<?php
include_once('../fonctions.php');
/**
 * fonction position haut ou bas
 */
function getPosition($n):bool{
    return (strcmp($n,"haut") || strcmp($n,"bas") );
}
/**
 * fonction pour matrice
 */
function lenMatrice($n){
    return ($n>=5);
}
/**
* fonction valide
*/
    function estValide($n,string $key,array &$err){
        if(estVide($n)){
            $err[$key]="saisir un nombre" ;
        }else{
            if(!is_numeric($n)){
            $err[$key]="saisir un numerique";
            }else{
                if(!lenMatrice($n)){
                    $err[$key]="saisir un nombre superieur 4";
                }
            }
        }
    }

 /**
  * fonction qui affiche un element d'une matrice tab[i][j]
  */
  function affichUnElement(int $i ,int $j,array $matrice ):string{
      return $matrice[$i][$j];
  }
    /**
     * fonction qui saisir une matrice carree
     */
    function remplirMatrice($n,array &$matrice):void{
        for($i=0 ; $i<$n ; $i++){
            for($j=0 ; $j<$n ; $j++){
                $matrice[$i][$j]="&nbsp;&nbsp;&nbsp;";
            }
        }
    }
    /**
     * fonction qui determine la couleur de la position
     */
    function getCouleur(string $p1,$p2,string $c):string{
         if(strcmp($p1,$p2)==0){
             $r=$c;
         }else{
             if(strcmp($c,"rouge")==0){
                 $r="blue";
             }else{
                 $r="rouge";
             }
         }
         return $r;
    }
?>