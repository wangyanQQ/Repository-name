<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>invest.php</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/mincss/invest.min.css">
</head>

<body>

  <!-- 头部 -->
  <?php
  require_once("./topnav.php")
  ?>
 
  <!-- 导航 -->
  <?php
  require_once("./header.php")
  ?>


  <!-- 模版 -->
  <div class="invest container">
  <h5>投资列表</h5>
  <div class="row invest-top">
    <div class="col-xs-12 col-sm-2 tab">
    标的状态
    </div>
    <div class="col-xs-12 col-sm-10 right">
    <span class=" btn-default active">全部</span><span class=" btn-default">招标中</span><span class=" btn-default">全款中</span>
    </div>
  </div>
  <table class="table table-hover">
      <thead>
        <tr>
          <th>借款人</th>
          <th class="item">借款标题</th>
          <th>年历率</th>
          <th>金额</th>
          <th  class="item">还款方式</th>
          <th class="item">进度</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        <tr>         
          <td>zs</td>
          <td  class="item">给我2000度过难关</td>
          <td>10.00%</td>
          <td>2.000.0</td>
          <td  class="item">按月分期还款</td>
          <td class="item">100.00%</td>
          <td><button type="button" class="btn btn-danger btn-xs">查看</button></td>          
        </tr>
        <tr>         
          <td>zs</td>
          <td class="item">给我2000度过难关</td>
          <td>10.00%</td>
          <td>2.000.0</td>
          <td class="item">按月分期还款</td>
          <td class="item">100.00%</td>
          <td><button type="button" class="btn btn-danger btn-xs">查看</button></td>          
        </tr>
        <tr>         
          <td>zs</td>
          <td  class="item">给我2000度过难关</td>
          <td>10.00%</td>
          <td>2.000.0</td>
          <td  class="item">按月分期还款</td>
          <td class="item">100.00%</td>
          <td><button type="button" class="btn btn-danger btn-xs">查看</button></td>          
        </tr>
      </tbody>
    </table>
  
  </div>

 <!-- 尾部 -->
 <?php
  require_once("./footer.php")
  ?>  
  


  <script src='./lib/jquery/jquery.min.js'></script>
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src='./dist/js/index.min.js'></script>

</body>

</html>