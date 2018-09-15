<?php
// 接收数据
$username=$_POST["username"];
$password=md5($_POST["password"]);
$email=$_POST["email"];
$Telephone=$_POST["Telephone"];
// 连接数据库
require_once('./database.php');
// $link=mysqli_connect('localhost', 'root', 'root','p2p',3306);

// 构造sql语句
$sql="insert into userinfo(username,pwd,mobile,email) values('".$username."','".$password."', '".$Telephone."','".$email."')"; 
// echo $sql;
// 执行添加数据到数据库
$result=mysqli_query($link,$sql);

//5. 根据是否执行成功返回json结果到前端
if($result){
    $rsArray=["isSuccess"=>true,"msg"=>"用户注册成功!"];
    //json_encode() 把关联数组转换为json格式
    echo json_encode($rsArray);
}
else{
    $rsArray=["isSuccess"=>false,"msg"=>"用户注册失败!"];
    echo json_encode($rsArray);
}
?>