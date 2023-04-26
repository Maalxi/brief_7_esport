<?php 

class Team {
    private $id;
    private $name;
    private $description;

    public function getId() { 
        return $this->id;
    }

    public function setId($id) { 
        $this->id = $id;
    }

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

require_once ('../DBManager.php');

class ManagerTeams extends DBManager {
  public function getAllTeams() {
    $res = $this->getConnexion()->query('SELECT * FROM team');

    $teams = [];

    foreach ($res as $team) {
      $newTeam = new Team();
      $newTeam->setId($team['id']);
      $newTeam->setName($team['name']);
      $newTeam->setDescription($team['description']);
      
      $teams[] = $newTeam;
    }
    return $teams;
  }
  public function create($team) {
    $request = 'INSERT INTO team (name, description) VALUE (?,?)';
    $query = $this->getConnexion()->prepare($request);
    $query->execute([
        $team->getName(), $team->getDescription()
    ]);
    return true;
}
}

?>