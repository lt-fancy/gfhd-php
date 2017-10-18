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
                                echo $ename;
                            }
?>