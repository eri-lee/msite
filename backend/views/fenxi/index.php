<?php
/* @var $this yii\web\View */

use backend\assets\AppAsset;
$this->title = 'My Yii Application';
?>
<div class="site-index">
<body>
	<div id="main" style="width:600px;height:400px;">
	</div>
</body>
    <input type="button" id="clid"  value="click">
</div>
  <script type="text/javascript">
        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('main'),'dark');

        // 指定图表的配置项和数据
        var option = {
            title: {
                text: '分析分析'
            },
            tooltip: {},
            legend: {
                data:['销量']
            },
            xAxis: {
                data: ["衬衫","羊毛衫","雪纺衫","裤子","高跟鞋","袜子"]
            },
            yAxis: {},
            series: [{
                name: '销量',
                type: 'bar',
                data: [5, 20, 36, 10, 10, 20]
            }]
        };

        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
