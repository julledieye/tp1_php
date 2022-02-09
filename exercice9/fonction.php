<?php
/**
 * fonction qui permettre d'afficher la table de
 *  multiplication d'un nombre saisie
 */
 function afficher_table($n){
     for($i=1 ; $i<12 ;$i++ ){
         echo "<li> <span>".$i."</span> <span> * </span> <span>".$n."</span> <span> = </span> <span>".$i*$n."</span> </li>" ;
     }
 }


?>