$(function(){
    $("#page").page({
        debug: true,
        showInfo: true,
        pageSize: 5, //定义每页的数据条数
        showJump: true,
        showPageSizes: true,
        remote: {
            url: './api/investList.php',
            success: function (data) {               
            // 渲染模板
              var htmlStr= $("#tmplTab").tmpl(data.list)
            // 把渲染后的结果更新到页面
            $("#bodyContent").html(htmlStr);            
            }
        }
    });

    $("#page").on("pageClicked", function (event, pageIndex) {
        // $("#eventLog").append('EventName = pageClicked , pageIndex = ' + pageIndex + '<br />');
    }).on('jumpClicked', function (event, pageIndex) {
        // $("#eventLog").append('EventName = jumpClicked , pageIndex = ' + pageIndex + '<br />');
    }).on('pageSizeChanged', function (event, pageSize) {
        // $("#eventLog").append('EventName = pageSizeChanged , pageSize = ' + pageSize + '<br />');
    });      
   
    })