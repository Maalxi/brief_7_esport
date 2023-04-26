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
  <title>Brief Esport</title>
</head>

<body>
  <a href="./assets/php/Games/pageGames.php">GAMES</a>
  <a href="./assets/php/Sponsors/pageSponsors.php">SPONSORS</a>
  <a href="./assets/php/Teams/pageTeams.php">TEAMS</a>
  <a href="./assets/php/Players/pagePlayers.php">PLAYERS</a>
  <a href="./assets/php/Competitions/pageCompetitions.php">COMPETES</a>
</body>

</html>