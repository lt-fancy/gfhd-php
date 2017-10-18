<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017/10/9
 * Time: 18:24
 */
require '../mysql.php';
$ename  = $_GET['ename'];
$sql = $mysqli->query("select * from menu_info where is_deleted=0 and menu_ename='$ename'");
//循环遍历出数据表中的数据
$sql_arr = mysqli_fetch_assoc($sql);
$id = $sql_arr['id'];
$sql2 = $mysqli->query("select * from menu_info where parent_id='$id' order by order_index asc");
mysqli_data_seek($sql2,0);
//循环遍历出数据表中的数据
$sql_arr2 = mysqli_fetch_assoc($sql2);
echo json_encode($sql_arr2,JSON_UNESCAPED_UNICODE);
mysqli_free_result($sql);
mysqli_free_result($sql2);
// 关闭连接
mysqli_close($mysqli);