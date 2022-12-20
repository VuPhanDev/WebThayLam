<?php
include_once '../utils/MySQL.php';
class userModel
{
    private $userid;
    private $state;
    private $username;
    private $email;
    private $password;
    private $phone;
    private $address;
    private $gender;
    private $role;

    public function __construct($state, $username, $email, $password, $phone, $address, $gender, $role, $userid)
    {
        $this->state = $state;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->phone = $phone;
        $this->address = $address;
        $this->gender = $gender;
        $this->role = $role;
        $this -> userid = $userid;
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

    public function getUserid()
    {
        return $this->userid;
    }

    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    public function insertUser(){
        $dbCon = new MySQL();

        $query = "INSERT INTO webthaylam.user (name, email, password, phone, address, gender, role, state) VALUES (:name, :email, :password, :phone, :address, :gender, :role, :state)";
        $param = array(":name"=>$this -> getUsername(),":email"=>$this -> getEmail(),":password"=>$this -> getPassword(),":phone"=>$this -> getPhone(),":address"=>$this -> getAddress(),":gender"=>$this -> getGender(),"role"=>$this -> getRole(),":state"=>$this -> getState());

        $dbCon->insertUser($query,$param);
        $dbCon->disconnectDB();
    }

    public function updateUser(){
        $dbCon = new MySQL();

        $query = "UPDATE webthaylam.user set name=:name, password=:password, phone=:phone, address=:address, gender=:gender, role=:role, state=:state  where userID=:userID";
        $param = array(":name" => $this->getUsername(), ":password" => $this->getPassword(), ":phone" => $this->getPhone(), ":address" => $this->getAddress(), ":gender" => $this->getGender(), ":role" => $this->getRole(), ":state" => $this->getState() , ":userID" => $this->getUserid());
        
        $dbCon->updateData($query,$param);
        $dbCon->disconnectDB();
    }

    public function getUser()
    {
        $dbCon = new MySQL();

        $query = "SELECT * FROM webthaylam.user where userID=:userID";
        $param = array(":userID" => $this->getUserid());

        $user = $dbCon->getData($query,$param);
        $dbCon->disconnectDB();

        return  $user;
    }

    public function getListUser(){
        $dbCon = new MySQL();

        $query = "SELECT * FROM webthaylam.user ";

        $listUser = $dbCon->getAllData($query);
        $dbCon->disconnectDB();

        return  $listUser;
    }

    public function deleteUser(){
        $dbCon = new MySQL();

        $query = "DELETE FROM webthaylam.user where userID=:userID";
        $param = array(":userID" => $this->getUserid());

        $dbCon->deleteData($query,$param);
        $dbCon->disconnectDB();
    }


}