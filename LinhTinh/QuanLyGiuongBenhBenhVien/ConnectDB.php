<?php
/**
 * Created by PhpStorm.
 * User: Q.Anh
 * Date: 12/11/2017
 * Time: 6:56 AM
 */
ob_start();
session_start();
$ketnoi['host'] = 'localhost'; //Tên server, nếu dùng hosting free thì cần thay đổi
$ketnoi['dbname'] = 'final'; //Đây là tên của Database
$ketnoi['username'] = 'root'; //Tên sử dụng Database
$ketnoi['password'] = '';//Mật khẩu của tên sử dụng Database
$con = mysqli_connect(
    "{$ketnoi['host']}",
    "{$ketnoi['username']}",
    "{$ketnoi['password']}","{$ketnoi['dbname']}")
or
die("Không thể kết nối database");
mysqli_query($con,"SET character_set_results=utf8");
?>

