<?php

require_once('models/Domino.php');

class DominoController extends GameController {

    public function form() {
        require('views/domino/form.php');
    }

    public function create($title, $number){
        $domino = new Domino($title, $number);
        $this->add($domino);
        header('Location: /');
    }
}