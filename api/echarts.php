<?php
header("Content-type:text/html;charset=utf-8");
// 连接数据库
require_once("./database.php");
// 接收用户id
session_start();
$userid=$_SESSION["userid"];
// 构造sql语句
$sql="select * from borrowinfo where userid=$userid";
// 执行sql语句
$result=mysqli_query($link,$sql);
$data=[
  ["value"=> 0,"name"=>'房易贷'],
  ["value"=> 0,"name"=> '车易贷'],
  ["value"=> 0,"name"=> '信用贷']
 ];
// $rs=mysqli_fetch_assoc($result);
// 遍历结果集
$borrowData=[];     
while($rs=mysqli_fetch_assoc($result)){
   //语法： array_push ( 源数组 , 添加的元素1 [, 添加的元素2 ]... )   
   if($rs["borrowType"]=="t1"){
    $data[2]["value"]+=$rs["borrowAmount"];
 }
 else if($rs["borrowType"]=="t2"){
   $data[1]["value"]+=$rs["borrowAmount"];
 }
 else if($rs["borrowType"]=="t3"){
   $data[0]["value"]+=$rs["borrowAmount"];
 }
};
//返回的结果
$result=[
  "title"=>['房易贷','车易贷','信用贷'],
  "data"=>$data
];

// 把结果集转换为json发给前端
echo json_encode($result);
?>