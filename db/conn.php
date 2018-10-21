<?php
/**
 * Created by PhpStorm.
 * User: 123
 * Date: 2018/7/30
 * Time: 22:14
 */
//读取配置文件
$ini = parse_ini_file("test.ini");
// 创建连接
$conn = new mysqli($ini["servername"], $ini["username"], $ini["password"], $ini["dbname"]) or die("连接失败<br/>");

// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}else{
    echo "连接成功\n";
}