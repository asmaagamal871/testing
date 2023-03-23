<?php

use PHPUnit\Framework\TestCase;

require 'src/User.php';

class UserTest extends TestCase
{
    public function testName()
    {
        $user = new User("Shehab", 'Shehab@gmail.com');
        $nameResult = $user->name();
        $this->assertEquals("Shehab", $nameResult);
    }

    public function testAddName()
    {
        $user = new User("Shehab", 'Shehab@gmail.com');
        $nameResult = $user->name("Samy");
        $this->assertEquals("Samy", $nameResult);
    }

    public function testEmail()
    {
        $user = new User("shehab", "Shehab@gmail.com");
        $emailResult = $user->Email();
        $this->assertEquals("Shehab@gmail.com", $emailResult);
    }

    public function testEmailAdd()
    {
        $user = new User("shehab", "Shehab@gmail.com");
        $emailResult = $user->Email("samy@gmail.com");
        $this->assertEquals("samy@gmail.com", $emailResult);
    }
}
