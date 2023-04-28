<table>
    <tr>
        <th>Delete</th>
        <th>Team</th>
        <th>Competition</th>
    </tr>

    <?php
    foreach ($allInscriptions as $inscription) {
        $removeUrl = 'delete=' . $inscription->getTeamId() . '&competition=' . $inscription->getCompetitionId();
        $removeLink = '<a href="./pageInscriptions.php?' . $removeUrl . '"><img class="button-delete" src="../../img/Capture_decran_du_2023-04-27_13-31-15.png" alt=""></a>';

        echo ('<tr>');
        echo ('<td>' . $removeLink . '</td>');
        echo ('<td>' . $inscription->getTeamName() . '</td>');
        echo ('<td>' . $inscription->getCompetitionName() . '</td>');
        echo ('</tr>');
    }
    ?>

</table>