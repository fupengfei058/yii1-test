<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<table class="table">
    <thead>
    <tr>
        <th colspan="3"><h1><p class="text-center">这是一个投票活动</p></h1></th>
    </tr>
    </thead>
    <tbody>
    <?php for($i = 0;$i < 10;$i++){?>
    <tr>
        <th style="padding-left: 200px"><img width="300px" height="300px" src="http://c.hiphotos.baidu.com/zhidao/pic/item/77094b36acaf2eddb990270a8f1001e9380193eb.jpg"></th>
        <th style="padding: 200px 100px 0 0"><h4>票数： 0</h4></th>
        <th style="padding: 200px 100px 0 0"><button type="button" class="btn btn-default btn-lg">投票</button></th>
    </tr>
    <?php }?>
    </tbody>
</table>

<script type="text/javascript">

</script>
