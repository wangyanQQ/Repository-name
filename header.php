

  <!-- 导航 -->
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"  aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> -->
        <a class="navbar-brand" href="#">
          <img src="./images/logo.png" alt="logo图标" />
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <!-- <div class="collapse navbar-collapse"> -->
      <ul class="nav navbar-nav" id="addclass" >
        <li class="active">
          <a href="./index.php?code=0">首页</a>
        </li>
        <li>
          <a href="./invest.php?code=1">我要投资</a>
        </li>
        <li>
          <a href="./borrow.php?code=2">我要借款</a>
        </li>
        <li>
          <a href="./personal.php?code=3">个人中心</a>
        </li>
        <li>
          <a href="#">新手指引</a>
        </li>
        <li>
          <a href="#">关于我们</a>
        </li>
      </ul>

      <!-- </div>/.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>
  <script src="./lib/jquery/jquery.min.js"></script>
  <script>
  // 获取地址
 var url=window.location.href;
//  获取地址后的参数值
var urlcode=url.split("=")[1];
$("#addclass li").eq(urlcode).addClass("active").siblings().removeClass("active");
//  console.log(urlcode);
  
  </script>