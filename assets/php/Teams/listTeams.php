<table>
  <tr>
    <td>Delete</td>
    <td>Name</td>
    <td>Description</td>
  </tr>
  <?php
  foreach ($allTeams as $team) {
    $removeUrl = 'delete=' . $team->getId();
    $removeLink = '<a href="./pageTeams.php?' . $removeUrl . '"><img class="button-delete" src="../../img/Capture_decran_du_2023-04-27_13-31-15.png" alt=""></a>';

    echo ('<tr>');
    echo ('<td>' . $removeLink . '</td>');
    echo ('<td>' . $team->getName() . '</td>');
    echo ('<td>' . $team->getDescription() . '</td>');
    echo ('</tr>');
  }
  ?>
</table>