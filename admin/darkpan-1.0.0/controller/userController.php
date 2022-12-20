<?php
session_start();
include_once '../utils/DataValidation.php';
include_once '../model/userModel.php';
include_once './BaseController.php';

class UserController
{
    public function __construct($user_action)
    {
        switch ($user_action) {
            case "user_signin":
                $txt_signin_name = $_POST["txt_signin_name"];
                $txt_signin_pass = md5($_POST["txt_signin_pass"]);

                $user = new userModel("", "", $txt_signin_name, $txt_signin_pass, "", "", "", "", "");
                if ($user->getEmail() == $txt_signin_name && $user->getPassword() == $txt_signin_pass) {
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
            case "user_update":
                break;
            case "user_delete":
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
    public function showListUser()
    {
        $user = new userModel("", "", "", "", "", "", "", "", 0);
        $data = $this->getListUser($user);
        include_once '../view/user_list.php';
    }
}

$user_action = "";

if (count($_POST) > 0) {
    $user_action = $_POST["user_action"];
} else if (count($_GET) > 0) {
    $user_action = $_GET["action"];
}
$userController = new UserController($user_action);
