<?php
    /**
     * controller si un champ est vide
     */
    function estVide($n):bool{
        return empty($n);
    }
    /**
     * fonction qui control est ce que variable est numeric
     */
    function estNum($n):bool{
        return is_numeric($n);
    }
    /**
     * longueur est 9 chiffres
     */
    function lonNum($n){
        return (strlen($n)>=9) ;
    }
    /**
     * fonction qui control les erreurs
     */
    function estValide($n,string $key ,array &$erreur):void{
        if(estVide($n)){
            $erreur[$key] = "Veuillez saisir une valeur " ;
        }else{
            if(!estNum($n)){
                $erreur[$key] = "Veuillez saisir une valeur numerique " ;
            }else{
                if(numDif_7($n)){
                    $erreur[$key] = " le numero doit commencer par 7 " ;
                }else{
                    if(numD_05678($n)) {
                        $erreur[$key] = " 7 doit etre suivit par :0 ou 5 ou 6 ou 7 ou 8 " ;
                    }else{
                        if(!lonNum($n)){
                            $erreur[$key] = " un numéro doit avoir 9 chiffres au moins " ;
                        }
                    }
                }
            }
        }
    }
   

    /**
     * fonction test si le numero commence par
     * 7
     */
    function numDif_7($n):bool{
        return(strcmp($n[0],'7')!=0);
    }
    /**
     * fonction qui test si 
     */
    function numD_05678($n):bool {
        return
        (   strcmp($n[1],'7')!=0 && 
            strcmp($n[1],'6')!=0 && 
            strcmp($n[1],'0')!=0 && 
            strcmp($n[1],'5')!=0 && 
            strcmp($n[1],'8')!=0
        );
    }
    /**
     * decouper la chaine a des chaine de 9 caractere
     */
    function decouper(string $n , array &$tabNum):void{
        $i=0;
        $j=9;
        $k=0;
        while($j<strlen($n)){
            $tabNum[$k]=substr($n,$i,9);
            $i=$j;
            $j=$j+9;
            $k++;
        }
        $tabNum[count($tabNum)]=substr($n,$i,strlen($n)-$i);
    }
    /**
     * fonction qui remplie le tableau valide et le tableau no valide
     */
    function remplirTab(array $tabNum , array &$tabValide,array &$tabInValide){
        for($i=0 , $j=0,$k=0 ; $i<count($tabNum) ; $i++){
            if(numDif_7($tabNum[$i])==false && numD_05678($tabNum[$i])==false && strlen($tabNum[$i])==9){
                 $tabValide[$j]=$tabNum[$i];
                 $j++;
            }else{
                 $tabInValide[$k]=$tabNum[$i];
                 $k++;
            }
         }
    }
    /**
     * fonction qui prend deux tableau et qui remplir les champs
     */
    function getResulat($tabValide){
        $nombr1="";
        if(!empty($tabValide)){
            for($i=0 ; $i<count($tabValide);$i++){
                $nombr1 =$nombr1." [ ".$tabValide[$i]." ] ";
            }
        }
        return $nombr1;
    }
?>