<?php
require("../Teams/ManagerTeams.php");
require("./ManagerSponsors.php");

$ManagerSponsor = new ManagerSponsors();
$allSponsors = $ManagerSponsor->getAllSponsors();

$managerTeam = new ManagerTeams();
$allTeams = $managerTeam->getAllTeams();

if (!empty($_POST['name']) && isset($_POST['team_id'])) {
  $newSponsor = new sponsor();
  $newSponsor->setName($_POST['name']);
  $newSponsor->setTeamId(intval($_POST['team_id']));

  $ManagerSponsor->create($newSponsor);
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
    <h1>Sponsor</h1>
    <div class="display">
      <div class="table-container">
        <?php
        include("./listSponsors.php")
        ?>
      </div>
      <div class="form-container">
        <?php
        include("./formSponsors.php")
        ?>
      </div>
    </div>
  </section>
  <script src="../../js/script.js" type="module"></script>
</body>

</html>