<?php
class sponsor
{

  private $name;
  private $team_id;
  private $tname;
  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getTeamId()
  {
    return $this->team_id;
  }

  public function setTeamId($team_id)
  {
    $this->team_id = $team_id;
  }
  public function getTeamName()
  {
    return $this->tname;
  }

  public function setTeamName($tname)
  {
    $this->tname = $tname;
  }
}

require_once('../DBManager.php');

class ManagerSponsors extends DBManager
{
  public function getAllSponsors()
  {
    $res = $this->getConnexion()->query('SELECT sponsor.name AS name, sponsor.team_id AS tid, team.name AS tname FROM sponsor INNER JOIN team ON sponsor.team_id = team.id');

    $sponsors = [];

    foreach ($res as $sponsor) {
      $newSponsor = new sponsor();
      $newSponsor->setName($sponsor['name']);
      $newSponsor->setTeamId($sponsor['tid']);
      $newSponsor->setTeamName($sponsor['tname']);
      
      $sponsors[] = $newSponsor;
    }
    return $sponsors;
  }

  public function create($sponsor)
  {
    $request = 'INSERT INTO sponsor (name, team_id) VALUE (?,?)';
    $query = $this->getConnexion()->prepare($request);
    $query->execute([
      $sponsor->getName(), $sponsor->getTeamId()
    ]);
    header('Location:pageSponsors.php');
    return true;
  }
}
