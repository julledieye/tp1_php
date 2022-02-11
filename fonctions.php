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

   
?>