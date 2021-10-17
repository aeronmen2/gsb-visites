
<h1>liste des medecins</h1>
<?php
for ($i = 0; $i < count($listemedecin); $i++) { ?>
<tr>
        <td> <?php echo "<p>".$listemedecin[$i]->getidmedecin()."</p>";?> </td>
        <td> <?php echo "<p>".$listemedecin[$i]->getnommedecin()."<p>";?> </td>
        <td> <?php echo "<p>".$listemedecin[$i]->getprenommedecin()."<p>";?> </td>
        <td> <?php echo "<p>".$listemedecin[$i]->getadressemedecin()."<p>";?> </td>
        <td> <?php echo "<p>".$listemedecin[$i]->gettelmedecin()."<p>";?> </td>
        <td> <?php echo "<p>".$listemedecin[$i]->getspecialitecomplementaire()."<p>";?> </td>
        <td> <?php echo "<p>".$listemedecin[$i]->getdepartement()."<p>";?> </td>
            
</tr>
<?php } ?>
</table>
