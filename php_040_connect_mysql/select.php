<?php
$serverName = "localhost";

$username = "root";

$password = "root";

$db_name = "php";


$conn = new mysqli($serverName, $username, $password, $db_name);

$result = $conn->query("select * from t_user");

if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "<br> id: ". $row["id"]. " - Name: ". $row["name"];
    }
} else {
    echo "0 个结果";
}
$conn->close();

?>