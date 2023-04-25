<?php
require("./assets/php/ManagerGames.php");
$managerGame = new ManagerGames();
$allGames = $managerGame->getAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/css/style.css">
  <title>Document</title>
</head>

<body>
  <?php
  include("./assets/nav-bar/nav_bar.php");
  ?>
  <section class="game-container">
    <h1>Exemple de titre</h1>
    <div class="display">
      <div class="table-container">
        <?php
        include("./assets/php/listGames.php")
        ?>
      </div>
      <div class="form-container">
        <?php
        include("./assets/php/formGames.php")
        ?>
      </div>
    </div>
  </section>
  <script src="./assets/js/script.js" type="module"></script>
</body>

</html>