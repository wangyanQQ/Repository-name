<?php
// 接收前端发送的数据
$username=$_POST['username'];
$password=md5($_POST["password"]);
// 连接数据库
//  $link=mysqli_connect('localhost', 'root', 'root','p2p',3306);
require_once('./database.php');
// 构造sql语句
$sql="select * from userinfo where username='".$username."' and pwd= '".$password."'";
// echo $sql;
// 执行语句
$result=mysqli_query($link,$sql);
// mysqli_query会返回一个资源类型。执行成功返回结果集（结果的集合），失败返回 false;
$rs=mysqli_fetch_assoc($result); 

// 判断
 if($rs!=null){
    // 设置sisson
    session_start();
    $_SESSION["username"]=$rs["username"];
    $_SESSION["userid"]=$rs["userid"];
    $rsArray=["isSuccess"=>true,"msg"=>"用户登录成功!","username"=> $_SESSION["username"]];
    //json_encode() 把关联数组转换为json格式
    echo json_encode($rsArray);
}
else{
    $rsArray=["isSuccess"=>false,"msg"=>"用户登录失败!"];
    echo json_encode($rsArray);
} /**/
// 释放内存
mysqli_close($link);
?>