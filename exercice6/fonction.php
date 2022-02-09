<?php
/**
 * fonction quicalcule delta
 */
function calcule_d($a,$b,$c){
     $d = $b*$b - 4*$a*$c ;
     return $d;
}
/**
 * fonction qui cherche l'existence des solution
 * prend trois parametre 
 */
function solution_existe($a,$b,$c){
   $d = calcule_d($a,$b,$c) ;
    if($d>0){
        return 2 ;
    }else{
        return 0 ;
    }
    return 1;
}
/**
 * fonction qui calcule les solutions de l'equation
 * qui prend trois parametres 
 */
function donne_solution(int $a, int $b, int $c):void{
    $d=solution_existe($a,$b,$c);
    if($d==2){
        $x1=(-$b-sqrt(calcule_d($a,$b,$c)) /2*$a) ;
        $x2=(-$b+sqrt(calcule_d($a,$b,$c)) /2*$a) ;
       echo "<p> x1 = ".number_format($x1,2)."</p>";
       echo "<p> x2 = ".number_format($x2,2)."</p>";

    }else
    if($d==1){
        $x0 = $b / 2*$a ;
        echo "<p> x0 = ".$x0."</p>";
    }else{
        echo "PAS DE SOLUTION DANS R" ;
    }
}
?>