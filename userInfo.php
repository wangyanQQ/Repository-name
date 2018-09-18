<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>userInfo.php</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/mincss/userInfo.min.css">

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

  <div class="container userInfo-Center">
    <div class="row">
      <!-- 主体侧边栏 -->
      <div class="col-xs-12 col-sm-3  Sidebar">

        <?php
       include_once('./sidebar.php');
       ?>

      </div>
      <!-- 右侧主体 -->
      <div class="col-xs-12 col-sm-9 userInfo-body">
        <div class="panel panel-default">
          <div class="panel-heading">
            个人资料
          </div>
          <div class="panel-body">
            <form class="form-horizontal myform">
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                <div class="col-sm-9">
                <p>xiaoq</p>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">真实姓名</label>
                <div class="col-sm-9">
                 <p>小强</p>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">证件号码</label>
                <div class="col-sm-9">
                  <p>512************4646</p>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">手机号码</label>
                <div class="col-sm-9">
                  <input type="text" name="tell" class="form-control"  placeholder="请输入你的手机号码">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">联系电话</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control"  placeholder="请输入你的联系电话">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">个人学历</label>
                <div class="col-sm-9">
                <select class="form-control" name="edu" style="width: 180px">
                    <option value="1">初中</option>
                    <option value="2">中专/高中</option>
                    <option value="3">专科</option>
                    <option value="4">本科</option>
                    <option value="5">硕士研究生</option>
                    <option value="6">博士研究生</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">个人收入</label>
                <div class="col-sm-9">
                <select class="form-control" name="salaryLevel" style="width: 180px">
                      <option value="1">1000元以下</option>
                      <option value="2">1000元-1999元</option>
                      <option value="3">2000元-2999元</option>
                      <option value="4">3000-4999</option>
                      <option value="5">5000-8999</option>
                      <option value="6">10000以上</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">联系地址</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="address"  placeholder="请输入你的联系地址">
                </div>
              </div>          

              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-primary">保存数据</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
include_once('./footer.php');
?>
  <!-- <script src='./lib/jquery/jquery.min.js'></script> -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src='./dist/js/index.min.js'></script>

</body>

</html>