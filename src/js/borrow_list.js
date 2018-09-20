$(function(){

$.get("./api/borrowList.php",function(data){
    // console.log(data)
    var dataList=$("#borrowTmpl").tmpl(data);
    $("#listData").html(dataList);

},"json");


})