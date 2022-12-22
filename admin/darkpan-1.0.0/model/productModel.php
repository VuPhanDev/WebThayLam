<?php
include_once '../utils/MySQL.php';
class productModel
{
    private $productID;
    private $productName;
    private $price;
    private $amount;
    private $image;
    private $description;
    private $status;
    private $catID;

    public function __construct($productID, $productName, $price, $amount, $image, $description, $status, $catID)
    {
        $this->productID = $productID;
        $this->productName = $productName;
        $this->price = $price;
        $this->amount = $amount;
        $this->image = $image;
        $this->description = $description;
        $this->status = $status;
        $this->catID = $catID;
    }

    public function getProductID()
    {
        return $this->productID;
    }

    public function setProductID($productID)
    {
        $this->productID = $productID;

        return $this;
    }

    public function getproductName()
    {
        return $this->productName;
    }

    public function setproductName($productName)
    {
        $this->productName = $productName;

        return $this;
    }
    public function getprice()
    {
        return $this->price;
    }

    public function setprice($price)
    {
        $this->price = $price;

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

    public function getimage()
    {
        return $this->image;
    }

    public function setimage($image)
    {
        $this->image = $image;

        return $this;
    }

    public function getdescription()
    {
        return $this->description;
    }

    public function setdescription($description)
    {
        $this->description = $description;

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

    public function getcatID()
    {
        return $this->catID;
    }

    public function setcatID($catID)
    {
        $this->catID = $catID;
        return $this;
    }

    public function insertProduct(){
        $dbCon = new MySQL();

        $query = "INSERT INTO webthaylam.product (productName, price, amount, image, description, status, catID) VALUES (:productName, :price, :amount, :image, :description, :status, :catID)";
        $param = array(":productName"=>$this -> getproductName(),":price"=>$this -> getprice(),":amount"=>$this -> getamount(),":image"=>$this -> getimage(),":description"=>$this -> getdescription(),":status"=>$this -> getstatus(),":catID"=>$this -> getcatID());

        $dbCon->insertUser($query,$param);
        $dbCon->disconnectDB();
    }

    public function updateProduct(){
        $dbCon = new MySQL();

        $query = "UPDATE webthaylam.product set productName=:productName, price=:price, amount=:amount, image=:image, description=:description, status=:status, catID=:catID  where productID=:productID";
        $param = array(":productName" => $this->getproductName(), ":price" => $this->getprice(), ":amount" => $this->getamount(), ":image" => $this->getimage(), ":description" => $this->getdescription(), ":status" => $this->getstatus(), ":catID" => $this->getcatID() , ":productID" => $this->getProductID());
        
        $dbCon->updateData($query,$param);
        $dbCon->disconnectDB();
    }

    public function getProduct()
    {
        $dbCon = new MySQL();

        $query = "SELECT * FROM webthaylam.product where productID=:productID";
        $param = array(":productID" => $this->getProductID());

        $product = $dbCon->getData($query,$param);
        $dbCon->disconnectDB();

        return  $product[0];
    }

    public function getListProduct(){
        $dbCon = new MySQL();

        $query = "SELECT * FROM webthaylam.product ";

        $listProduct = $dbCon->getAllData($query);
        $dbCon->disconnectDB();

        return  $listProduct;
    }
    
    public function deleteProduct(){
        $dbCon = new MySQL();

        $query = "DELETE FROM webthaylam.product where productID=:productID";
        $param = array(":productID" => $this->getProductID());

        $dbCon->deleteData($query,$param);
        $dbCon->disconnectDB();
    }

}