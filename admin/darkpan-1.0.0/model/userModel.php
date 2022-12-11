<?php
class userModel
{
    private $state;
    private $username;
    private $email;
    private $password;
    private $phone;
    private $address;
    private $gender;
    private $role;

    public function __construct($state, $username, $email, $password, $phone, $address, $gender, $role)
    {
        $this->state = $state;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->address = $address;
        $this->gender = $gender;
        $this->role = $role;
    }

    public function getState()
    {
        return $this->state;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function getGender()
    {
        return $this->gender;
    }
    public function getRole()
    {
        return $this->role;
    }

}