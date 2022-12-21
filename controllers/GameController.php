<?php
require_once('models/Game.php');
class GameController {
  public $games;

  public function __construct() {
    if (isset($_SESSION['games'])) {
      $this->games = $_SESSION['games'];
    } else {
      $this->games = [];
      // $this->games = [
      //   new Game('Juego1'),
      //   new Game('Juego2'),
      //   new Raffle('Juego3',4, 7),
      //   new Game('Juego4'),
      // ];
      $_SESSION['games'] = $this->games;
    }
  }

  public function list() {
    $games = $this->games;
    require('views/game/list.php');
  }

  public function add($game) {
    if ($game instanceof Game) {
      $this->games[] = $game;
      $_SESSION['games'] = $this->games;
    }
  }

  public function delete($index) {
    array_splice($this->games, $index, 1);
    $_SESSION['games'] = $this->games;
    header('Location: /');
  }

  public function print($index) {
    $game = $this->games[$index];
    require('views/game/print.php');
  }
}