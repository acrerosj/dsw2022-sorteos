<?php
abstract class Game {
  public $title;

  public function __construct($title) {
    $this->title = $title;
  }

  public function __toString() : string {
    return sprintf('<div class="fw-bold">%s</div>%s', 
      $this->title, "nada que imprimir");
  }

  public function print() {
    echo "Print no funciona aquí";
  }
}