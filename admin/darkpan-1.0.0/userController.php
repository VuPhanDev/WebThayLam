<?php
session_start();
include_once 'utils/validation_data.php';
$user_01 = array("username" => "vuphan", "email" => "vuphan@gmail.com", "pass" => "091069");
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
                header("Location:index.php");
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
    $isUser = false;
    $userDetail;
    foreach ($arrUser as $user) {
        foreach ($user as $key => $value) {
            if ($key == "email" && $value == $email) {
                $userDetail = $user;
                $isUser = true;
            }
        }
    }
    $userDetail["isValid"] = $isUser;
    return $userDetail;
}

function checkUserValid($email, $pass, $arrUser = array())
{
    $isUser = false;
    $userDetail;
    foreach ($arrUser as $user) {
        if ($user["email"] == $email && $user["pass"] == $pass) {
            $userDetail = $user;
            $isUser = true;
        }
    }
    $userDetail["isValid"] = $isUser;
    return $userDetail;
}

