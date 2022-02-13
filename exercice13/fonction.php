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
function estMaju(string &$phrase):bool{
    $phrase=trim($phrase);
    return ctype_upper($phrase[0]);
}
/**
 * fonction qui test si un phrase compte au moins 25 carateres
 */
function estLong(string &$phrase):bool{
    $phrase = trim($phrase);
    return (strlen($phrase)>=25) ;
}
/**
 * fonction qui teste si une phrase se termine par un .
 */
function endPoint($phrase):int{
   return (strcmp($phrase[strlen($phrase)-1],".")==0);
}
/**
 * fonction qui teste si une phrase est correcte
 */
function estValide(string &$phrase,string $key,array &$erreur):void{
    if(estVide(trim($phrase))){
        $erreur[$key]="Veuillez saisir une phrase ";
    }else{
        if(!estMaju($phrase)){
            $erreur[$key]="Veuillez saisir une phrase qui commence par une lettre majuscule ";
        }else{
            if(!estLong($phrase)){
                $erreur[$key]="Veuillez saisir une phrase qui a 25 caracter au moins ";
            }else{
                if(!endPoint($phrase)){
                    $erreur[$key]="Veuillez saisir une phrase qui se termine par un point ";
                }
            }
        }
    }
}
/**
 * fonction qui supprime les espaces entre les mots
 */
function deletEspace(string &$phrase):void{
    while(strpos($phrase,"  ")!==false){
        $phrase=str_replace("  "," ",$phrase);
    }
}
/**
 * fonction qui supprime les espace a gauche befor point
 */
function deletEsBefor(string &$phrase):void{
    while(strpos($phrase,' . ')!==false){
        $phrase=str_replace(' . ','. ',$phrase);
        $phrase[strpos($phrase,'. ')+2]=strtoupper($phrase[strpos($phrase,'. ')+2]);
    }
    while(strpos($phrase,' .')!==false){
        $phrase=str_replace(' .','. ',$phrase);
        $phrase[strpos($phrase,'. ')+2]=strtoupper($phrase[strpos($phrase,'. ')+2]);
    }
    while(strpos($phrase,' - ')!==false){
        $phrase=str_replace(' - ','-',$phrase);
    }
    while(strpos($phrase,' ? ')!==false){
        $phrase=str_replace(' ? ','? ',$phrase);
    }
    while(strpos($phrase,' , ')!==false){
        $phrase=str_replace(' , ',', ',$phrase);
    }
    while(strpos($phrase,'  ,')!==false){
        $phrase=str_replace('  ,',', ',$phrase);
    }
    while(strpos($phrase,' ; ')!==false){
        $phrase=str_replace(' ; ','; ',$phrase);
    }
    while(strpos($phrase,' : ')!==false){
        $phrase=str_replace(' : ',': ',$phrase);
    }
    while(strpos($phrase,' ! ')!==false){
        $phrase=str_replace(' ! ','! ',$phrase);
    }
    while(strpos($phrase,'. .')!==false){
        $phrase=str_replace('. .','..',$phrase);
    }

   
}
/**
 * fonction qui suprimmer les caracere especiau
 */
function deletCareEsp(string &$phrase):void{
    $phrase =str_replace(["_","%","|","]","[","~","°","^","µ","§","*","&","\n","\t","<",">","$","£","#","/","²","\",{"],"",$phrase);
}
?>