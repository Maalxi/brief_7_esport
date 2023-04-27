<table>
    <tr>
        <th>Delete</th>
        <th>Sponsor</th>
        <th>Team Name</th>
    </tr>

    <?php
    foreach ($allSponsors as $sponsor) {
        echo ('<tr>');
        echo ('<td> <button class="button-delete"></button></td>');
        echo ('<td>' . $sponsor->getName() . '</td>');
        echo ('<td>' . $sponsor->getTeamName() . '</td>');
        echo ('</tr>');
    }
    ?>

</table>