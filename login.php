

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>login.php</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./lib/bootstrapvalidator/css/bootstrapValidator.min.css">
  <link rel="stylesheet" href="./dist/css/mincss/login.min.css">
</head>

<body>
  <!-- 主导航 -->
    <?php
    include_once("./topnav.php");
    ?>
    <!-- 子导航 -->      
    <?php
    include_once("./childnav.php");
    ?>
  <!-- 主体 -->
  <div class="container main">
    <div class="panel panel-default">
      <div class="panel-heading">用户登录</div>
      <div class="panel-body">
        <form class="form-horizontal myform" id="myForm" method="post">    
          <p>请输入用户名和密码</p>      
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label" >用户名</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" name="username"  placeholder="请输入用户名">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">密码</label>
            <div class="col-sm-5">
              <input type="password" class="form-control" name="password" placeholder="请输入密码">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-5">
              <button type="submit" class="btn btn-sm btn-success">登录</button>
              <a href="./register.php">新用户，马上注册</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
    <!-- 模态框 -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalTitle">标题</h4>
      </div>
      <div class="modal-body" id="myModalbody"> 内容     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>       
      </div>
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
  <script src='./dist/js/login.min.js'></script>

</body>

</html>