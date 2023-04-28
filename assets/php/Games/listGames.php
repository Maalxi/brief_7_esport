<table>
    <tr>
        <th>Delete</th>
        <th>Name</th>
        <th>Station</th>
        <th>Format</th>
    </tr>
    <?php 
        foreach ($allGames as $game){
            $removeUrl = 'delete=' . $game->getId();
            $removeLink = '<a href="./pageGames.php?' . $removeUrl . '">Supprimer</a>';

            echo ('<tr>');
            echo ('<td class="button-delete">' . $removeLink . '</td>');
            echo ('<td>'. $game->getName(). '</td>');
            echo ('<td>'. $game->getStation(). '</td>');
            echo ('<td>'. $game->getFormat(). '</td>');
            echo ('</tr>');
        }
    ?>
</table>