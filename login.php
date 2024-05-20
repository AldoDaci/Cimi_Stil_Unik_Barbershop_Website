<?php

class Login {
    private $storedUsername = 'user';
    private $storedPassword = 'pass'; 

    public function authenticate($username, $password) {
        return $username === $this->storedUsername && $password === $this->storedPassword;
    }
}
