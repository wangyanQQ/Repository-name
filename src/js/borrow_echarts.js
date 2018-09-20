  // 基于准备好的dom，初始化echarts图表
  var myChart = echarts.init(document.getElementById('main'));         
  var option =  {
              title : {              
                  
                  x:'center'
              },
              tooltip : {
                  trigger: 'item',
                  formatter: "{a} <br/>{b} : {c} ({d}%)"
              },
              legend: {
                  orient : 'vertical',
                  x : 'left',
                  data:[],                
              },
              toolbox: {
                  show : true,
                  feature : {
                      mark : {show: false},
                      dataView : {show: false, readOnly: false},
                      magicType : {
                          show: false, 
                          type: ['pie', 'funnel'],
                          option: {
                              funnel: {
                                  x: '25%',
                                  width: '50%',
                                  funnelAlign: 'left',
                                  max: 1548
                              }
                          }
                      },
                      restore : {show: false},
                      saveAsImage : {show: true}
                  }
              },
              calculable : true,
              series : [
                        {
                            name:'访问来源',
                            type:'pie',
                            radius : '55%',
                            center: ['50%', '60%'],
                            data:[]
                  }
              ]
          };
  // 为echarts对象加载数据 
  myChart.setOption(option); 
//   发送ajax请求
    $.get("./api/echarts.php",function(result){
        option.legend.data=result.title;
        option.series[0].data=result.data;
        myChart.hideLoading();//关闭loading动画
        myChart.setOption(option);
    },'json');

   