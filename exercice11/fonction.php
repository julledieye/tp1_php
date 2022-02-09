<?php
/**
 * fonction qui calce un nombre premie
 */
function premier($n){
    $i=2;
    while($i<$n && $n%$i!=0){
        $i++;
    }
    if($i>$n-1){
        return $n;
    }
    return 0;
}
/**
 * fonction qui permettre de generer les nombres 
 * premier compris entre 1 et N
 */
 function tab_premier($n){
     $premier = array();
     $premier[1]=1;
     $premier[2]=2;
     $j=3;
     for($i=3 ; $i<$n ;$i++ ){
        if(premier($i)!=0){
            $premier[$j]=$i;
            $j++;
        }
     }
     return $premier ;
 }
/**
 * fonction qui calcule la moyenne
 */
function moyenne($n) {
    $som=0;
    for($i=1 ; $i<$n ; $i++){
      $som=$som+$i ;
    }
    return $som/$n;
}
/**
 * fonction qui permettre de dire si un 
 * nombre est inferieur a la moyenne
 */
function inferieur_moyenne($n){
    $inferieur = array();
    $j=0;
    for($i=1;$i<moyenne($n) ;$i++){
            $inferieur[$j]=$i;
            $j++;
    }
    return $inferieur ;
}
/**
 * fonction qui permettre de dire si un 
 * nombre est superieur a la moyenne
 */
function superieur_moyenne($n){
    $superieur = array();
    $j=0;
    for($i=$n-1;$i>moyenne($n);$i--){
            $superieur[$j]=$i;
            $j++;
    }
    return $superieur ;
}
/**
 * fonction qui permettre de le tableau associatif T comme clefs
 * premier , inferieur et superieur
 */
function generer_T($premier,$inferieur,$superieur){
    $T=array('premier'=> $premier,'inferieur'=>$inferieur,'superieur'=>$superieur) ;
    return $T;
}
/**
 * fonction qui permet de 
 * generer les tr et td du tableau
 */
function generer_tr_td($superieur_moyenne,$tab_inferieur,$tab_premier){
    for($i=1 , $j=1 , $k=1 ;$k<=count($superieur_moyenne), $j<=count($tab_inferieur), $i<=count($tab_premier);$k++,$j++,$i++){
        echo "<tr>" ;
           echo "<td>".$tab_premier[$i]."</td><td>".$tab_inferieur[$j]."</td><td>".$superieur_moyenne[$k]."</td>";
        echo "</tr>" ;
      }
}
?>