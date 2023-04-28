<?php
require("./ManagerTeams.php");

$managerTeam = new ManagerTeams();

if (isset($_GET['delete'])) {
  $managerTeam->delete($_GET['delete']);
}

$allTeams = $managerTeam->getAllTeams();


if (!empty($_POST['name']) && isset($_POST['description'])) {
  $newTeam = new Team();
  $newTeam -> setName($_POST['name']);
  $newTeam -> setDescription($_POST['description']);

  $managerTeam->create($newTeam);

}

if (!empty($_POST['new_id']) && isset($_POST['new_name']) && isset($_POST['new_description']) ){
  $upTeam = new Team();
  $upTeam->setId($_POST['new_id']);
  $upTeam->setName($_POST['new_name']);
  $upTeam->setDescription($_POST['new_description']);

  $managerTeam->edit($upTeam);
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
    <h1>Teams</h1>
    <div class="display">
      <div class="table-container">
        <?php
        include("./listTeams.php")
        ?>
      </div>
      <div class="form-container">
        <?php
        include("./formTeams.php")
        ?>
      </div>
    </div>
  </section>
  <script src="../../js/script.js" type="module"></script>
</body>
</html>