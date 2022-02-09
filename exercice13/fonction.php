<?php
/**
 * fonction qui teste si les champs sont void
 */
function estVide($n):bool{
  return empty($n);
}
/**
 * fonction qui suprime les espase au debut et a la fin
 */
function delEspace($phrase):string{
    return trim($phrase);
}
/**
 * fonction qui met le premiere caracter en majuscul
 */
function setMajuscul(array &$tab1):void{
    $tab1[0]=lcfirst($tab1[0]);
}
/**
 * fonction qui suprime les case vide du tableau
 */
function suprimVide(array &$tab1):void{
   unset($tab1[sizeof($tab1)-1]);
}
/**
 * fonction pour supprimer les espaces
 */
function getTabPhrase($phrase,array &$tab1):void{
    $tab1 = explode('.',$phrase);
}
/**
 * fonction qui remplac les cracteres especiaux
 */
function deleteSpecialChar($phrase):void{  
    // remplacer tous les caractères spéciaux par une chaîne vide
    $phrase = str_replace( array( '%', '@', '\'', '-', '<', '>','=','£', '$', 'µ' ), ' ', $phrase);   
}
/**
 * 
 */
function suprimerEspace(string $str):string{ 
    $str = str_replace(["\r", "\n", "\t"], " ", $str);
    while (strpos($str, "  ") !== false){
        $str = str_replace("  ", " ", $str);
    }
    return $str;
}
?>