<?php
require('fonction.php');
if(isset($_REQUEST['valider'])){
    $nombre = $_REQUEST['nombre'];
?>
<!DOCTYPE html>
<html>
<head>
	<title> Exercie_10</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="header">
     <?php
      if(!empty($nombre)){?>
        <ul class="list">
          <?php
            afficher_champs($nombre);
          ?>
        </ul>
    <?php    }
    }
     ?>
    </div>
    <p>
    <a href="../exercice9"> 9 < < <</a> | <a href="../exercice11"> > > > 11</a>
</p>
        <p>VOUS ETES DANS EXERCICE 10 </p>
	<form action="index.php" method="GET">
            <div>
                <label>Nombre</label>
                <input type="number" name="nombre" required="required" min="1" >
                <input type="submit" name="valider">
            </div>
    </form>
</body>
</html>
