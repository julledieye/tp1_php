<?php
/**
 * fonction pour testee si anne est bisextil
 */
function anBissextille($annee){
    if($annee%4==0){
        return 1;
    }
    return 0 ;
}
/**
 * fonction qui determine le nombre de jour du mois de l'annee
 */
function nombreJour($mois ,$annee){
     $nb=0;
    if($mois==1 || $mois==3 || $mois==5 || $mois==7 || $mois==8 || $mois==10 || $mois==12){
            $nb=31;
    }else
        if($mois==2){
            if(anBissextille($annee)!=0){
              $nb=29;
            }else{
             $nb=28;
            }
    }else{
        if($mois==4 || $mois==6|| $mois==9 || $mois==11 ){
            $nb=30;
        }
    }

      return $nb;
}
/**
 * fonction qui dit si une annee est ok ou pas
 */
function dateValide($jour , $mois , $annee){
    $r=0;
    if( ($jour>0 && $jour<(nombreJour($mois,$annee)+1) )&& ($annee>0) ){
       $r=1;
    }
    return $r ;
}
/**
 * fonction qui permettre pour le jour suivant
 */
function    dateSui($jour , $mois , $annee){
    $r=dateValide($jour,$mois,$annee);
    if($r!=0){
       if($jour<nombreJour($mois,$annee)){
              $jour = $jour+1;
       }else
           if($jour==nombreJour($mois,$annee) && $mois<12){
               $mois = $mois+1;
               $jour=1;
       }else
           if($jour==nombreJour($mois,$annee) && $mois==12){
            $jour=1;
            $mois=1;
            $annee=$annee+1;
       }
        echo "<p> le lendemain sera le ::".$jour." / ".$mois." / ".$annee."</p>";
    }else{
        echo  "<p>"."la date n'est pas valide"."</p>";
    }
}
/**
 * fonction qui calcul la date precedant
 */
function date_precedent($jour , $mois , $annee ){
    $re=1;
    $r=dateValide($jour,$mois,$annee);
            if($r!=0){
               for($i=1 ; $i<=1 ; $i++){
   
                   if(1<$jour && $jour<=nombreJour($mois,$annee)){
                          $jour =$jour-1;
                   }else
                       if($jour==1 && $mois==1){
                          $jour=31;
                          $mois=12;
                          $annee=$annee-1;
                   }else
                        if($jour==1 && $mois!=1 && $mois!=3){
                           $jour=nombreJour($mois-1,$annee);
                           $mois=$mois-1;
                   }else
                       if($jour==1 && $mois==3){
                           if(anBissextille($annee)!=0){
                             $jour=29;
                             $mois=2;
                           }else{
                              $jour=28;
                              $mois=2;
                           }
                       }
               }
            }else{
               $re=0;
            }
            if($re==1 && dateValide($jour,$mois,$annee)!=0){
               echo "<p> hier  c'etait le  ::  ".$jour." / ".$mois." / ".$annee."</p>";
            }else
               if($re==1){
                echo "ERREUR 500 la date::n'est pas valide mangui diegeulou".$jour."/".$mois."/".$annee  ;
            }else{
                echo "ERREUR 404 la date:: ".$jour."/".$mois."/".$annee."n'est pas valide";
            }
   }
?>