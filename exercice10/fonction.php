<?php
/**
 * fonction qui permettre de donner un nombre à l’aide d’un formulaire
 *et on génère les N champs inputs . N est positif.
 */
 function afficher_champs($n){
     for($i=1 ; $i<$n ;$i++ ){
         echo "<li><label>champ".$i." : </label><input type='text' placeholder='champs n°".$i."' ></li>" ;
     }
 }


?>