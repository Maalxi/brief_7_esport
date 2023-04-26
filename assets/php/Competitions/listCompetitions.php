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
    echo ('<tr>');
    echo ('<td> <button class="button-delete"></button></td>');
    echo ('<td>' . $competition->getName() . '</td>');
    echo ('<td>' . $competition->getDescription() . '</td>');
    echo ('<td>' . $competition->getCity() . '</td>');
    echo ('<td>' . $competition->getFormat() . '</td>');
    echo ('<td>' . $competition->getCash_prize() . '</td>');
    echo ('</tr>');
  } 
  ?>
</table>