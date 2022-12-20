<?php
class User {
    private $username;
    private $password;
    private $level;

    public function __construct($username, $password, $level) {
        $this->username = $username;
        $this->password = $password;
        $this->level = $level;
    }
}