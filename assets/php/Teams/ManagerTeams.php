<?php

class Team
{
    private $id;
    private $name;
    private $description;

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

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }
}

require_once('../DBManager.php');

class ManagerTeams extends DBManager
{
    public function getAllTeams()
    {
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
    public function findById($teamid)
    {
        $request = 'SELECT * FROM team where id =' . $teamid;
        $query = $this->getConnexion()->query($request);
        $foundTeam = $query->fetch();

        if ($foundTeam) {
            $team = new Team();
            $team->setName($foundTeam['name']);
            $team->setId($foundTeam['id']);

            return $team;
        } else {
            return null;
        }
    }
    public function create($team)
    {
        $request = 'INSERT INTO team (name, description) VALUE (?,?)';
        $query = $this->getConnexion()->prepare($request);
        $query->execute([
            $team->getName(), $team->getDescription()
        ]);
        header('Location:pageTeams.php');
        return true;
    }
    public function delete($teamid)
    {
        $teamToDelete = $this->findById($teamid);

        if ($teamToDelete) {
            $request = 'DELETE FROM team WHERE id =' . $teamid;
            $query = $this->getConnexion()->prepare($request);
            $query->execute();

            header('Location: pageTeams.php');
            exit();
        }
    }
}
