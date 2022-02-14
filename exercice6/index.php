<?php
require('fonction.php');
if(isset($_REQUEST['valider'])){
    $a = $_REQUEST['a'];
    $b = $_REQUEST['b'];
    $c = $_REQUEST['c'];
   
?>
<!DOCTYPE html>
<html>
<head>
	<title> exercice_6</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="header">
     <?php

      if(!empty($a) && !empty($b) && !empty($c)){
        donne_solution($a,$b,$c);
        }
    }
     ?>



<a href="../exercice("> 5 < < <</a> | <a href="../exercice7"> > > > 7</a>
        </p>
        <p>VOUS ETES DANS EXERCICE - </p>
    </div>

	<form action="index.php" method="GET">
            <div>
                <input type="number" name="a" required="required" >
                <span>x²</span>
                <span>+</span>
                <input type="number" name="b" required="required"  >
                <span>x</span>
                <span>+</span>
                <input type="number" name="c" required="required" >
                <span>&nbsp;</span>
                <input type="submit" name="valider">
            </div>
    </form>
</body>
</html>
