<?php

require_once('models/User.php');

class UserController {
    private $users;

    public function __construct() {
        $this->users = [
            new User('pepe', '1234', 1),
            new User('marta', '555', 2),
            new User('ana', '1111', 3),
        ];
    }

    private function isUser($name) {
        $index = array_search($name, array_column('username'));
        return $index;
    }

    private function getUser($index) {
        return $list[$index];
    }
}