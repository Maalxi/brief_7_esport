<table>
    <tr>
        <th>Delete</th>
        <th>Name</th>
        <th>Station</th>
        <th>Format</th>
    </tr>
    <?php 
        foreach ($allGames as $game){
            echo ('<tr>');
            echo ('<td> <button class="button-delete"></button></td>');
            echo ('<td>'. $game->getName(). '</td>');
            echo ('<td>'. $game->getStation(). '</td>');
            echo ('<td>'. $game->getFormat(). '</td>');
            echo ('</tr>');
        }
    ?>
</table>