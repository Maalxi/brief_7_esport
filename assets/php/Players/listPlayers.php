<table>
    <tr>
        <th>Delete</th>
        <th>First Name</th>
        <th>Second Name</th>
        <th>City</th>
        <th>Team</th>
        <th>Game</th>
    </tr>
    <?php 
        foreach ($allPlayers as $player){
            echo ('<tr>');
            echo ('<td> <button class="button-delete"></button></td>');
            echo ('<td>'. $player->getFirstName(). '</td>');
            echo ('<td>'. $player->getSecondName(). '</td>');
            echo ('<td>'. $player->getCity(). '</td>');
            echo ('<td>'. $player->getTeamName(). '</td>');
            echo ('<td>'. $player->getGameName(). '</td>');
            echo ('</tr>');
        }
    ?>
</table>