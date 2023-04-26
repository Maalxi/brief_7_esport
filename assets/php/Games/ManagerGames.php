<?php 

class Game
{
    private $id;
    private $name;
    private $station;
    private $format;

    public function getId() { 
        return $this->id;
    }

    public function setId($id) { 
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

    public function getStation()
    {
        return $this->station;
    }

    public function setStation($station)
    {
        $this->station = $station;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function setFormat($format)
    {
        $this->format = $format;
    }

}

require_once ('../DBManager.php');
class ManagerGames extends DBManager
{
    public function getAll()
    {
        $res = $this->getConnexion()->query('SELECT * FROM game');
        $games = [];

        foreach ($res as $game) {
            $newGame = new Game;
            $newGame->setId($game['id']);
            $newGame->setName($game['name']);
            $newGame->setStation($game['station']);
            $newGame->setFormat($game['format']);

            $games[] = $newGame;

        }
        return $games; 
    }

    public function create($game) {
        $request = 'INSERT INTO game (name, station, format) VALUE (?,?,?)';
        $query = $this->getConnexion()->prepare($request);
        $query->execute([
            $game->getName(), $game->getStation(), $game->getFormat()
        ]);
        return true;
    }
}
?>