<?php
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>北京高峰宏道投资有限公司</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/common2.css"/>
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/base.js"></script>
    <script src="js/common.js"></script>
    <script src="js/form.js"></script>
    <script src="js/blockui.js"></script>
    <script src="js/base/context.js"></script>
</head>
<body style="background:transparent">
<div id="contain" style="background:url(./images/1262661247.gif) repeat-y;margin:0px auto;padding:0px">
    <div id="top" style="height: 779px; background: none;">
        <!-- 图片轮播(S1) -->
        <div id="pdv_17268" class="pdv_class" title="" style="width:100%; height:779px;top:0px;left:0px;  z-index:1">
            <div id="spdv_17268" class="pdv_top" style="overflow:hidden;width:100%;height:100%"><div class="pdv_border" style="border: 0px;">
                <div class="banner">
                    <div class="bd">
                        <ul>
                            <?php
                            require 'mysql.php';
                            //查询数据表中的数据
                             $sql = $mysqli->query("select * from image_info where menu_ename='home'");
                             $datarow = mysqli_num_rows($sql); //长度
                            //循环遍历出数据表中的数据
                            for($i=0;$i<$datarow;$i++){
                                $sql_arr = mysqli_fetch_assoc($sql);
                                $image = $sql_arr['image_uri'];
                                $ename = $sql_arr['menu_ename'];
                                $cname = $sql_arr['menu_cname'];
                                echo "<li style='background: url(./images/$image) center top no-repeat;'><a href='http://'></a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="hd">
                        <ul></ul>
                    </div>
                </div>
                <script type="text/javascript" src="js/jquery.SuperSlide.2.1.js"></script>
                <script type="text/javascript" src="js/common2.js"></script>
            </div>
            </div>
        </div>

        <!-- 二级下拉菜单16 -->

        <div id="pdv_17266" class="pdv_class" style="width:100%; height:101px;top:0px;left:0px;  z-index:2">
            <div id="spdv_17266" class="pdv_top" style="overflow:hidden;width:100%;height:100%"><div class="pdv_border" style="border: 0px; height: 101px;">
                <div class="header">
                    <div class="wrap clearfix">
                        <h1 class="logo"><a href="#" title="">
                            <img src="images/logo.png"/></a></h1>
                        <div class="nav">
                            <ul class="clearfix" id="menus">
                                <?php
                                    require 'base/mainMenu.php';
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div id="content" style="width: 1002px; height: 400px; background: none; margin: 0px auto;">

        <div id="pdv_17269" class="pdv_class" style="width:511px;height:179px;top:30px;left:0px; z-index:3">
            <div id="spdv_17269" class="pdv_content" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 179px; padding: 0px; margin: 0px;">
                    <div class="tittle"><h2>行业信息<em>/ NEWS</em></h2><a id="news-more" href="#" class="more" style="display:inline;">+ more</a></div>
                    <div style="margin:0px;padding:0px">

                        <link href="./css/newslist.css" rel="stylesheet" type="text/css"/>
                        <ul class="newslist">
                            <?php
                                require 'mysql.php';
                                $sql = $mysqli->query("select * from list_info where is_deleted=0 and is_home=0");
                                $datarow = mysqli_num_rows($sql); //长度
                                //循环遍历出数据表中的数据
                                for($i=0;$i<$datarow;$i++){
                                    $sql_arr = mysqli_fetch_assoc($sql);
                                    $id = $sql_arr['id'];
                                    $title = $sql_arr['list_title'];
                                    echo "<li class='newslist'><a class='newslist' value='$id' href='#' target='_self' style='cursor: pointer' id='$ename'>$title</a></li>";
                                }
                            ?>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <!-- HTML编辑区 -->

        <div id="pdv_17270" class="pdv_class" style="width:467px;height:200px;top:30px;left:535px; z-index:4">
            <div id="spdv_17270" class="pdv_content" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 200px; padding: 0px; margin: 0px;">
                    <div class="tittle"><h2>公司简介<em>/ ABOUT US</em></h2><a id="about-more" href="#" class="more" style="display:inline;">+ more</a></div>
                    <div style="margin:0px;padding:5px">
                        <span style="line-height:2;">
                            <?php
                                require 'mysql.php';
                                $sql = $mysqli->query("select * from text_info where is_deleted=0 and menu_ename='home'");
                                $datarow = mysqli_num_rows($sql); //长度
                                //循环遍历出数据表中的数据
                                $sql_arr = mysqli_fetch_assoc($sql);
                                $text = $sql_arr['text'];
                                echo "<span style='color:#505050;font-size:14px;line-height:2;'>$text</span>";
                            ?>
                        </span>
                    </div>
                </div>

            </div>
        </div>
        <div id="pdv_17271" class="pdv_class" title="" style="width:1002px;height:154px;top:246px;left:0px; z-index:5">
            <div id="spdv_17271" class="pdv_content" style="overflow:hidden;width:100%;height:100%"><div class="pdv_border" style="border: 0px; height: 154px;"><div class="contant">
                <div class="m-tel">
                    <img src="images/img-2.jpg" alt=""/>
                    <h2>客服热线</h2>
                    <p id="hotline"></p>
                </div>
                <div class="m-wx">
                    <img src="" width="90" height="90" id="weixin"/>
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
    <div id="bottom" style="width: 1002px; height: 34px; background: rgb(0, 0, 0);">
        <div id="pdv_17272" class="pdv_class" style="width:1002px;height:29px;top:5px;left:0px; z-index:6">
            <div id="spdv_17272" class="pdv_bottom" style="overflow:hidden;width:100%;height:100%"><div class="pdv_border" style="border: 0px; height: 29px;"><div style="width:100%;text-align:center;font:12px/20px Arial, Helvetica, sans-serif">
                <p align="center">
                    <span id="copyright" style="color:#FFFFFF;line-height:2;"></span>
                    <span id="foot" style="color:#FFFFFF;line-height:2;"></span>
                </p>
            </div>
            </div>
            </div>
        </div>
    </div>
</div><div id="bodyex">

</div>
<div id="topex" style="display: none; width: 100%; height: 779px; background: none; top: 0px;">
</div>
<div id="contentex" style="display: none; width: 100%; height: 400px; background: none; top: 779px;">
</div>
<div id="bottomex" style="width: 100%; height: 34px; background: rgb(0, 0, 0); top: 1179px;">
</div>
<div id="advsex"></div>
<div id="advsex1"></div>
<div id="advsex2"></div>
<div id="advsex3"></div>
<div id="advsex4"></div>
<div id="advsex5"></div>
<div id="advsex6"></div>


<script type="text/javascript">
    $(window).load(function () {
        var name = 'home';
        $("#"+name).attr('style','cursor:pointer;color:#CABA7C');
        $("#"+name).siblings().attr('style','cursor:pointer;');
        $("#hotline").html(getCommonByEname("hotline"));
        $("#weixin").attr('src','./images/'+getCommonByEname("weixin"));
        $("#foot").html(getCommonByEname("foot"));
        $("#copyright").html(getCommonByEname("copyright"));
        $("li.newslist").each(function(i,v){
            var _e = $(this).find('a');
            $(_e).attr('href',getContextPath()+"/news-detail.php?id="+$(_e).attr('value'));
        });
        $("#news-more").attr('href',getContextPath()+"/news.php");
        $("#about-more").attr('href',getContextPath()+"/about.php");
    });
    $("#menus").find('li').find('a').click(function () {
        var i = $(this).attr('id');
        window.location.href=getContextPath()+"/"+i+".php";
    });
</script>
</body>
</html>