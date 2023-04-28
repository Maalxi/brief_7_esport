<table>
    <tr>
        <th>Delete</th>
        <th>Sponsor</th>
        <th>Team Name</th>
    </tr>

    <?php
    foreach ($allSponsors as $sponsor) {
        $removeUrl = 'delete=' . $sponsor->getId();
        $removeLink = '<a href="./pageSponsors.php?' . $removeUrl . '"><img class="button-delete" src="../../img/Capture_decran_du_2023-04-27_13-31-15.png" alt=""></a>';

        echo ('<tr>');
        echo ('<td>' . $removeLink . '</td>');
        echo ('<td>' . $sponsor->getName() . '</td>');
        echo ('<td>' . $sponsor->getTeamName() . '</td>');
        echo ('</tr>');
    }
    ?>

</table>