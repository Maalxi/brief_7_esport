<?php 

class Team {
    private $name;
    private $description;
    
    public function getName() { 
        return $this->name;
    }

    public function setName($name) { 
        $this->name = $name;
    }

    public function getDescription() { 
        return $this->description;
    }

    public function setDescription($description) { 
        $this->description = $description;
    }
}

require('./assets/php/DBManager.php');

class ManagerTeams extends DBManager {
  public function getAllTeams() {
    $res = $this->getConnexion()->query('SELECT * FROM team');

    $teams = [];

    foreach ($res as $team) {
      $newTeam = new Team();
      $newTeam->setName($team['name']);
      $newTeam->setDescription($team['description']);
      
      $teams[] = $newTeam;
    }
    return $teams;
  }
}

?>