<table>
    <tr>
        <th>Delete</th>
        <th>Edit</th>
        <th>Sponsor</th>
        <th>Team Name</th>
    </tr>

    <?php
    foreach ($allSponsors as $sponsor) {
        $removeUrl = 'delete=' . $sponsor->getId();
        $removeLink = '<a href="./pageSponsors.php?' . $removeUrl . '">Supprimer</a>';

        $editUrl = './pageSponsors.php?edit=' . $sponsor->getId();
        $editLink = '<a href="' . $editUrl . '">' . 'editer' . '</a>';

        echo ('<tr>');
        echo ('<td class="button-delete">' . $removeLink . '</td>');
        echo ('<td class="button-delete">' . $editLink . '</td>');
        echo ('<td>' . $sponsor->getName() . '</td>');
        echo ('<td>' . $sponsor->getTeamName() . '</td>');
        echo ('</tr>');
    }
    ?>

</table>