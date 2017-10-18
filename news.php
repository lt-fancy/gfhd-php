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
            <div id='pdv_17298' class="pdv_class"
                 style="width:1002px;height:450px;top:0px;left:0px; z-index:3">
                <div id='spdv_17298' class="pdv_top" style="overflow:hidden;width:100%;height:100%">
                </div>
            </div>
        </div>

        <div id='pdv_17299' class="pdv_class" style="width:100%; height:101px;top:0px;left:0px;  z-index:4">
            <div id='spdv_17299' class="pdv_top" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 101px;">
                    <div class="header">
                        <div class="wrap clearfix">
                            <h1 class="logo"><a href="#" title="">
                                    <img src="./images/logo.png"/></a></h1>
                            <div class="nav">
                                <ul class="clearfix" id="menus">
                                    <?php
                                    require_once 'mysql.php';
                                    //查询数据表中的数据
                                    $sql = $mysqli->query("select * from menu_info where is_deleted=0 and is_parent=0 order by order_index asc");
                                    $datarow = mysqli_num_rows($sql); //长度
                                    //循环遍历出数据表中的数据
                                    for ($i = 0; $i < $datarow; $i++) {
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
         style="width: 1002px; height: 1728px; background: url(images/c.jpg) 50% 0% repeat-x transparent; margin: 0px auto;">

        <div id='pdv_17303' class="pdv_class"
             style="width: 1002px; height: 1456px; top: 90px; left: 0px; z-index: 1;">
            <div id='spdv_17303' class="pdv_content" style="overflow:visible;width:100%;">
                <div class="pdv_border" style="border:0">
                    <link href="css/newsquery.css" rel="stylesheet" type="text/css"/>
                    <div class="news">
                        <div id="sub-title" class="tittle" style="height:42px;font-size:24px;color:#CABA7C;"></div>
                        <form id="searchform">
                            <div class="shop_select">
                            </div>
                        </form>
                        <ul id="list-total">
                            <?php
                            require_once 'base/page.php';
                            //循环遍历出数据表中的数据
                            for ($i = 0; $i < sizeof($array); $i++) {
                                $data = $array[$i];
                                $id = $data->id;
                                $imageUri = $data->image_uri;
                                $listTitle = $data->list_title;
                                $listContent = $data->list_content;
                                $listContent = mb_strlen($listContent)>163?mb_substr($listContent,0,163,'utf-8'):$listContent;
                                $time = substr($data->gmt_modified, 0, 10);
                                echo "<li >
                                            <a style='cursor:pointer' id='list-image$id' value='$id'><img src='images/$imageUri' width='251' height='127'/></a>
                                            <div class='text'>
                                                <h2><a id='list-title$id' style='cursor: pointer'>$listTitle</a></h2>
                                                <span>$time</span>
                                                <p>$listContent</p>
                                                <a id='list-more$id' style='cursor: pointer' class='more'>更多</a>
                                            </div>
                                          </li>";
                            }
                            ?>
                        </ul>
                        <div id='showpages' style='float:right'>
                            <?php
                            $up = $pageNum==$endPage?$endPage:($pageNum+1);
                            $down = $pageNum==1?1:($pageNum-1);
                            echo "
                                <div id='pagesinfo'>共 $allNum 条 每页 $pageSize 条 页次 $pageNum/$endPage</div><div id='pages'>
                                        <ul>
                                            <li class='pbutton'><a style='cursor: pointer' href='?pageNum=1'>首页</a></li>
                                            <li class='pbutton'><a style='cursor: pointer' href='?pageNum=$down'>上一页</a></li>
                                            <li class='pbutton'><a style='cursor: pointer' href='?pageNum=$up'>下一页</a></li>
                                            <li class='pbutton'><a style='cursor: pointer' href='?pageNum=$endPage'>尾页</a></li>
                                        </ul>
                                        </div>
                                        ";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 文章逐级分类 -->

        <div id='pdv_17302' class="pdv_class" style="width:1002px;height:72px;top:0px;left:0px; z-index:2">
            <div id='spdv_17302' class="pdv_content" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 72px;">
                    <link href="css/newsclass.css" rel="stylesheet" type="text/css"/>
                    <div class="sidebar">
                        <div class="wrap">
                            <ul id="child-menu">
                                <?php
                                $sql = $mysqli->query("select * from menu_info where is_deleted=0 and menu_ename='news'");
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

        <div id='pdv_17301' class="pdv_class" title=""
             style="width: 1002px; height: 167px; top: 1561px; left: 0px; z-index: 6;">
            <div id='spdv_17301' class="pdv_content" style="overflow:hidden;width:100%;height:100%">
                <div class="pdv_border" style="border: 0px; height: 167px;">
                    <div class="contant">
                        <div class="m-tel">
                            <img src="images/img-2.jpg" alt=""/>
                            <h2>客服热线</h2>
                            <p id="hotline">021-123456</p>
                        </div>
                        <div class="m-wx">
                            <img src="images/20150727114020.jpg" width="90" height="90" id="weixin"/>
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

        <div id='pdv_17300' class="pdv_class" style="width:1002px;height:29px;top:5px;left:0px; z-index:5">
            <div id='spdv_17300' class="pdv_bottom" style="overflow:hidden;width:100%;height:100%">
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
     style="width: 100%; height: 1728px; background: url(./images/c.jpg) 50% 0% repeat-x transparent; top: 450px;">
</div>
<div id="bottomex" style="width: 100%; height: 34px; background: none 0% 0% repeat rgb(0, 0, 0); top: 2178px;">
</div>
<div id="advsex"
     style="background: url(./images/1505220326.jpg) center top no-repeat; height: 450px; top: 0px; display: block;"></div>
<div id="advsex1"></div>
<div id="advsex2"></div>
<div id="advsex3"></div>
<div id="advsex4"></div>
<div id="advsex5"></div>
<div id="advsex6"></div>

<script type="text/javascript">
    $(window).load(function () {
        var name = 'news';
        $("#" + name).attr('style', 'cursor:pointer;color:#CABA7C');
        $("#" + name).siblings().attr('style', 'cursor:pointer;');
        var subName = getFirstMenu(name);
        $("#sub-title").html(subName.menu_cname);
        $("#hotline").html(getCommonByEname("hotline"));
        $("#foot").html(getCommonByEname("foot"));
        $("#copyright").html(getCommonByEname("copyright"));
        $("#weixin").attr('src', './images/' + getCommonByEname("weixin"));
    });
    $("#menus").find('li').find('a').click(function () {
        var i = $(this).attr('id');
        window.location.href = getContextPath() + "/" + i + ".php";
    });
    <!--子标题-->
    $("#child-menu").find('li').find('a').click(function () {
        var title = $(this).text();
        var value = $(this).attr('value');
        $("#sub-title").html(title);
        var href = '';
        var father = value.substring(0,value.indexOf('-'));
        if(value == getFirstMenu(father).menu_ename){
            href = getContextPath() + "/" + father + ".php";
        } else {
            href = getContextPath() + "/" + value + ".php";
        }
        window.location.href = href;
    });
    $("#list-total").find('li').each(function (i, v) {
        var _a = $(v).find('a');
        var id = $(_a).attr('value');
        var href = getContextPath() + "/news-detail.php?id=" + id;
        $("#list-image" + id).attr('href', href);
        $("#list-title" + id).attr('href', href);
        $("#list-more" + id).attr('href', href);
    })
</script>
</body>
</html>