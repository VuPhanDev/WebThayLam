<?php
include_once '../utils/MySQL.php';
class catelogyModel
{
    private $catID;
    private $catName;
    private $amount;
    private $status;

    public function __construct($catID, $catName, $amount, $status)
    {
        $this->catID = $catID;
        $this->catName = $catName;
        $this->amount = $amount;
        $this->status = $status;
    }

    public function getcatID()
    {
        return $this->catID;
    }

    public function setcatID($catID)
    {
        $this->catID = $catID;

        return $this;
    }

    public function getcatName()
    {
        return $this->catName;
    }

    public function setcatName($catName)
    {
        $this->catName = $catName;

        return $this;
    }

    public function getamount()
    {
        return $this->amount;
    }

    public function setamount($amount)
    {
        $this->amount = $amount;

        return $this;
    }


    public function getstatus()
    {
        return $this->status;
    }

    public function setstatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function insertCatelogy(){
        $dbCon = new MySQL();

        $query = "INSERT INTO webthaylam.category (catID, catName, amount, status) VALUES (:catID, :catName, :amount, :status)";
        $param = array(":catID"=>$this -> getcatID(),":catName"=>$this -> getcatName(),":amount"=>$this -> getamount(),":status"=>$this -> getstatus());

        $dbCon->insertUser($query,$param);
        $dbCon->disconnectDB();
    }

    public function updateCatelogy(){
        $dbCon = new MySQL();

        $query = "UPDATE webthaylam.category set catName=:catName, amount=:amount, status=:status where catID=:catID";
        $param = array(":catName" => $this->getcatName(), ":amount" => $this->getamount(), ":status" => $this->getstatus(), ":catID" => $this->getcatID());
        
        $dbCon->updateData($query,$param);
        $dbCon->disconnectDB();
    }

    public function getCatelogy()
    {
        $dbCon = new MySQL();

        $query = "SELECT * FROM webthaylam.category where catID=:catID";
        $param = array(":catID" => $this->getcatID());

        $catelogy = $dbCon->getData($query,$param);
        $dbCon->disconnectDB();

        return  $catelogy[0];
    }

    public function getListCatelogy(){
        $dbCon = new MySQL();

        $query = "SELECT * FROM webthaylam.catelogy ";

        $catelogy = $dbCon->getAllData($query);
        $dbCon->disconnectDB();

        return  $catelogy;
    }
    
    public function deleteCatelogy(){
        $dbCon = new MySQL();

        $query = "DELETE FROM webthaylam.catelogy where catID=:catID";
        $param = array(":catID" => $this->getcatID());

        $dbCon->deleteData($query,$param);
        $dbCon->disconnectDB();
    }

}