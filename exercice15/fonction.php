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

?>