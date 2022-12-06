<?php

define("TY_GIA", 24000);
    function chuyenUSDtoVND($price){
        return number_format($price * TY_GIA,0,",",".")  . " VND";
    }


?>