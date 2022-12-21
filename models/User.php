<?php
class User {
    public $username;
    private $password;
    public $level;

    public function __construct($username, $password, $level) {
        $this->username = $username;
        $this->password = $password;
        $this->level = $level;
    }

    public function checkPassword($password) {
        return $this->password == $password;
    }
}