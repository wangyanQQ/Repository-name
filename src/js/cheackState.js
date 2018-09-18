$.get("../../api/cheackState.php",function(data){
    // 接收到的是json字符串，需转换为对象
    data=JSON.parse(data)
    //  console.log(data);
   if(!data.isSuccess){
       alert(data.msg);
       location.href="../../login.php";
   }  /**/
})