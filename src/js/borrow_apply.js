$(function(){
    var url = location.href;
    var urlResult = url.split("=")[1];
    $("#select").val(urlResult);


    $("#btn").on("click",function(){
        // 收集数据
      var resultData= $("#myForm").serialize();
        // 发送ajax请求
        $.post("../api/borrowAdd.php",resultData,function(result){            
            if(result.isSuccess){
                alert(result.msg);
                location.href="../../borrow_list.php";
            }else{
                alert(result.msg);
            }
        }, 'json');
    })


})