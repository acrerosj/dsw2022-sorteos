<?php
require_once('models/Game.php');  

class Raffle extends Game {
  public $start;
  public $end;

  public function __construct($title, $start, $end) {
    parent::__construct($title);
    $this->start = $start;
    $this->end = $end;
  }

  public function __toString() : string {
    return sprintf('<div class="fw-bold">%s</div>Comienza en el número %s y acaba en el %s', 
      $this->title, $this->start, $this->end);
  }

  public function print() {
    for ($i=$this->start; $i <= $this->end ; $i++) {
      $number = $i;
      $title = $this->title;
      include('views/raffle/ticket.php');
    }
  }
}