<?php
require("./assets/php/ManagerGames.php");
$managerGame = new ManagerGames();
$allGames = $managerGame->getAll();
?>

<?php 
require_once('./assets/php/ManagerTeams.php');

$managerTeam = new ManagerTeams();
$allTeams = $managerTeam->getAllTeams();
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
  echo('hello');
  include("./assets/nav-bar/nav_bar.php");
  ?>
  <script src="./assets/js/script.js" type="module"></script>
</body>

</html>