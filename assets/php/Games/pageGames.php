<?php
require("./ManagerGames.php");
$managerGame = new ManagerGames();

if (isset($_GET['delete'])) {
  $managerGame->delete($_GET['delete']);
}

$allGames = $managerGame->getAll();

if (!empty($_POST['name']) && isset($_POST['station']) && isset($_POST['format'])) {
  $newGame = new Game();
  $newGame -> setName($_POST['name']);
  $newGame -> setStation($_POST['station']);
  $newGame -> setFormat($_POST['format']);

  $managerGame->create($newGame);

}

if (!empty($_POST['new_id']) && isset($_POST['new_name']) && isset($_POST['new_station']) && isset($_POST['new_format'])){
  $upGame = new Game();
  $upGame->setId($_POST['new_id']);
  $upGame->setName($_POST['new_name']);
  $upGame->setStation($_POST['new_station']);
  $upGame->setFormat($_POST['new_format']);

  $managerGame->edit($upGame);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../css/style.css">

</head>

<body>
  <?php
  include("../../nav-bar/nav_bar.php");
  ?>
  <section class="container">
    <h1>Games</h1>
    <div class="display">
      <div class="table-container">
        <?php
        include("./listGames.php")
        ?>
      </div>
      <div class="form-container">
        <?php
        include("./formGames.php")
        ?>
      </div>
    </div>
  </section>
  <script src="../../js/script.js" type="module"></script>
</body>
</html>