<?php
session_start();
include_once '../utils/validation_data.php';
include_once '../model/userModel.php';
$user_01 = new userModel("", "vuphan", "vuphan@gmail.com", "091069", "", "", "", "");
$arrUser = array();
array_push($arrUser, $user_01);
$user_action = $_POST["user_action"];

switch ($user_action) {
    case "user_signin":
        $txt_signin_name = $_POST["txt_signin_name"];
        $txt_signin_pass = $_POST["txt_signin_pass"];

        if (checkEmailValid($txt_signin_name)) {
            $user = checkUserValid($txt_signin_name, $txt_signin_pass, $arrUser);
            if ($user["isValid"]) {
                $_SESSION["email"] = $user["email"];
                header("Location: ../view/index.php");
                break;
            } else {
                header("Location: signin.php");
                break;
            }
        } else {
            header("Location: signin.php");
            break;
        }

    case "user_create":
        break;
}
function checkEmailUser($email, $arrUser = array())
{
    $userDetail = null;
    foreach ($arrUser as $user) {
        if ($user->getEmail == $email) {
            $userDetail = $user;
        }
    }
    return $userDetail;
}

function checkUserValid($email, $pass, $arrUser = array())
{
    $userDetail = null;
    foreach ($arrUser as $user) {
        if ($user -> getEmail == $email && $user -> getPassword == $pass) {
            $userDetail = $user;
        }
    }
    return $userDetail;
}
