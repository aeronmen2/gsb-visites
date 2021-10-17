
<h1>liste des medicaments</h1>
<?php
for ($i = 0; $i < count($listemedicaments); $i++) { ?>
<tr>
        <td> <?php echo "<p>".$listemedicaments[$i]->getidmedicament()."</p>";?> </td>
        <td> <?php echo "<p>".$listemedicaments[$i]->getnomcommercial()."<p>";?> </td>
        <td> <?php echo "<p>".$listemedicaments[$i]->getidfamille()."</p>";?> </td>
        <td> <?php echo "<p>".$listemedicaments[$i]->getcomposition()."</p>";?> </td>
        <td> <?php echo "<p>".$listemedicaments[$i]->geteffets()."</p>";?> </td>
        <td> <?php echo "<p>".$listemedicaments[$i]->getcontreindications()."</p>";?> </td>
</tr>
<?php } ?>
</table>
