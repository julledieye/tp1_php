<?php
require('fonction.php');
if(isset($_REQUEST['valider'])){
    $j = $_REQUEST['j'];
    $m = $_REQUEST['m'];
    $a = $_REQUEST['a'];
   
?>
<!DOCTYPE html>
<html>
<head>
	<title> exercice_7</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="header">
     <?php

      if(!empty($j) && !empty($m) && !empty($a)){
        echo "<p><ul> aujourd'hui c'est le ::".$j." / ".$m." / ".$a."<p>" ;
        dateSui($j,$m,$a);
        date_precedent($j,$m,$a);
        }
    }
     ?>

<p>
    <a href="../exercice6"> 6 < < <</a> | <a href="../exercice8"> > > > 8</a>
</p>
        <p>VOUS ETES DANS EXERCICE 7 </p>
    </div>

	<form action="index.php" method="GET">
            <div>
                <span>jour</span>
                <input type="number" name="j" required="required" min="1" max="31" >
                <span>mois</span>
                <input type="number" name="m" required="required"min="1" max="31"  >
                <span>annee</span>
                <input type="number" name="a" required="required" min="1"  >
                <input type="submit" name="valider">
            </div>
    </form>
</body>
</html>
