
// 注册页面的表单验证
$(document).ready(function () {
  $('#defaultForm').bootstrapValidator({
    // message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      username: {
        message: '用户名无效',
        validators: {
          notEmpty: {
            message: '用户名是必需的，不能是空的。'
          },
          stringLength: {
            min: 6,
            max: 12,
            message: '用户名长度必须是6~12之间'
          },
          regexp: {
            regexp: /^[a-zA-Z0-9_\.]+$/,
            message: '用户名只能由字母、数字、点和下划线组成。'
          }
        }
      },
      password: {
        validators: {
          notEmpty: {
            message: '密码是必需的，不能是空的。'
          },
          stringLength: {
            min: 6,
            max: 12,
            message: '密码长度必须是6~12之间'
          },
         /*  regexp: {
            regexp: /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/,
            message: '密码只能由字母、数字、点和下划线组成。'
          }, */
          different: {
            field: 'username',
            message: '密码不能与用户名相同'
          },
        }
      },
      // 确认密码
      confirmPwd: {
        validators: {
          notEmpty: {
            message: '确认密码不能为空'
          },
          identical: {
            field: 'password',
            message: '密码和确认是不一样的'
          },
          different: {
            field: 'username',
            message: '密码不能与用户名相同'
          }
        }
      },
      email: {
        validators: {
          notEmpty: {
            message: '电子邮件地址是必需的，不能是空的'
          },
          emailAddress: {
            message: '输入不是有效的电子邮件地址'
          }
        }
      },
      Telephone: {
        message: '手机号码无效',
        validators: {
          notEmpty: {
            message: '手机号码是必需的，不能是空的。'
          },
          regexp: {
            regexp: /^1(3|4|5|7|8)\d{9}$/,
            message: '手机号码必须由11位数字组成'
          }
        }
      },

    }
  })  
    .on('success.form.bv', function (e) {
      // Prevent form submission
      e.preventDefault();

      // Get the form instance
      var $form = $(e.target);

      // Get the BootstrapValidator instance
      var bv = $form.data('bootstrapValidator');   
    //  console.log(result);     
      // 发送ajax请求
     $.post("../../../api/userAdd.php", $form.serialize(), function (result) {
       console.log("后端发送过来的数据",result.isSuccess);
        // 根据后端传送过来的数据做出判断
       if(!result.isSuccess){
          alert(result.msg);         
        }else{
          alert(result.msg);
          location.href="./login.php";
        }   /**/
      }, 'json'); 
    });
});