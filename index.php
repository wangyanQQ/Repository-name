

  
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>index.php</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/mincss/index.min.css">
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

  <!-- 轮播 -->
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- 左右图标 -->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    </ol>
    <!-- 内容图片 -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="./images/banner01.jpg" alt="banner1">
        <div class="carousel-caption">
        </div>
      </div>
      <div class="item">
        <img src="./images/banner02.jpg" alt="banner2">
        <div class="carousel-caption">
        </div>
      </div>
    </div>

    <!-- 圆点 -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- 特点 -->
  <div class='container'>
    <div class="row ">
      <div class='col-xs-12 col-sm-4'>
        <h3>投资理财</h3>
        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
      </div>
      <div class='col-xs-12 col-sm-4'>
        <h3>投资理财</h3>
        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>

      </div>
      <div class='col-xs-12 col-sm-4'>
        <h3>投资理财</h3>
        <p>稳定投资、高收益、短期限，易融贷先行赔付，保障投资人权益。</p>
      </div>
    </div>
  </div>
  <!-- 内容 -->
  <div class="container">
    <div class="panel panel-default">
      <!-- 标题 -->
      <div class="panel-heading clearfix">
        <h3 class="pull-left">进行中借款</h3>
        <a href="#" class="pull-right">进入投资列表</a>
      </div>
      <!-- 表格 -->
      <table class="table table-hover">
        <thead>
          <tr>
            <th>借款人</th>
            <th class="Thidden">借款标题</th>
            <th>年利率</th>
            <th>金额</th>
            <th class="Thidden">还款方式</th>
            <th>进度</th>
            <th>操作</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">张三</th>
            <td class="Thidden">给我2000度过难关</td>
            <td>10.00%</td>
            <td>2,000.00</td>
            <td class="Thidden">按月分期还款 </td>
            <td> 78.00%</td>
            <td>
              <button type="button" class="btn btn-danger  btn-sm">查看</button>
            </td>
          </tr>
          <tr>
            <th scope="row">张三</th>
            <td class="Thidden">给我2000度过难关</td>
            <td>10.00%</td>
            <td>2,000.00</td>
            <td class="Thidden">按月分期还款 </td>
            <td> 78.00%</td>
            <td>
              <button type="button" class="btn btn-danger  btn-sm">查看</button>
            </td>
          </tr>
          <tr>
            <th scope="row">张三</th>
            <td class="Thidden">给我2000度过难关</td>
            <td>10.00%</td>
            <td>2,000.00</td>
            <td class="Thidden">按月分期还款 </td>
            <td> 78.00%</td>
            <td>
              <button type="button" class="btn btn-danger  btn-sm">查看</button>
            </td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
  <!-- 最新资讯 -->
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h3 class="pull-left">企业最新资讯</h3>
            <a href="#" class="pull-right">更多资讯</a>
          </div>
          <ul>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h3 class="pull-left">用户反馈</h3>
            <a href="#" class="pull-right">更多资讯</a>
          </div>
          <ul>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h3 class="pull-left">理财经验</h3>
            <a href="#" class="pull-right">更多资讯</a>
          </div>
          <ul>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>

          </ul>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="panel panel-default">
          <div class="panel-heading clearfix">
            <h3 class="pull-left">活动分享</h3>
            <a href="#" class="pull-right">更多资讯</a>
          </div>
          <ul>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>
            <li>
              <a href="">央视力挺互联网金融
                <span class="pull-right">发表日期：2015-03-23</span>
              </a>
            </li>

          </ul>
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