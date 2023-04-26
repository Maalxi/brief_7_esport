<table>
  <tr>
    <td>Delete</td>
    <td>Name</td>
    <td>Description</td>
  </tr>
  <?php 
  foreach ($allTeams as $team) {
    echo ('<tr>');
    echo ('<td> <button class="button-delete"></button></td>');
    echo ('<td>' . $team->getName() . '</td>');
    echo ('<td>' . $team->getDescription() . '</td>');
    echo ('</tr>');
  } 
  ?>
</table>