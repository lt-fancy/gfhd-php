<?php
require 'mysql.php';
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