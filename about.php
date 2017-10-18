<?php
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=11;IE=9;IE=8;IE=7"/>
    <title>北京高峰宏道投资有限公司</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/common2.css"/>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.SuperSlide.2.1.js"></script>
    <script src="js/base.js"></script>
    <script src="js/common.js"></script>
    <script src="js/form.js"></script>
    <script src="js/blockui.js"></script>
    <script src="js/base/context.js"></script>
</head>
<body style="background:transparent">

<div id="contain" style=" background:transparent;margin:0px auto;padding:0px">

    <div id="top" style="height: 450px; background: none;">
        <div style="margin:0 auto;position:relative;width:1002px;">
            <div id="pdv_17276" class="pdv_class"
                 style="width:1002px;height:450px;top:0px;left:0px; z-index:3">
                <div id="spdv_17276" class="pdv_top" style="overflow:hidden;width:100%;height:100%">
                </div>
            </div>
        </div>

        <!-- 二级下拉菜单16 -->

        <div id="pdv_17274" class="pdv_class" style="width:100%; height:101px;top:0px;left:0px;  z-index:4">
            <div id="spdv_17274" class="pdv_top" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 101px;">
                    <div class="header">
                        <div class="wrap clearfix">
                            <h1 class="logo"><a href="#" title="">
                                <img src="images/logo.png"/></a></h1>
                            <div class="nav">
                                <ul class="clearfix" id="menus">
                                    <?php
                                    require 'mysql.php';
                                    //查询数据表中的数据
                                    $sql = $mysqli->query("select * from menu_info where is_deleted=0 and is_parent=0 order by order_index asc");
                                    $datarow = mysqli_num_rows($sql); //长度
                                    //循环遍历出数据表中的数据
                                    for($i=0;$i<$datarow;$i++){
                                        $sql_arr = mysqli_fetch_assoc($sql);
                                        $ename = $sql_arr['menu_ename'];
                                        $cname = $sql_arr['menu_cname'];
                                        echo "<li ><a style='cursor: pointer' id='$ename'>$cname</a></li>";
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content"
         style="width: 1002px; height: 670px; background: url(./images/c.jpg) 50% 0% repeat-x transparent; margin: 0px auto;">


        <!-- 网页内容详情 -->

        <div id="pdv_16239" class="pdv_class" title="" style="width:1002px;height:403px;top:90px;left:0px; z-index:1">
            <div id="spdv_16239" class="pdv_content" style="overflow:visible;width:100%;">
                <div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
                    <div style="padding:0px">
                        <link href="css/pagecontent.css" rel="stylesheet" type="text/css"/>
                        <div id="pagecontent" class="page_content">
                            <div class="tittle" style="margin-bottom:20px;height:42px;font-size:24px;color:#CABA7C;" id="sub-title">
                            </div>
                            <div style="text-align:center;">
                            <img style="line-height: 1.5; display: inline;" alt=""
                                  id="sub-image"/><span style="line-height:1.5;"></span>
                            </div>
                                <p id="sub-content" style="height: 224px;width: 940px;overflow: auto">
                        </p>
                        </div>
                        <script>
                            $(window).load(function () {
                                $("#pagecontent").find("img").hide();
                                var w = $("#pagecontent")[0].offsetWidth;
                                $("#pagecontent").find("img").each(function () {
                                    $(this).show();
                                    if (this.offsetWidth > w) {
                                        this.style.width = w + "px";
                                    }
                                });

                            });
                        </script>
                    </div>
                </div>

            </div>
        </div>

        <!-- 网页标题(菜单) -->

        <div id="pdv_16237" class="pdv_class" style="width:1002px;height:58px;top:0px;left:0px; z-index:2">
            <div id="spdv_16237" class="pdv_content" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 58px;">
                    <link href="css/pagetitlemenu_dolphin.css" rel="stylesheet" type="text/css"/>
                    <div class="sidebar">
                        <div class="wrap">
                            <ul id="child-menu">
                                <?php
                                    require 'mysql.php';
                                    $sql = $mysqli->query("select * from menu_info where is_deleted=0 and menu_ename='about'");
                                    $sql_arr = mysqli_fetch_assoc($sql);
                                    $id = $sql_arr['id'];
                                    $sql2 = $mysqli->query("select * from menu_info where parent_id=$id and is_deleted=0 order by order_index asc");
                                    $datarow = mysqli_num_rows($sql2); //长度
                                    //循环遍历出数据表中的数据
                                    for($i=0;$i<$datarow;$i++){
                                        $sql_arr2 = mysqli_fetch_assoc($sql2);
                                        $ename = $sql_arr2['menu_ename'];
                                        $cname = $sql_arr2['menu_cname'];
                                        echo "<li class='dq' id='$ename'><a style='cursor: pointer'>$cname</a></li>";
                                    }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 自定义模版 -->

        <div id="pdv_17277" class="pdv_class" title=""
             style="width: 1002px; height: 167px; top: 503px; left: 0px; z-index: 6;">
            <div id="spdv_17277" class="pdv_content" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 167px;">
                    <div class="contant">
                        <div class="m-tel">
                            <img src="images/img-2.jpg" alt=""/>
                            <h2>客服热线</h2>
                            <p id="hotline">010-64015132,010-84045828</p>
                        </div>
                        <div class="m-wx">
                            <img src="images/weixin.jpg" width="90" height="90" id="weixin"/>
                            <div class="text">
                                <p>扫一扫二维码</p>
                                <p>关注我们微信</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="bottom" style="width: 1002px; height: 34px; background: none 0% 0% repeat rgb(0, 0, 0);">


        <!-- 底部信息编辑区 -->

        <div id="pdv_17273" class="pdv_class" style="width:1002px;height:29px;top:5px;left:0px; z-index:5">
            <div id="spdv_17273" class="pdv_bottom" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 29px;">
                    <div style="width:100%;text-align:center;font:12px/20px Arial, Helvetica, sans-serif">
                        <p align="center">
                            <span id="copyright" style="color:#FFFFFF;line-height:2;">CopyRight © 2014-2018 All Rights Reserved &nbsp;&nbsp;</span><span id="foot"
                                style="color:#FFFFFF;line-height:2;"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="bodyex">

</div>
<div id="topex" style="display: none; width: 100%; height: 450px; background: none; top: 0px;">
</div>
<div id="contentex"
     style="width: 100%; height: 670px; background: url(./images/c.jpg) 50% 0% repeat-x transparent; top: 450px;">
</div>
<div id="bottomex" style="width: 100%; height: 34px; background: none 0% 0% repeat rgb(0, 0, 0); top: 1120px;">
</div>
<div id="advsex"
     style="background: url(./images/1505220231.png) center top no-repeat; height: 450px; top: 0px; display: block;"></div>
<div id="advsex1"></div>
<div id="advsex2"></div>
<div id="advsex3"></div>
<div id="advsex4"></div>
<div id="advsex5"></div>
<div id="advsex6"></div>

<script type="text/javascript">

    $(window).load(function () {
        var name = 'about';
        $("#"+name).attr('style','cursor:pointer;color:#CABA7C');
        $("#"+name).siblings().attr('style','cursor:pointer;');
        var subName = getFirstMenu(name);
        var image = getImageByEname(subName.menu_ename);
        $("#sub-image").attr('src','./images/'+image.image_uri);
        $("#sub-title").html(subName.menu_cname);
        $("#sub-content").html(getTextByMenuEname(subName.menu_ename).text);
        $("#hotline").html(getCommonByEname("hotline"));
        $("#foot").html(getCommonByEname("foot"));
        $("#copyright").html(getCommonByEname("copyright"));
        $("#weixin").attr('src','./images/'+getCommonByEname("weixin"));
    });
    <!--主标题-->
    $("#menus").find('li').find('a').click(function () {
        var i = $(this).attr('id');
        window.location.href=getContextPath()+"/"+i+".php";
    });
    <!--子标题-->
    $("#child-menu").find('li').find('a').click(function () {
        var title = $(this).text();
        var id = $(this).parent().attr("id");
        $("#sub-title").html(title);
        $("#sub-image").attr('src','./images/'+getImageByEname(id).image_uri);
        $("#sub-content").html(getTextByMenuEname(id).text);
    });
</script>
</body>
</html>