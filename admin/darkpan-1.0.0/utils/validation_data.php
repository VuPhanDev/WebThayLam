<?php
function checkEmailValid($email)
{
    $pattern_email = "/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix";
    return (!preg_match($pattern_email, $email)) ? false : true;
}

function checkPassValid($pass)
{
    //Làm theo vd, thực chất là check Name
    $pattern_pass = "/^[a-zA-Z-' ]*$/";
    return (!preg_match($pattern_pass, $pass)) ? false : true;
}
