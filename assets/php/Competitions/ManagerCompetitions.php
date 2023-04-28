<?php 

class Competition {
    private $id;
    private $name;
    private $description;
    private $city;
    private $format;
    private $cash_prize;
    
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
    public function getCity() { 
        return $this->city;
    }

    public function setCity($city) { 
        $this->city = $city;
    }
    public function getFormat() { 
        return $this->format;
    }

    public function setFormat($format) { 
        $this->format = $format;
    }
    public function getCash_prize() { 
        return $this->cash_prize;
    }

    public function setCash_prize($cash_prize) { 
        $this->cash_prize = $cash_prize;
    }
}

require_once ('../DBManager.php');

class ManagerCompetitions extends DBManager {
  public function getAllCompetitions() {
    $res = $this->getConnexion()->query('SELECT * FROM competition');

    $competitions = [];

    foreach ($res as $competition) {
      $newCompetition = new Competition();
      $newCompetition->setName($competition['name']);
      $newCompetition->setDescription($competition['description']);
      $newCompetition->setCity($competition['city']);
      $newCompetition->setFormat($competition['format']);
      $newCompetition->setCash_prize($competition['cash_prize']);
      $newCompetition->setId($competition['id']);

      
      $competitions[] = $newCompetition;
    }
    return $competitions;
  }
  public function create($competition) {
    $request = 'INSERT INTO competition (name, description, city, format, cash_prize) VALUE (?,?,?,?,?)';
    $query = $this->getConnexion()->prepare($request);
    $query->execute([
        $competition->getName(), $competition->getDescription(), $competition->getCity(), $competition->getFormat(), $competition->getCash_prize()
    ]);
    header('Location:pageCompetitions.php');
    return true;
}

public function edit ($competition){
    $request = 'UPDATE competition SET name = ?, description = ?,city = ?,format = ?,cash_prize = ? WHERE id = ?';
    $query = $this->getConnexion()->prepare($request);
    $query->execute([
      $competition->getName(), $competition->getDescription(), $competition->getCity(), $competition->getFormat(), $competition->getCash_prize(), $competition->getId()
    ]);
    header('Location: pageCompetitions.php');
    exit();
  }
}

?>