<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017/10/10
 * Time: 15:44
 */
function news($pageNum = 1, $pageSize = 7)
{
    $host="w.rdc.sae.sina.com.cn";
    $db_user="m1yk41zo35";
    $db_pass="xm1i3jk145ml20lk2xwz224mj0ilz10yhh3x3ily";
    $db_name="app_gfhdtz";
    $mysqli = new mysqli($host, $db_user, $db_pass, $db_name);
    $mysqli->query("SET names UTF8");
    $array = array();
    // limit为约束显示多少条信息，后面有两个参数，第一个为从第几个开始，第二个为长度
    $rs = $mysqli->query("select * from recruit_info where is_deleted=0 order by gmt_modified desc limit " . (($pageNum - 1) * $pageSize) . "," . $pageSize);
    while ($obj = mysqli_fetch_object($rs)) {
        $array[] = $obj;
    }
    mysqli_close($mysqli);
    return $array;
}
//显示总页数的函数
function allNews()
{
    $host="w.rdc.sae.sina.com.cn";
    $db_user="m1yk41zo35";
    $db_pass="xm1i3jk145ml20lk2xwz224mj0ilz10yhh3x3ily";
    $db_name="app_gfhdtz";
    $mysqli = new mysqli($host, $db_user, $db_pass, $db_name);
    $mysqli->query("SET names UTF8");
    $rs = $mysqli->query("select count(*) num from recruit_info where is_deleted=0"); //可以显示出总页数
    $obj = mysqli_fetch_object($rs);
    mysqli_close($mysqli);
    return $obj->num;
}
@$allNum = allNews();
@$pageSize = 7; //约定没页显示几条信息
@$pageNum = empty($_GET["pageNum"])?1:$_GET["pageNum"];
@$endPage = ceil($allNum/$pageSize); //总页数
@$array = news($pageNum,$pageSize);