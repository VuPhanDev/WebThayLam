<?php
session_start();
include_once '../utils/DataValidation.php';
include_once '../model/productModel.php';
include_once './BaseController.php';

class ProductController extends BaseController
{
    public function __construct($product_action)
    {
        switch ($product_action) {
            case "product_create":
                $switch_status = $_POST["switch_status"];
                $txt_name = $_POST["txt_name"];
                $txt_price = $_POST["txt_price"];
                $txt_amount = ($_POST["txt_amount"]);
                $file_image = $_FILES["file_image"]["name"];
                $txt_description = $_POST["txt_description"];
                $txt_catID = $_POST["txt_catID"];
                $product = new productModel(0, $txt_name, $txt_price, $txt_amount, $file_image, $txt_description, $switch_status, $txt_catID);
                $this->insertProduct($product);
                header("Location: ../controller/productController.php");
                break;
            case "product_edit":
                $id = $_GET["id"];
                $product = new productModel($id, "", "", "", "", "", "", "");
                $data = $this->getProductByID($product);
                $this -> view("product_edit",$data);
                break;
            case "product_delete":
                $id = $_GET["id"];
                $product = new productModel($id, "", "", "", "", "", "", "");
                $data = $this->deleteProduct($product);
                $this->showListProduct();
                break;
            case "product_update":
                $id = $_POST["txt_id"];
                $switch_status = $_POST["switch_status"];
                $txt_name = $_POST["txt_name"];
                $txt_price = $_POST["txt_price"];
                $txt_amount = ($_POST["txt_amount"]);
                $file_image = $_FILES["file_image"]["name"];
                $txt_description = $_POST["txt_description"];
                $txt_catID = $_POST["txt_catID"];
                $product = new productModel($id, $txt_name, $txt_price, $txt_amount, $file_image, $txt_description, $switch_status, $txt_catID);
                $this->updateProduct($product);
                header("Location: ../controller/productController.php");
                break;
            default:
                $this->showListProduct();
                break;
        }
    }
    public function insertProduct($product)
    {
        $product->insertProduct();
    }
    public function updateProduct($product)
    {
        $product->updateProduct();
    }
    public function deleteProduct($product)
    {
        $product->deleteProduct();
    }
    public function getProductByID($product)
    {
        return $product->getProduct();
    }
    public function getListProduct($product)
    {
        return $product->getListProduct();
    }

    // public function isProduct($email, $pass, $user){
	// 	$isUser = false;
	// 	if($user->getEmail() == $email && $user->getPassword() == $pass)
	// 	{
	// 		$isUser = true;
	// 	}
	// 	return $isUser;
	// }
    public function showListProduct()
    {
        $product = new productModel(0,"", "", "", "", "", "", "");
        $data["product"] = $this->getListProduct($product);
        $this -> view("product_list",$data);
    }
}

$product_action = "";

if (count($_POST) > 0) {
    $product_action = $_POST["product_action"];
} else if (count($_GET) > 0) {
    $product_action = $_GET["action"];
}
$productController = new ProductController($product_action);
