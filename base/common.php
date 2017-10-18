<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2017/10/9
 * Time: 14:06
 */
require '../mysql.php';
$ename  = $_GET['ename'];
$sql = $mysqli->query("select * from common_info where is_deleted=0 and common_ename='$ename'");
$datarow = mysqli_num_rows($sql); //长度
//循环遍历出数据表中的数据
$sql_arr = mysqli_fetch_assoc($sql);
echo $sql_arr['content'];
mysqli_free_result($sql);
// 关闭连接
mysqli_close($mysqli);