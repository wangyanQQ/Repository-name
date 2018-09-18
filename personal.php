<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 ,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>personal.php</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/mincss/personal.min.css">

</head>

<body>
<script src='./lib/jquery/jquery.min.js'></script>
<script src="./dist/js/cheackState.min.js"></script>
  <?php
include_once('./topnav.php');
?>
  <?php
include_once('./header.php');
?>

  <!-- 内容 -->

  <div class="container Personal-Center" id="personal">
    <div class="row">
      <!-- 主体侧边栏 -->
      <div class="col-xs-6 col-sm-3  Sidebar">

       <?php
       include_once('./sidebar.php');
       ?>

      </div>
      <!-- 右侧主体 -->
      <div class="col-xs-12 col-sm-9 Right-body">
      <button type="button" class="btn btn-primary btn-xs" id="btn">隐藏</button>
        <div class="panel panel-default">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-12 col-sm-4  col-md-2">
                <img class="img-thumbnail img-responsive" src="./images/head_icon.jpg" alt="源码时代logo">
              </div>
              <div class="col-xs-12 col-sm-8 col-md-10 text-content">
                <p>昵 称：源代码教育</p>
                <p>用户名：小强</p>
                <p>最后登录时间：2016-10-25 15:30:10</p>
              </div>
            </div>
          </div>
          <div class="panel-body">
            <div class="row top">
              <div class="col-xs-12 col-sm-4">总金额：
                <span>10000元</span>
              </div>
              <div class="col-xs-12 col-sm-4">可用金额：
                <span>8000元</span>
              </div>
              <div class="col-xs-12 col-sm-4">冻结金额：
                <span>2000元</span>
              </div>
            </div>
            <div class="row  main-content">
              <div class="col-xs-6 col-sm-6">
                 <button type="button" class="btn btn-primary">账户充值</button>
              </div>
              <div class="col-xs-6 col-sm-6">
                 <button type="button" class="btn btn-danger">账户提现</button>
              </div>
            </div>
            <div class="row bottom">
              <div class="col-xs-12 col-sm-6 col-md-3">                
                <p>实名认证</p>
                <p>未认证<a href="./realAuth.php">未认证，马上认证</a></p>
                <p>实名认证之后才能在平台投资</p>  
              </div>             
                             
              <div class="col-xs-12 col-sm-6 col-md-3"> 
                <p>手机认证</p>
                <p>已认证 <a href="#">查看</a></p> 
                <p>可以收到系统操作信息,并增加使用安全性  </p>                
              </div>
           
              <div class="col-xs-12 col-sm-6 col-md-3">                
                <p>邮箱认证</p>
                <p>已认证 <a href="#">查看</a></p> 
                <p>您可以设置邮箱来接收重要信息</p>                
              </div>
             
              <div class="col-xs-12 col-sm-6 col-md-3">                
                <p>VIP会员</p>
                <p>普通用户<a href="#">查看</a></p> 
                <p>VIP会员，让你更快捷的投资</p>                
              </div>
           
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <?php
include_once('./footer.php');
?>
 
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src='./dist/js/index.min.js'></script>
  <script src='./dist/js/personal.min.js'></script>

</body>

</html>