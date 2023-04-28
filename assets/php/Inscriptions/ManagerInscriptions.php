<?php
class Inscriptions
{
  private $competition_id;
  private $team_id;
  private $tname;
  private $cname;

  
  public function getCompetitionId()
  {
    return $this->competition_id;
  }

  public function setCompetitionId($competition_id)
  {
    $this->competition_id = $competition_id;
  }

  public function getTeamId()
  {
    return $this->team_id;
  }

  public function setTeamId($team_id)
  {
    $this->team_id = $team_id;
  }
  public function getCompetitionName()
  {
    return $this->cname;
  }

  public function setCompetitionName($cname)
  {
    $this->cname = $cname;
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

class ManagerInscriptions extends DBManager
{
  public function getAllInscriptions()
  {
    $res = $this->getConnexion()->query('SELECT c.id AS cid, t.id AS tid, c.name AS cname, t.name AS tname FROM team_competition AS tc INNER JOIN team AS t ON tc.team_id = t.id INNER JOIN competition AS c ON tc.competition_id = c.id WHERE t.id != 1;');

    $inscriptions = [];

    foreach ($res as $inscription) {
      $newInscription = new Inscriptions();
      $newInscription->setCompetitionId($inscription['cid']);
      $newInscription->setTeamId($inscription['tid']);
      $newInscription->setCompetitionName($inscription['cname']);
      $newInscription->setTeamName($inscription['tname']);
      
      $inscriptions[] = $newInscription;
    }
    return $inscriptions;
  }

  public function create($inscription)
  {
    $request = 'INSERT INTO team_competition (team_id, competition_id) VALUE (?,?)';
    $query = $this->getConnexion()->prepare($request);
    $query->execute([
      $inscription->getTeamId(), $inscription->getCompetitionId()
    ]);
    header('Location:pageInscriptions.php');
    return true;
  }
}
