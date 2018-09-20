<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>borrow.php</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/mincss/borrow_apply.min.css">

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
  <div class="container borrowApply-Center">
    <div class="row">
      <!-- 主体侧边栏 -->
      <div class="col-xs-6 col-sm-3  Sidebar">
        <?php
       include_once('./sidebar.php');
       ?>

      </div>
      <!-- 右侧主体 -->
      <div class="col-xs-12 col-sm-9 Right-body ">
        <div class="panel panel-default">
          <div class="panel-body body_top  clearfix">
            <h4>信用借款</h4>
            <p class="pull-left">授信额度:
              <span>2000</span>
            </p>
            <p class="pull-left">可借金额:
              <span>2000</span>
            </p>
            <p></p>
          </div>
        </div>
        <div class="clearfix body-center">
          <h4 class="pull-left">借款信息</h4>
          <button type="button" class=" pull-left btn btn-primary btn-sm">信用标</button>
        </div>
        <form class="form-horizontal myform" id="myForm">
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">借款类型</label>
            <div class="col-sm-8">
              <div class="input-group">
                <select class="form-control" id="select" name="borrowType">
                  <option value="t1" >信用贷</option>
                  <option value="t2">车易贷</option>
                  <option value="t3">房易贷</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">借款金额</label>
            <div class="col-sm-8">
              <div class="input-group">
                <input type="text"name="borrowAmount" class="form-control" id="exampleInputAmount" placeholder="请输入借款金额">
                <div class="input-group-addon">元</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">借款利息</label>
            <div class="col-sm-8">
              <div class="input-group">
                <input type="text" name="currentRate" class="form-control" id="exampleInputAmount" placeholder="">
                <div class="input-group-addon">%</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">借款期限</label>
            <div class="col-sm-8">
              <div class="input-group">
                <select class="form-control" name="monthes2Return">
                  <option>1</option>
                  <option>3</option>
                  <option>6</option>
                  <option>9</option>
                  <option>12</option>
                  <option>24</option>
                </select>
                <div class="input-group-addon">月</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">还款方式</label>
            <div class="col-sm-8">
              <label class="radio-inline">
                <input type="radio" name="repayment" id="inlineRadio1" value="按月分期"> 按月分期
              </label>
              <label class="radio-inline">
                <input type="radio" name="repayment" id="inlineRadio2" value="按月到期"> 按月到期
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">最小投标</label>
            <div class="col-sm-5">
              <div class="input-group">
                <input type="text" name="minAmount" class="form-control" id="exampleInputAmount" placeholder="">
                <div class="input-group-addon">元</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">最大投标</label>
            <div class="col-sm-5">
              <div class="input-group">
                <input type="text" name="maxAmount" class="form-control" id="exampleInputAmount" placeholder="">
                <div class="input-group-addon">元</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">投标奖金</label>
            <div class="col-sm-8">
              <div class="input-group">
                <input type="text"name="rewardAmount" class="form-control" id="exampleInputAmount" placeholder="0">
                <div class="input-group-addon">%</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">招标天数</label>
            <div class="col-sm-8">
              <div class="input-group">
                <select class="form-control" name="disableDays">                
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
                <div class="input-group-addon">天</div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">借款标题</label>
            <div class="col-sm-8">
              <div class="input-group">
                <input type="text" name="borrowTitle" id="inputHelpBlock" class="form-control" aria-describedby="helpBlock">
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="inputEmail3" class="col-sm-4 control-label">借款描述</label>
            <div class="col-sm-8">
              <div class="input-group">
                <textarea name="description" class="form-control" rows="2" cols="30"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-8">
              <button type="button" id="btn" class="btn btn-primary">提交申请</button>
            </div>
          </div>

          <div class="el-borrow-form-tip">
            <h4>相关费用</h4>
            <p>
              <span class="text-info">利息</span>
              <span class="el-borrow-cost" id="cost01">--</span>
            </p>
            <p>
              <span class="text-info">奖金</span>
              <span class="el-borrow-cost" id="cost02">--</span>
            </p>
            <p>
              <span class="text-info">管理费</span>
              <span class="el-borrow-cost" id="cost03">--</span>
            </p>
          </div>
        </form>


      </div>
    </div>
  </div>

  <?php
include_once('./footer.php');
?>
  <!-- <script src='./lib/jquery/jquery.min.js'></script> -->
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src='./dist/js/index.min.js'></script>
<script src="./dist/js/borrow_apply.min.js"></script>

</body>

</html>