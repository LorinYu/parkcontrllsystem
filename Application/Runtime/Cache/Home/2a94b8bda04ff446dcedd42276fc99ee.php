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
                
                                
                     
                
                
                        <!--<script>
                        $(function(){
                                $(".clickthis").each(function(){  
                                        if($(this).href == String(window.location)) {   
                                        if(this.href==window.location.href) {
                                        $(this).parent().addClass("active");
                                        alert($(this)[0].href);
                                        alert(String(window.location));
                                });  
                        });
                        </script>-->
                
        </body>
</html>