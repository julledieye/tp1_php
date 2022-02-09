<?php
require('fonction.php');
if(isset($_REQUEST['valider'])){
    $nombre = $_REQUEST['nombre'];
    $tableau = generer_T(tab_premier($nombre),inferieur_moyenne($nombre),superieur_moyenne($nombre));
    $tab_premier=tab_premier($nombre);
    $tab_inferieur=inferieur_moyenne($nombre);
    $superieur_moyenne=superieur_moyenne($nombre);
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title> Exercie_11</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<br>
	<form action="index.php" method="GET">
            <div>
                <label>Nombre</label>
                <input type="number" name="nombre" required="required" min="10000"  >
                <input type="submit" name="valider">
            </div>
    </form>
    <br>
    <div class="header">
      <table border="1" cellpadding="10" cellspacing="10" width="500">
        <tr>
          <td>Premier</td><td>Inferieur</td><td>Superieur</td>
        </tr>
     <?php
      if(!empty($tab_premier) && !empty($tab_inferieur) && !empty($superieur_moyenne)){?>
     <?php
        generer_tr_td($superieur_moyenne,$tab_inferieur,$tab_premier);
       ?>   
    <?php    
    }
     ?>
    </div>
    </table>
</body>
</html>
<?php
/*$a = array('premier', 'inferieur', 'superieur');
$b = array(array(1,3,4,5),array(10,98,76),array(56,4,3,2));
$c = array_combine($a, $b);
echo "<pre>" ;
print_r($c);
 echo "</pre>" ;
*/
 ?>