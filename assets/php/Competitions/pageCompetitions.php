<?php
require("./ManagerCompetitions.php");
$managerCompetition = new ManagerCompetitions();

if (isset($_GET['delete'])) {
  $managerCompetition->delete($_GET['delete']);
}

$allCompetitions = $managerCompetition->getAllCompetitions();

if (!empty($_POST['name']) && isset($_POST['description']) && isset($_POST['city']) && isset($_POST['format']) && isset($_POST['cash_prize'])) {
  $newCompetition = new Competition();
  $newCompetition -> setName($_POST['name']);
  $newCompetition -> setDescription($_POST['description']);
  $newCompetition -> setCity($_POST['city']);
  $newCompetition -> setFormat($_POST['format']);
  $newCompetition -> setCash_prize($_POST['cash_prize']);

  $managerCompetition->create($newCompetition);

}

if (!empty($_POST['new_id']) && isset($_POST['new_name']) && isset($_POST['new_desc']) && isset($_POST['new_city']) && isset($_POST['new_format']) && isset($_POST['new_cash_prize'])){
  $upCompetition = new Competition();
  $upCompetition->setId($_POST['new_id']);
  $upCompetition->setName($_POST['new_name']);
  $upCompetition->setDescription($_POST['new_desc']);
  $upCompetition->setCity($_POST['new_city']);
  $upCompetition->setFormat($_POST['new_format']);
  $upCompetition->setCash_prize($_POST['new_cash_prize']);

  $managerCompetition->edit($upCompetition);
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
    <h1>Compétitions</h1>
    <div class="display">
      <div class="table-container">
        <?php
        include("./listCompetitions.php")
        ?>
      </div>
      <div class="form-container">
        <?php
        include("./formCompetitions.php")
        ?>
      </div>
    </div>
  </section>
  <script src="../../js/script.js" type="module"></script>
</body>
</html>