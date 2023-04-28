<table>
  <tr>
    <td>Delete</td>
    <td>Name</td>
    <td>Description</td>
    <td>City</td>
    <td>Format</td>
    <td>Cash prize</td>
  </tr>
  <?php 
  foreach ($allCompetitions as $competition) {
    $removeUrl = 'delete=' . $competition->getId();
    $removeLink = '<a href="./pageCompetitions.php?' . $removeUrl . '">Supprimer</a>';

    echo ('<tr>');
    echo ('<td class="button-delete">' . $removeLink . '</td>');
    echo ('<td>' . $competition->getName() . '</td>');
    echo ('<td>' . $competition->getDescription() . '</td>');
    echo ('<td>' . $competition->getCity() . '</td>');
    echo ('<td>' . $competition->getFormat() . '</td>');
    echo ('<td>' . $competition->getCash_prize() . '</td>');
    echo ('</tr>');
  } 
  ?>
</table>