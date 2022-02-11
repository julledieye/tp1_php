<?php
/**
 * fonction qui teste si les champs sont void
 */
function estVide(string $n):bool{
  return empty($n);
}
/**
 * fonction qui teste si 1° lettre est en majuscule
 */
function estMaju(string $phrase):bool{
    return ctype_upper($phrase);
}
/**
 * fonction qui test si un phrase compte au moins 25 carateres
 */
function estLong(string $phrase):bool{
    return (strlen($phrase)>=25) ;
}
/**
 * fonction qui teste si une phrase est phrase 
 */
function estValide(string &$phrase,string $key,array &$erreur):void{
    if(estVide(trim($phrase))){
        $erreur[$key]="Veuillez saisir une phrase ";
    }else{
        if(!estMaju($phrase[0])){
            $erreur[$key]="Veuillez saisir une phrase qui commence par une lettre mausculle";
        }else{
            if(!estLong($phrase)){
                $erreur[$key]="Veuillez saisir une phrase qui a 25 caracteres aux moins";
            }
        }
    }
}
?>