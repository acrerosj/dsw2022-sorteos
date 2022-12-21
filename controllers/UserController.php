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
        $index = array_search($name, array_map(
            fn($user) => $user->username == $name,
            $this->users));
        return $index;
    }

    private function getUser($index) {
        return $this->users[$index];
    }

    public function login() {
        require('views/user/login.php');
    }

    public function validate($name, $password) {
        $index = $this->isUser($name);
        if (is_numeric($index)) {
            $user = $this->getUser($index);
            if ($user->checkPassword($password)) {                
                $_SESSION['username'] = $user->username;
                $_SESSION['level'] = $user->level;
                return true;
            }
        }
        return false;
    }

    public function logout() {
        session_destroy();
    }
}