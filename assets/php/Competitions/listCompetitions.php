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
    $removeLink = '<a href="./pageCompetitions.php?' . $removeUrl . '"><img class="button-delete" src="../../img/Capture_decran_du_2023-04-27_13-31-15.png" alt=""></a>';

    echo ('<tr>');
    echo ('<td>' . $removeLink . '</td>');
    echo ('<td>' . $competition->getName() . '</td>');
    echo ('<td>' . $competition->getDescription() . '</td>');
    echo ('<td>' . $competition->getCity() . '</td>');
    echo ('<td>' . $competition->getFormat() . '</td>');
    echo ('<td>' . $competition->getCash_prize() . '</td>');
    echo ('</tr>');
  } 
  ?>
</table>