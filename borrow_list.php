<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>borrow.php</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/mincss/brrow_list.min.css">

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
  <div class="container borrowList-Center">
    <div class="row">
      <!-- 主体侧边栏 -->
      <div class="col-xs-12 col-sm-3  Sidebar">
        <?php
       include_once('./sidebar.php');
       ?>

      </div>
      <!-- 右侧主体 -->
      <div class="col-xs-12 col-sm-9 borrow-list ">
      <div class="panel panel-default">
          <div class="panel-heading">
            借款项目
          </div>
          <div class="panel-body">
          <table class="table table-hover">
      <thead>
        <tr>
          <th>标题</th>
          <th>时间</th>
          <th>借款金额（元）</th>
          <th>期限</th>
          <th>利率</th>
          <th>状态</th>
        </tr>
      </thead>
      <tbody id="listData">
       
      </tbody>
    </table>
          </div>
        </div>
       
      </div>
    </div>
  </div>

  <?php
include_once('./footer.php');
?>
<script src="./lib/jqueryTemplate/jquery.tmpl.js"></script>  
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src='./dist/js/index.min.js'></script>
<script src="./dist/js/borrow_list.min.js"></script>
<script  id="borrowTmpl" type="text/html">
    <tr>
        <td>${borrowTitle}
        <span class="label label-primary">信</span></td>
        <td>${submitDatetime}</td>
        <td>${borrowAmount}</td>
        <td>${monthes2Return}</td>
        <td>${currentRate}</td>        
        <td><label class="text-muted">待发布</label></td>
    </tr>
</script>
</body>

</html>