<?php
session_start();
include_once '../model/productModel.php';
include_once './BaseController.php';

class OrderController extends BaseController
{
    public function __construct($order_action)
    {
        switch ($order_action) {
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
    
    public function showListProduct()
    {
        $product = new productModel(0,"", "", "", "", "", "", "");
        $data["product"] = $this->getListProduct($product);
        $this -> view("shop",$data);
    }
}

$order_action = "";

if (count($_POST) > 0) {
    $order_action = $_POST["order_action"];
} else if (count($_GET) > 0) {
    $order_action = $_GET["action"];
}
$orderController = new ProductController($order_action);
