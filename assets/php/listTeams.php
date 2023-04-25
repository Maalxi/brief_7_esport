<table>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <?php 
  foreach ($allTeams as $team) {
    echo ('<tr>');
    echo ('<td>' . $team->getName() . '</td>');
    echo ('<td>' . $team->getDescription() . '</td>');
    echo ('</tr>');
  } 
  ?>
</table>