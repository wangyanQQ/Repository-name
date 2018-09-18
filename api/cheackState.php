<?php
session_start();
if(isset($_SESSION["username"])){
    $username=$_SESSION["username"];
    $rsArray=["isSuccess"=>true,"msg"=>"用户登录成功!","uaername"=>$username];
    //json_encode() 把关联数组转换为json格式
    echo json_encode($rsArray);
}else{
    $rsArray=["isSuccess"=>false,"msg"=>"用户登录失败!"];
    //json_encode() 把关联数组转换为json格式
    echo json_encode($rsArray);
}

?>