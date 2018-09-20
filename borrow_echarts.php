<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>borrow.php</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/mincss/borrow_echarts.min.css">

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
  <div class="container borrowEcharts-Center">
    <div class="row">
      <!-- 主体侧边栏 -->
      <div class="col-xs-6 col-sm-3  Sidebar">
        <?php
       include_once('./sidebar.php');
       ?>

      </div>
      
      <!-- 右侧主体 -->
      <div class="col-xs-12 col-sm-9 borrow-list ">
         <div class="panel panel-default">          
            <div class="panel-heading">
            图形报表
            </div>
              <div class="panel-body">
              <!-- 为ECharts准备一个具备大小（宽高）的Dom -->
              <div id="main" style="height:400px;width:100%;"></div>
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
   <!-- ECharts单文件引入 -->
   <script src="./lib/echarts/echarts-all.js"></script>
  <script src='./dist/js/index.min.js'></script>
  <!-- <script src="./dist/js/borrow_list.min.js"></script> -->
  <script src="./dist/js/borrow_echarts.min.js"></script>
</body>

</html>