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
            <div id="pdv_17348" class="pdv_class"
                 style="width:1002px;height:450px;top:0px;left:0px; z-index:3">
                <div id="spdv_17348" class="pdv_top" style="overflow:hidden;width:100%;height:100%">
                </div>
            </div>
        </div>

        <div id="pdv_17349" class="pdv_class" style="width:100%; height:101px;top:0px;left:0px;  z-index:4">
            <div id="spdv_17349" class="pdv_top" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 101px;">
                    <div class="header">
                        <div class="wrap clearfix">
                            <h1 class="logo"><a href="#" title="">
                                <img src="./images/logo.png"/></a></h1>
                            <div class="nav">
                                <ul class="clearfix" id="menus">
                                    <?php
                                        require_once 'base/mainMenu.php';
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
         style="width: 1002px; height: 830px; background: url(./images/c.jpg) 50% 0% repeat-x transparent; margin: 0px auto;">
        <!-- 网页内容详情 -->
        <div id="pdv_17347" class="pdv_class" title="" style="width:1002px;height:563px;top:90px;left:0px; z-index:1">
            <div id="spdv_17347" class="pdv_content" style="overflow:visible;width:100%;">
                <div class="pdv_border" style="margin:0;padding:0;height:100%;border:0px  solid;background:;">
                    <div style="padding:0px">
                        <link href="css/pagecontent.css" rel="stylesheet" type="text/css"/>
                        <div id="pagecontent" class="page_content">
                            <div class="tittle" style="margin-bottom:20px;height:42px;font-size:24px;color:#CABA7C;">
                                联系方式
                            </div>
                            <p id="contact-text">
                            北京高峰宏道投资有限公司<br />
                            电话：010-64015132  010-84045828<br />
                            传真：010-64015132-8003<br />
                            网址：<a href="http://www.gfhdtz.com">http://www.gfhdtz.com</a><br />
                            地址：北京市东城区东四十条21号一商集团大厦301-306室<br />
                            邮编：100007<br />
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div id="pdv_17346" class="pdv_class" style="width:1002px;height:58px;top:0px;left:0px; z-index:2">
            <div id="spdv_17346" class="pdv_content" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 58px;">
                    <link href="css/pagetitlemenu_dolphin.css" rel="stylesheet" type="text/css"/>
                    <div class="sidebar">
                        <div class="wrap">
                            <ul id="child-menu">
                                <?php
                                $sql = $mysqli->query("select * from menu_info where is_deleted=0 and menu_ename='contact'");
                                $sql_arr = mysqli_fetch_assoc($sql);
                                $id = $sql_arr['id'];
                                $sql2 = $mysqli->query("select * from menu_info where parent_id=$id and is_deleted=0 order by order_index asc");
                                $datarow = mysqli_num_rows($sql2); //长度
                                //循环遍历出数据表中的数据
                                for ($i = 0; $i < $datarow; $i++) {
                                    $sql_arr2 = mysqli_fetch_assoc($sql2);
                                    $ename = $sql_arr2['menu_ename'];
                                    $cname = $sql_arr2['menu_cname'];
                                    echo "<li class='dq' id='$ename'><a value='$ename' style='cursor: pointer'>$cname</a></li>";
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 自定义模版 -->

        <div id="pdv_17351" class="pdv_class" title=""
             style="width: 1002px; height: 167px; top: 663px; left: 0px; z-index: 6;">
            <div id="spdv_17351" class="pdv_content" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 167px;">
                    <div class="contant">
                        <div class="m-tel">
                            <img src="./images/img-2.jpg" alt=""/>
                            <h2>客服热线</h2>
                            <p id="hotline">021-123456</p>
                        </div>
                        <div class="m-wx">
                            <img src="./images/20150727114020.jpg" width="90" height="90" id="weixin"/>
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
        <div id="pdv_17350" class="pdv_class" style="width:1002px;height:29px;top:5px;left:0px; z-index:5">
            <div id="spdv_17350" class="pdv_bottom" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 29px;">
                    <div style="width:100%;text-align:center;font:12px/20px Arial, Helvetica, sans-serif">
                        <p align="center">
                            <span id="copyright" style="color:#FFFFFF;line-height:2;"></span><span id="foot"
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
     style="width: 100%; height: 830px; background: url(./images/c.jpg) 50% 0% repeat-x transparent; top: 450px;">
</div>
<div id="bottomex" style="width: 100%; height: 34px; background: none 0% 0% repeat rgb(0, 0, 0); top: 1280px;">
</div>
<div id="advsex"
     style="background: url(./images/1505220177.jpg) center top no-repeat; height: 450px; top: 0px; display: block;"></div>
<div id="advsex1"></div>
<div id="advsex2"></div>
<div id="advsex3"></div>
<div id="advsex4"></div>
<div id="advsex5"></div>
<div id="advsex6"></div>

<script type="text/javascript">
    $(window).load(function () {
        var name = 'contact';
        $("#"+name).attr('style','cursor:pointer;color:#CABA7C');
        $("#"+name).siblings().attr('style','cursor:pointer;');
        $("#hotline").html(getCommonByEname("hotline"));
        $("#foot").html(getCommonByEname("foot"));
        $("#copyright").html(getCommonByEname("copyright"));
        $("#weixin").attr('src', './images/' + getCommonByEname("weixin"));
        var content = getTextByMenuEname(name).text;
        $("#contact-text").html(content);
    });
    $("#menus").find('li').find('a').click(function () {
        var i = $(this).attr('id');
        window.location.href=getContextPath()+"/"+i+".php";
    });
    <!--子标题-->
    $("#child-menu").find('li').find('a').click(function () {
        var value = $(this).attr('value');
        var href = '';
        var father = value.substring(0,value.indexOf('-'));
        if(value == getFirstMenu(father).menu_ename){
            href = getContextPath() + "/" + father + ".php";
        } else {
            href = getContextPath() + "/" + value + ".php";
        }
        window.location.href=href;
    });
</script>
</body>
</html>