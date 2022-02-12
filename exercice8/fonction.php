<?php
include_once('../fonctions.php');
/**
 * fonction qui teste si un champ est ok
 */
function estValide($n,string $key,array &$err){
    if(estVide($n)){
        $err[$key]="saisir une valeur " ;
    }else{
        if(!is_numeric($n)){
        $err[$key]="saisir un numerique";
    }    }
}
?>