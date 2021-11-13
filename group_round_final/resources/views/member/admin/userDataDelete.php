<?php
require_once("dbtools.inc.php");
$userId = 1;
$link = create_connection();

// 刪除使用者上傳的大頭照
$sql = "SELECT * FROM `user` WHERE userId = '$userId'";
$result = run_sql($link, "running_in_circles", $sql);
$row = mysqli_fetch_assoc($result);


unlink('../upload/' . $row['userImg']);
// 刪除資料
$sql = "DELETE FROM user WHERE userId = $userId";
$result = run_sql($link, "running_in_circles", $sql);
mysqli_close($link);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>刪除會員資料</title>
</head>

<body>
    <h1>會員資料已刪除</h1>
    <a href="../memberF.php">返回會員頁面</a>
</body>

</html>