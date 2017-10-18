<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017/10/9
 * Time: 18:23
 */
require '../mysql.php';
$ename  = $_GET['ename'];
$sql = $mysqli->query("select * from menu_info where is_deleted=0 and menu_ename='$ename'");
//循环遍历出数据表中的数据
$sql_arr = mysqli_fetch_assoc($sql);
echo json_encode($sql_arr,JSON_UNESCAPED_UNICODE);
mysqli_free_result($sql);
// 关闭连接
mysqli_close($mysqli);