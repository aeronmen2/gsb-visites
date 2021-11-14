<script>
        $(document).ready(function() {
                $('#example').DataTable({
                        "lengthChange": false,
                        language: {         search: "_INPUT_",
        searchPlaceholder: "Recherche...",
        "processing": true,
        "serverSide": true,
        "deferLoading": 57}
                });
        });
</script>


<div>
        <table id="example" class="ui celled table">
                <thead>
                        <tr>
                                <th>Identifiant</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Adresse</th>
                                <th>Téléphone</th>
                                <th>Spécialité</th>
                                <th>Département</th>
                                <th>Modifier</th>
                                <th>Rapports</th>
                        </tr>
                </thead>
                <?php
                for ($i = 0; $i < count($listemedecin); $i++) { ?>
                        <tr>
                                <td> <?php echo "<p>" . $listemedecin[$i]->getidmedecin() . "</p>"; ?> </td>
                                <td> <?php echo "<p>" . $listemedecin[$i]->getnommedecin() . "<p>"; ?> </td>
                                <td> <?php echo "<p>" . $listemedecin[$i]->getprenommedecin() . "<p>"; ?> </td>
                                <td> <?php echo "<p>" . $listemedecin[$i]->getadressemedecin() . "<p>"; ?> </td>
                                <td> <?php echo "<p>" . $listemedecin[$i]->gettelmedecin() . "<p>"; ?> </td>
                                <td> <?php echo "<p>" . $listemedecin[$i]->getspecialitecomplementaire() . "<p>"; ?> </td>
                                <td> <?php echo "<p>" . $listemedecin[$i]->getdepartement() . "<p>"; ?> </td>
                                <td> <?php echo "<a href='./?action=detailmedecin&idmedecin=" . $listemedecin[$i]->getidmedecin() . "'/>" ?><i class="fas fa-edit"></i></a></td>
                                <td> <?php echo "<a href='./?action=modifmedecin&idmedecin=" . $listemedecin[$i]->getidmedecin() . "'/>" ?><i class="fas fa-list"></i></a></td>

                        </tr>
                <?php } ?>
        </table>
</div>