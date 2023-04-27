<?php
class Sponsor
{
  private $id;
  private $name;
  private $team_id;
  private $tname;
  public function getId()
  {
    return $this->id;
  }
  public function setId($id)
  {
    $this->id = $id;
  }
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
    $res = $this->getConnexion()->query('SELECT sponsor.id as sid, sponsor.name AS name, sponsor.team_id AS tid, team.name AS tname FROM sponsor INNER JOIN team ON sponsor.team_id = team.id');

    $sponsors = [];

    foreach ($res as $sponsor) {
      $newSponsor = new Sponsor();
      $newSponsor->setName($sponsor['name']);
      $newSponsor->setTeamId($sponsor['tid']);
      $newSponsor->setTeamName($sponsor['tname']);
      $newSponsor->setId($sponsor['sid']);

      $sponsors[] = $newSponsor;
    }
    return $sponsors;
  }
  public function findById($sponsorid)
  {
    $request = 'SELECT * FROM sponsor where id =' . $sponsorid;
    $query = $this->getConnexion()->query($request);
    $foundSponsor = $query->fetch();

    if ($foundSponsor) {
      $sponsor = new Sponsor();
      $sponsor->setName($foundSponsor['name']);
      $sponsor->setTeamId($foundSponsor['id']);

      return $sponsor;
    } else {
      return null;
    }
  }
  public function create($sponsor)
  {
    $request = 'INSERT INTO sponsor (name, team_id) VALUE (?,?)';
    $query = $this->getConnexion()->prepare($request);
    $query->execute([
      $sponsor->getName(), $sponsor->getTeamId()
    ]);
    header('Location: pageSponsors.php');
    return true;
  }
  public function delete($sponsorid)
  {
    $sponsorToDelete = $this->findById($sponsorid);

    if ($sponsorToDelete) {
      $request = 'DELETE FROM sponsor WHERE id =' . $sponsorid;
      $query = $this->getConnexion()->prepare($request);
      $query->execute();

      header('Location: pageSponsors.php');
      exit();
    }
  }
}
