<?php

namespace App\classes;
require_once "vendor/autoload.php";

$per = 40;

if( $per >= 80 and $per <= 100){
    echo "You are in Merit";
}elseif ( $per >= 60 and $per < 80 ){
    echo "You are in 1st Division";
}elseif  ($per >= 45 and $per < 60 ){
    echo "You are in 2nd Division";
}elseif ($per >= 33 and $per < 45 ){
    echo "You are in Pass";
}elseif ( $per < 33 ){
    echo "you are Fail";
}else{
    echo "Please Enter Vaild Percentage";
}


