<?php
require("../Teams/ManagerTeams.php");
require("../Competitions/ManagerCompetitions.php");
require("./ManagerInscriptions.php");

$managerInscription = new ManagerInscriptions();
$allInscriptions= $managerInscription->getAllInscriptions();

$managerTeam = new ManagerTeams();
$allTeams = $managerTeam->getAllTeams();

$managerCompetition = new ManagerCompetitions();
$allCompetitions = $managerCompetition->getAllCompetitions();

if (!empty($_POST['team_id']) && isset($_POST['competition_id'])) {
  $newInscription = new Inscriptions();
  $newInscription->setTeamId(intval($_POST['team_id']));
  $newInscription->setCompetitionId(intval($_POST['competition_id']));

  $managerInscription->create($newInscription);
}
?>

<!DOCTYPE html>
<html lang="fr">

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
    <h1>Inscriptions</h1>
    <div class="display">
      <div class="table-container">
        <?php
        include("./listInscriptions.php")
        ?>
      </div>
      <div class="form-container">
        <?php
        include("./formInscriptions.php")
        ?>
      </div>
    </div>
  </section>
  <script src="../../js/script.js" type="module"></script>
</body>

</html>