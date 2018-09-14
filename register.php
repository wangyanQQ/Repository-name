<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>register.php</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/bootstrapvalidator/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="./dist/css/mincss/register.min.css">
</head>

<body>
  <!-- 主导航 -->
  <?php
    include_once("./topnav.php");
    ?>
  <!-- 子导航 -->
  <nav class="navbar navbar-default ">
    <div class="container">
 
      <div class="navbar-header childnav">
     
        <a class="navbar-brand clearfix" href="#">
          <img class="pull-left" src="./images/logo.png" alt="logo图标" />
          <p class="pull-left">用户注册</p>
        </a>
      </div>  
     
    </div>  
  </nav>

  <!-- 主体 -->
  <div class="container main">
    <div class="panel panel-default">
      <div class="panel-heading">用户注册</div>
      <div class="panel-body">
        <form class="form-horizontal myform center-block" id="defaultForm">
        <p>请填写注册信息，点击“提交注册”即可完成注册！</p>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">用户名</label>
            <div class="col-sm-5">
              <input type="text" name="username" class="form-control"  placeholder="请输入用户名">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">密码</label>
            <div class="col-sm-5">
              <input type="password" name="password"  id="password"class="form-control"  placeholder="请输入密码">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">确认密码</label>
            <div class="col-sm-5">
              <input type="password" name="confirmPwd" class="form-control"  placeholder="请再次输入密码">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">email</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="email" placeholder="请输入email">
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3"  class="col-sm-4 control-label">手机号码</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="Telephone" placeholder="请输入手机号码">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-5">
              <button type="submit" class="btn btn-sm btn-success">立即注册</button>
             
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <?php
  include_once("./footer.php");
  ?>
  <script src='./lib/jquery/jquery.min.js'></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="./lib/bootstrapvalidator/js/bootstrapValidator.min.js"></script>
  <script src="./dist/js/index.min.js"></script>
  <script src='./dist/js/register.min.js'></script>
 
</body>

</html>