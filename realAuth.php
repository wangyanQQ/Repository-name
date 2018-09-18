<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>realAuth.php</title>
  <link rel="stylesheet" href="./lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./dist/css/mincss/realAuth.min.css">

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

  <div class="container realAuth-body">
    <div class="row">
      <!-- 主体侧边栏 -->
      <div class="col-xs-12 col-sm-3  Sidebar">

        <?php
       include_once('./sidebar.php');
       ?>

      </div>
      <!-- 右侧主体 -->
      <div class="col-xs-12 col-sm-9 ">
        <div class="panel panel-default">
          <div class="panel-heading">
            实名认证
          </div>
          <div class="panel-body">
            <form class="form-horizontal myform">
                <p>为保护您账户安全，实名认证成功之后不能修改信息，请认真填写！</p>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">用户名</label>
                <div class="col-sm-9">
                <p>小强</p>
                </div>
              </div>
             
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">姓名</label>
                <div class="col-sm-9">
                <input type="text" name="username" class="form-control"  placeholder="请输入姓名">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">性别</label>
                <div class="col-sm-9">
                <select class="form-control" name="sex" >
                    <option value="1">男</option>
                    <option value="2">女</option>                   
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">证件类型</label>
                <div class="col-sm-9">
                <select id="idType" class="form-control" name="idtype" size="1">
                    <option value="0">身份证</option>
                    <option value="1">驾驶证</option>
                    <option value="2">军官证</option>
                </select>
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">证件号码</label>
                <div class="col-sm-9">
                  <input type="text" name="IdentificationNumber" class="form-control"  placeholder="请输入证件号码">
                </div>
              </div>
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">出生日期</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="DateofBirth"  placeholder="请输入出生日期">
                </div>
              </div>         
              
              <div class="form-group">
                <label for="inputEmail3" class="col-sm-3 control-label">证件地址</label>
                <div class="col-sm-9">
                  <input type="text" class="form-control" name="DocumentAddress"  placeholder="请输入证件地址">
                </div>
              </div>          
              <div class="form-group">
                    <label class="col-sm-3  control-label" for="address">身份证照片</label>
                    <div class="col-sm-9">
                        <p class="text-help text-primary">请点击“选择图片”,选择证件的正反两面照片。</p>
                        <a href="javascript:;"  class="pull-right"id="viewExample" data-html="true" data-toggle="tooltip" data-placement="top" title="" data-template="" data-original-title="hahahahahaha">查看样板</a>


                        <div class="idCardItem pull-left">
                            <div>
                                <a href="javascript:;" id="uploa" "dbtn1"="">上传正面</a>
                            </div>
                            <img alt="" src="" class="uploadImg" id="uploadImg1">
                            <input type="hidden" value="" name="papersimg01">
                        </div>
                        <div class="idCardItem pull-left">
                            <div>
                                <a href="javascript:;" id="uploadBtn2">上传反面</a>
                            </div>
                            <img alt="" src="" class="uploadImg" id="uploadImg2">
                            <input type="hidden" value="" name="papersimg02">
                        </div>                                           
                    </div>
                </div>
              <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                  <button type="submit" class="btn btn-sm btn-primary">提交验证</button>
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
  <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
  <script src='./dist/js/index.min.js'></script>

</body>

</html>