
<h1>liste des medecins</h1>

<table>
<thead>
<tr>
<th>Identifiant</th>
<th>Nom</th>
<th>Prénom</th>
<th>Adresse</th>
<th>Téléphone</th>
<th>Spécialité</th>
<th>Département</th>
<th></th>
</tr>
</thead>

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
        <td><button> Modifier </button></td>
            
</tr>
<?php } ?>
</table>
