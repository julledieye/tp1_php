<form action="index.php" method="GET">
            <div>
                <label for="n">choisi une langue : </label>
                <select id="n" name="lang">
                  <option value="francais" selected>Francais</option>
                  <option value="anglais" >Anglais</option>
                </select>
                <input type="submit" name="valider">
            </div>
    </form>
<?php
require('fonction.php');
if(isset($_REQUEST['valider'])){
    $lang = $_REQUEST['lang'];
    $mois = generer_mois($lang);
?>


  <p>bonjour</p>
   

    <p>Tableau des mois en <?php echo "".$lang."" ;?>
    <table border='1'  width="600" height="120">
      <div class="header">
      <?php
        if(!empty($mois)){?>
         <tr>
          <td><?php echo "".$mois[1]?></td>
          <td><?php echo "".$mois[4]?></td>
          <td><?php echo "".$mois[7]?></td>
          <td><?php echo "".$mois[10]?></td>
        </tr>
        <tr>
          <td><?php echo "".$mois[2]?></td>
          <td><?php echo "".$mois[5]?></td>
          <td><?php echo "".$mois[8]?></td>
          <td><?php echo "".$mois[11]?></td>
        </tr>
        <tr>
          <td><?php echo "".$mois[3]?></td>
          <td><?php echo "".$mois[6]?></td>
          <td><?php echo "".$mois[9]?></td>
          <td><?php echo "".$mois[12]?></td>
        </tr>
      <?php }
      }
      ?>
      </div>
    </table>

