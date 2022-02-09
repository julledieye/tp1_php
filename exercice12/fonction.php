<?php
/**
 * function qui génère  un tableau  des 12 mois de l'année en Français 
 */
 function tab_fr(){
    $numero=array(1,2,3,4,5,6,7,8,9,10,11,12);
    $mois=array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Août","Septembre","Octobre","Novembre","Décembre");
    $fr=array_combine($numero,$mois);
    return $fr ;
 }
/**
 * function qui génère  un tableau  des 12 mois de l'année en Anglais 
 */
function tab_an(){
    $numero=array(1,2,3,4,5,6,7,8,9,10,11,12);
    $mois=array("January","February","March","Avril","May","June","July","August","September","October","November","December");
    $an=array_combine($numero,$mois);
    return $an ;
 }
/**
 * fonction qui prend la langue en francais ou anglais en parametre et
 *  qui genere les mois au langue correspondante
 */
 function generer_mois($lang){
     if(strcmp($lang,'anglais')==0){
         return tab_an() ;
     }
     return tab_fr();
 }
  
?>