<table>
  <tr>
    <td>Delete</td>
    <td>Name</td>
    <td>Description</td>
  </tr>
  <?php
  foreach ($allTeams as $team) {
    $removeUrl = 'delete=' . $team->getId();
    $removeLink = '<a href="./pageTeams.php?' . $removeUrl . '">Supprimer</a>';

    echo ('<tr>');
    echo ('<td class="button-delete">' . $removeLink . '</td>');
    echo ('<td>' . $team->getName() . '</td>');
    echo ('<td>' . $team->getDescription() . '</td>');
    echo ('</tr>');
  }
  ?>
</table>