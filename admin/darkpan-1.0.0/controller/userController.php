<?php
session_start();
include_once '../utils/DataValidation.php';
include_once '../utils/MySQL.php';
include_once '../model/userModel.php';
$user_01 = new userModel("1", "vuphan", "vuphan@gmail.com", "091069", "0903833633", "HCM", "Male", "admin");
$arrUser = array();
array_push($arrUser, $user_01);
$user_action = $_POST["user_action"];
$validData = new DataValidation();

switch ($user_action) {
    case "user_signin":
        $txt_signin_name = $_POST["txt_signin_name"];
        $txt_signin_pass = $_POST["txt_signin_pass"];

        if ($validData->checkEmailValid($txt_signin_name)) {
            $user = checkUserValid($txt_signin_name, $txt_signin_pass, $arrUser);
            if (!is_null($user)) {
                $_SESSION["email"] = $user->getEmail();
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
        $switch_state =$_POST["switch_state"];
        $txt_name = $_POST["txt_name"];
        $txt_email = $_POST["txt_email"];
        $txt_pass = md5($_POST["txt_pass"]);
        $txt_sdt = $_POST["txt_sdt"];
        $txt_address = $_POST["txt_address"];
        $radio_sex = $_POST["radio_sex"];
        $radio_role = $_POST["radio_role"];
        $userDetail = checkEmailUser($txt_email, $arrUser);
        // if(!(is_null($userDetail))){
        //     header("Location: ../view/user_detail.php?id=".$userDetail -> getEmail());
        // } else {
        $query = "INSERT INTO user (name, email, password, phone, address, gender, role, state) VALUES (:name, :email, :password, :phone, :address, :gender, :role, :state)";
        $param = array(":name"=>$txt_name,":email"=>$txt_email,":password"=>$txt_email,":phone"=>$txt_pass,":address"=>$txt_address,":gender"=>$radio_sex,"role"=>$radio_role,":state"=>$switch_state);
        
        $user_02 = new userModel($switch_state, $txt_name, $txt_email, $txt_pass, $txt_sdt, $txt_address, $radio_sex, $radio_role);
        array_push($arrUser, $user_02);
        
        $dbCon = new MySQL();
        $dbCon->insertUser($query,$param);
        $dbCon->disconnectDB();
        // }
        break;
}
function checkEmailUser($email, $arrUser = array())
{
    $userDetail = null;
    foreach ($arrUser as $user) {
        if ($user->getEmail() == $email) {
            $userDetail = $user;
        }
    }
    return $userDetail;
}

function checkUserValid($email, $pass, $arrUser = array())
{
    $userDetail = null;
    foreach ($arrUser as $user) {
        if ($user->getEmail() == $email && $user->getPassword() == $pass) {
            $userDetail = $user;
        }
    }
    return $userDetail;
}
