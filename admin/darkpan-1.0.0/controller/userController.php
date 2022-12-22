<?php
session_start();
include_once '../utils/DataValidation.php';
include_once '../model/userModel.php';
include_once './BaseController.php';

class UserController extends BaseController
{
    public function __construct($user_action)
    {
        switch ($user_action) {
            case "user_signin":
                $txt_signin_name = $_POST["txt_signin_name"];
                $txt_signin_pass = md5($_POST["txt_signin_pass"]);
                $user = new userModel("", "", $txt_signin_name, $txt_signin_pass, "", "", "", "", "");
                $data = $this->getUserByEmail($user);
                $userCheck = new userModel($data["state"], $data["name"],$data["email"],$data["password"],$data["phone"],$data["address"],$data["gender"],$data["role"],$data["userID"]);
                if ($this -> isUser($txt_signin_name,$txt_signin_pass,$userCheck)) {
                    $_SESSION["email"] = $user->getEmail();
                    header("Location: ../view/index.php");
                    break;
                } else {
                    header("Location: ../view/signin.php");
                    break;
                }
           
            case "user_create":
                $switch_state = $_POST["switch_state"];
                $txt_name = $_POST["txt_name"];
                $txt_email = $_POST["txt_email"];
                $txt_pass = md5($_POST["txt_pass"]);
                $txt_sdt = $_POST["txt_sdt"];
                $txt_address = $_POST["txt_address"];
                $radio_sex = $_POST["radio_sex"];
                $radio_role = $_POST["radio_role"];
                $user = new userModel($switch_state, $txt_name, $txt_email, $txt_pass, $txt_sdt, $txt_address, $radio_sex, $radio_role, 0);
                $this->insertUser($user);
                header("Location: ../controller/userController.php");   
                break;
            case "user_edit":
                $id = $_GET["id"];
                $user = new userModel("", "", "", "", "", "", "", "", $id);
                $data = $this->getUserByID($user);
                $this -> view("user_edit",$data);
                break;
            case "user_delete":
                $id = $_GET["id"];
                $user = new userModel("", "", "", "", "", "", "", "", $id);
                $data = $this->deleteUser($user);
                $this->showListUser();
                break;
            case "user_update":
                $id = $_POST["txt_id"];
                $switch_state = $_POST["switch_state"];
                $txt_name = $_POST["txt_name"];
                $txt_email = $_POST["txt_email"];
                $txt_pass = md5($_POST["txt_pass"]);
                $txt_sdt = $_POST["txt_sdt"];
                $txt_address = $_POST["txt_address"];
                $radio_sex = $_POST["radio_sex"];
                $radio_role = $_POST["radio_role"];
                $user = new userModel($switch_state, $txt_name, $txt_email, $txt_pass, $txt_sdt, $txt_address, $radio_sex, $radio_role, $id);
                $this->updateUser($user);
                header("Location: ../controller/userController.php");
                break;
            default:
                $this->showListUser();
                break;
        }
    }
    public function insertUser($user)
    {
        $user->insertUser();
    }
    public function updateUser($user)
    {
        $user->updateUser();
    }
    public function deleteUser($user)
    {
        $user->deleteUser();
    }
    public function getUserByID($user)
    {
        return $user->getUser();
    }
    public function getListUser($user)
    {
        return $user->getListUser();
    }
    public function getUserByEmail($user)
    {
        return $user->getUserByEmail();
    }
    public function isUser($email, $pass, $user){
		$isUser = false;
		if($user->getEmail() == $email && $user->getPassword() == $pass)
		{
			$isUser = true;
		}
		return $isUser;
	}
    public function showListUser()
    {
        $user = new userModel("", "", "", "", "", "", "", "", 0);
        $data["user"] = $this->getListUser($user);
        $this -> view("user_list",$data);
    }
}

$user_action = "";

if (count($_POST) > 0) {
    $user_action = $_POST["user_action"];
} else if (count($_GET) > 0) {
    $user_action = $_GET["action"];
}
$userController = new UserController($user_action);
