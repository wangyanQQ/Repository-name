$(function(){
$("#btn").on("click",function(){
    $("#personal").toggleClass("active");
    if($("#personal").hasClass("active")){
        $(this).text("显示")
    }else{
        $(this).text("隐藏")
    }
    });
    // 触屏事件
    var x1;
    $(window).on("touchstart",function(e){   
        x1=e.originalEvent.changedTouches[0].clientX;
        // console.log("起始x坐标:",x1);
    });
    $(window).on("touchend",function(e){   
    var x2=e.originalEvent.changedTouches[0].clientX;
        // console.log("终点x坐标:",x2);
        var dx=x2-x1;
        // console.log(dx)
        // 判断有效的距离
        if(Math.abs(dx)>=100){
        // Math.abs() 取数字的绝对值
        // $("#btn").trigger("click"); 
        $("#btn").click();
            // 语法: $(选择器).trigger(处理类型)  相当于按钮的点击事件
        }
    })
})