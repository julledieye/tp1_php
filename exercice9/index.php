<?php
require('fonction.php');
if(isset($_REQUEST['valider'])){
    $nombre = $_REQUEST['nombre'];
?>
<!DOCTYPE html>
<html>
<head>
	<title> Exercie_9</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="header">
     <?php
      if(!empty($nombre)){?>
        <ul class="list">
          <?php
            afficher_table($nombre);
          ?>
        </ul>
    <?php    }
    }
     ?>
    </div>
    <p>
    <a href="../exercice8"> 8 < < <</a> | <a href="../exercice10"> > > > 10</a>
</p>
        <p>VOUS ETES DANS EXERCICE 9 </p>
  
	<form action="index.php" method="GET">
            <div>
                <label>Nombre</label>
                <input type="number" name="nombre" required="required" min="1" >
                <input type="submit" name="valider">
            </div>
    </form>
</body>
</html>
