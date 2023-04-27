<table>
    <tr>
        <th>Delete</th>
        <th>Team</th>
        <th>Competition</th>
    </tr>

    <?php
    foreach ($allInscriptions as $inscription) {
        echo ('<tr>');
        echo ('<td> <button class="button-delete"></button></td>');
        echo ('<td>' . $inscription->getTeamName() . '</td>');
        echo ('<td>' . $inscription->getCompetitionName() . '</td>');
        echo ('</tr>');
    }
    ?>

</table>