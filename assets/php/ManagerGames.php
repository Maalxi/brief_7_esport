<?php 

class Game
{
    private $name;
    private $station;
    private $format;
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

require ('./assets/php/DBManager.php');
class ManagerGames extends DBManager
{
    public function getAll()
    {
        $res = $this->getConnexion()->query('SELECT * FROM game');
        $games = [];

        foreach ($res as $game) {
            $newGame = new Game;
            $newGame->setName($game['name']);
            $newGame->setStation($game['station']);
            $newGame->setFormat($game['format']);

            $games[] = $newGame;

        }
        return $games; 
    }
}


?>