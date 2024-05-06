<?php

use PHPUnit\Framework\TestCase;

require 'Login.php';

class LoginTest extends TestCase {
    public function testAuthenticateSuccess() {
        $login = new Login();
        $this->assertTrue($login->authenticate('user', 'pass'));
    }

    public function testAuthenticateFailure() {
        $login = new Login();
        $this->assertFalse($login->authenticate('user', 'wrongpassword'));
    }
}
