
// 注册页面的表单验证
$(document).ready(function () {
    $('#myForm').bootstrapValidator({
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
            regexp: {
              regexp: /^(?![0-9]+$)(?![a-zA-Z]+$)[0-9A-Za-z]{6,21}$/,
              message: '密码只能由字母、数字、点和下划线组成。'
            },
            different: {
              field: 'username',
              message: '密码不能与用户名相同'
            },
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
  
        // Use Ajax to submit form data
        $.post($form.attr('action'), $form.serialize(), function (result) {
          console.log(result);
        }, 'json');
      });
  });