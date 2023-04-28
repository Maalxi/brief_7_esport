<table>
    <tr>
        <th>Delete</th>
        <th>Sponsor</th>
        <th>Team Name</th>
    </tr>

    <?php
    foreach ($allSponsors as $sponsor) {
        $removeUrl = 'delete=' . $sponsor->getId();
        $removeLink = '<a href="./pageSponsors.php?' . $removeUrl . '">Supprimer</a>';

        echo ('<tr>');
        echo ('<td class="button-delete">' . $removeLink . '</td>');
        echo ('<td>' . $sponsor->getName() . '</td>');
        echo ('<td>' . $sponsor->getTeamName() . '</td>');
        echo ('</tr>');
    }
    ?>

</table>