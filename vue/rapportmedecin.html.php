<script>
        $(document).ready(function() {
                $('#example').DataTable({
                        "lengthChange": false,
                        language: {         search: "_INPUT_",
        searchPlaceholder: "Recherche... (YYYY-MM-DD)",
        "processing": true,
        "serverSide": true,}
                });
        });
</script>

<div>
        <table id="example" class="ui celled table">
                <thead>
                        <tr>
                                <th>Identifiant</th>
                                <th>Date</th>
                                <th>Motif</th>
                                <th>Bilan</th>
                                <th>idVisiteur</th>
                                <th>idMedecin</th>
                                <th>Modifier</th>
                        </tr>
                </thead>
                <?php
                for ($i = 0; $i < count($rapports); $i++) { ?>
                        <tr>
                                <td> <?php echo "<p>" . $rapports[$i]->getidrapport() . "</p>"; ?> </td>
                                <td> <?php echo "<p>" . $rapports[$i]->getdaterapport() . "<p>"; ?> </td>
                                <td> <?php echo "<p>" . $rapports[$i]->getmotifrapport() . "<p>"; ?> </td>
                                <td> <?php echo "<p>" . $rapports[$i]->getbilanrapport() . "<p>"; ?> </td>
                                <td> <?php echo "<p>" . $rapports[$i]->getidvisiteur() . "<p>"; ?> </td>
                                <td> <?php echo "<p>" . $rapports[$i]->getidmedecin() . "<p>"; ?> </td>
                        <td><?php echo "<a href='./?action=detailrapport&idrapport=" . $rapports[$i]->getidrapport() . "'/>" ?><i class="fas fa-edit"></i></a></td>
                        <tr>
                <?php } ?>
        </table>
</div>