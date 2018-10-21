<?php
/**
 * Created by PhpStorm.
 * User: wukk
 * Date: 2018/7/30
 * Time: 7:54
 */
include 'db/conn.php';

// 创建连接
// Check connection

$sql = "SELECT id, name, age FROM user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "\t" . $row["age"]."\n";
    }
} else {
    echo "0 结果";
}
$conn->close();
