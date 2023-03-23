<?php

class User
{
    private $username;
    private $useremail;
    public function __construct($username, $email)
    {
        $this->username = $this->name($username);
        $this->useremail = $this->email($email);
    }
    public function Name($name=null)
    {
        if ($name) {
            $this->username = $name;
        }
        return $this->username;
    }

    public function Email($email=null)
    {
        if ($email) {
            $this->useremail = $email;
        }
        return $this->useremail;
    }
}
