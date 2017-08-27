<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
        <head>
                <meta charset="UTF-8">
                <title>自行车/电动车全自动地下停车库系统</title>
                <link rel="stylesheet" type="text/css" href="/project2/Public/zui.min.css" media="all">
                <link rel="stylesheet" type="text/css" href="/project2/Public/zui-theme.min.css" media="all">
                <script type="text/javascript" src="/project2/Public/jquery.min.js"></script>
                <script type="text/javascript" src="/project2/Public/zui.min.js"></script>
                         
        </head>
        <body>
                
                        <nav class="navbar navbar-inverse" role="navigation">
                        <div class="container">
                                <!-- 导航头部 -->
                                <div class="navbar-header">
                                <!-- 品牌名称或logo -->
                                        <a class="navbar-brand" href="<?php echo U('Home/Index/index');?>">自行车/电动车全自动地下停车库系统</a>
                                </div>
                                <div class="collapse navbar-collapse navbar-collapse-example">
                                        <ul class="nav navbar-nav">
                                                <li id="li1"><a href="<?php echo U('Home/Index/thelast');?>">剩余车位</a></li>
                                                <li id="li2"><a href="<?php echo U('Home/Index/record');?>">卡号查询</a></li>
                                                <?php if($_SESSION['name']== admin): ?><li id="li3"><a href="<?php echo U('Home/Index/user');?>">用户管理</a></li><?php endif; ?>
                                                <!--<li><a class="activenow" href="<?php echo U('Home/Index/user');?>">编辑用户</a></li>-->
                                                <!--<li><a href="<?php echo U('Home/Index/timer');?>">测试时钟</a></li>-->
                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                                <li><a href="<?php echo U('Home/Index/timer');?>"><?php echo (session('name')); ?></a></li>
                                                <li><a href="<?php echo U('Home/Index/index');?>">退出登录</a></li>
                                                <!--<li style="float: right;"><a><?php echo ($username); ?></a></li>-->
                                        </ul>
                                        <!-- 导航中的表单 -->
                                        <!--<form class="navbar-form navbar-left" role="search">
                                        <div class="form-group">
                                                <input type="text" class="form-control" placeholder="搜索">
                                        </div>
                                        <button type="submit" class="btn btn-default">搜索</button>
                                        </form>-->
                                
                                </div>  
                                
                        </div>  
                        </nav>
                
                
    <div class="container">
        <div class="panel" style="margin-top: 5px;">
            <div class="panel-heading" style="font-size: 16px;margin-bottom: 20px;">
                      卡号查询                                             
            </div>
            <div class="panel-body"  id="panelbody">
                <div class="input-group" style="width: 50%;">
                    <input type="text" class="form-control" id="carnum">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" onclick="searchport()">搜索</button>
                    </span>
                </div>
                <div id="answer" style="display: none;margin-top: 10px;">
                	
                </div>
            </div>
        </div>
    </div>

                
    <script>
        
           
        function searchport(){
            $("#answer").hide();
            
            var carnum;
            carnum = $("#carnum").val();
            //alert(carnum);     
            $.ajax({
                type : "POST",
                url:"<?php echo U('Index/getdata');?>",
                data : {carnum:carnum},
                success: function(data){
                    if (data.status == 'false') {
                        alert("您输入的车牌号不存在，请重新输入。");
                    } else {
                        //alert(data.pid);
                        $("#answer").show();
                        $("#answer").html("您的车位于" + data.pid + "号车位。");
                    }
                }
            });
        }
    </script>

        </body>
</html>