<table>
    <tr>
        <th>Delete</th>
        <th>Team</th>
        <th>Competition</th>
    </tr>

    <?php
    foreach ($allInscriptions as $inscription) {
        $removeUrl = 'delete=' . $inscription->getTeamId() . '&competition=' . $inscription->getCompetitionId();
        $removeLink = '<a href="./pageInscriptions.php?' . $removeUrl . '">Supprimer</a>';

        echo ('<tr>');
        echo ('<td class="button-delete">' . $removeLink . '</td>');
        echo ('<td>' . $inscription->getTeamName() . '</td>');
        echo ('<td>' . $inscription->getCompetitionName() . '</td>');
        echo ('</tr>');
    }
    ?>

</table>