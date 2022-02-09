<?php
/**
 * fonction qui permettre d'afficher la liste 
 * des nombres compris entre 1 et N positif 
 * saisi par l'utilisateur 
 */
 function afficher_nombre($n){
     for($i=1 ; $i<$n ;$i++ ){
         echo "<li>".$i."</li>" ;
     }
 }


?>