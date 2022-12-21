<?php

require_once('models/Raffle.php');

class RaffleController extends GameController {

    public function form() {
        require('views/raffle/form.php');
    }

    public function create($title, $start, $end){
        $raffle = new Raffle($title, $start, $end);
        $this->add($raffle);
        header('Location: /');
    }
}