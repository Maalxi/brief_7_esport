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
            $removeLink = '<a href="./pageGames.php?' . $removeUrl . '"><img class="button-delete" src="../../img/Capture_decran_du_2023-04-27_13-31-15.png" alt=""></a>';

            echo ('<tr>');
            echo ('<td>' . $removeLink . '</td>');
            echo ('<td>'. $game->getName(). '</td>');
            echo ('<td>'. $game->getStation(). '</td>');
            echo ('<td>'. $game->getFormat(). '</td>');
            echo ('</tr>');
        }
    ?>
</table>