<?php
require_once('models/Game.php');  

class Domino extends Game {
  public $number;

  public function __construct($title, $number) {
    parent::__construct($title);
    $this->number = $number;
  }

  public function __toString() : string {
    return sprintf('<div class="fw-bold">%s</div>Número más alto de ficha: %s', 
      $this->title, $this->number);
  }

  public function print() {
    echo '<link rel="stylesheet" href="/css/domino.css">';
    echo '<div class="d-inline-flex">';
    for ($i=1; $i <= $this->number ; $i++) {
      for ($j = $i; $j <= $this->number; $j++) {
        $number = $i;
        $title = $this->title;
        include('views/domino/ticket.php');
      }
    }
    echo '</div>';
  }
}