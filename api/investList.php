<?php
  header("Content-type:text/html;charset=utf-8");
//   连接数据库
require_once('./database.php');
// 构造总记录的查询语句
$sql="select * from borrowinfo";
// 执行sql语句
$result=mysqli_query($link,$sql);
// 获取总的记录数
$total=mysqli_num_rows($result);
// 接收分页数据
$pageIndex=$_GET["pageIndex"];
$pageSize=$_GET["pageSize"];
// 接收用户名
session_start();
$username=$_SESSION['username'];
// 构造分页的sql语句
   //limit n,m;	//跳过n条数据，限制输出m条数据
   $skipNum=$pageSize*$pageIndex; //跳过数据
   $sql.=" limit $skipNum,$pageSize";
   $result=mysqli_query($link,$sql);
//    遍历获取的结果集
$borrowData=[];
while($rs=mysqli_fetch_assoc($result)){
    array_push($borrowData,$rs);
}

// 把结果集转换为json发送给前端
$result=[
    "total"=> $total,
    "list"=> $borrowData,
    "user"=>$username
   ];
   echo json_encode($result);

?>