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

<!-- <table>
  <thead>
    <tr>
      <th>avatar</th>
      <th>group</th>
      <th>name</th>
      <th>points</th>
      <th>control</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <td><img src="https://placehold.co/60" alt="placehold"></td>
      <td>ninja</td>
      <td>ahmed mohamed</td>
      <td>120</td>
      <td>
        <button class="button_one">view</button>
        <button class="button_two">delete</button>
      </td>
    </tr>

    <tr>
      <td><img src="https://placehold.co/60" alt="placehold"></td>
      <td rowspan="2">shades</td>
      <td>shady nabile</td>
      <td>180</td>
      <td>
        <button class="button_one">view</button>
        <button class="button_two">delete</button>
      </td>
    </tr>

    <tr>
      <td><img src="https://placehold.co/60" alt="placehold"></td>
      <td>eman mohamed</td>
      <td>160</td>
      <td>
        <button class="button_one">view</button>
        <button class="button_two">delete</button>
      </td>
    </tr>
  </tbody>

  <tr>
    <td><img src="https://placehold.co/60" alt="placehold"></td>
    <td rowspan="2">valhala</td>
    <td>mohamed inbrahim</td>
    <td>190</td>
    <td>
      <button class="button_one">view</button>
      <button class="button_two">delete</button>
    </td>
  </tr>

  <tr>
    <td><img src="https://placehold.co/60" alt="placehold"></td>
    <td>noor atef</td>
    <td>110</td>
    <td>
      <button class="button_one">view</button>
      <button class="button_two">delete</button>
    </td>
  </tr>

  <tr class="bottom">
    <td><img src="https://placehold.co/60" alt="placehold"></td>
    <td>unino</td>
    <td>ibrahim adel</td>
    <td>130</td>
    <td>
      <button class="button_one">view</button>
      <button class="button_two">delete</button>
    </td>
  </tr>
</table> -->