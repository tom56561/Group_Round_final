

<?php
require_once("dbtools.inc.php");
$userId = 1;

$upload_dir = "../upload/";
$upload_file = $upload_dir.iconv("UTF-8", "Big5", $_FILES["userImg"]["name"]);

function uploadImg($upload_file){
    move_uploaded_file($_FILES["userImg"]["tmp_name"], $upload_file);
}

$link = create_connection();

// 上傳照片並刪除舊的檔案
$sql = "SELECT * FROM `user` WHERE userId = '$userId'";
$result = run_sql($link, "running_in_circles", $sql);
$row = mysqli_fetch_assoc($result);

$e = $upload_dir . $row['userImg'];

if (file_exists($e) && $_FILES["userImg"]["tmp_name"]) {
    unlink($e);
    uploadImg($upload_file);
   
} else {
    uploadImg($upload_file);
}

// 將資料寫進資料庫
if ($_FILES["userImg"]["tmp_name"]) {
    $userImg = $_FILES["userImg"]["name"];
    echo "收到輸入檔案";
} else {
    $userImg = $row['userImg'];
    echo "未收到輸出檔案";
}


$userName = $_POST["userName"];
$userNickName = $_POST["userNickName"];
$userEmail = $_POST["userEmail"];
$userPassword = $_POST["userPassword"];
$userBirthday = $_POST["userBirthday"];
$userCity = $_POST['userCity'];
$userIntro = $_POST["userIntro"];

$sql = "UPDATE user SET
        userImg = '$userImg',
        userName = '$userName',
        userNickName = '$userNickName',
        userEmail = '$userEmail',
        userPassword = '$userPassword',
        userBirthday = '$userBirthday',
        userCity = '$userCity',
        userIntro = '$userIntro'
        WHERE userId = '$userId'";



$result = run_sql($link, "running_in_circles", $sql);


mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>修改會員資料</title>
</head>
<body>
    <h1>修改成功</h1>
    <a href="../memberAlterF5.php">返回會員修改頁</a>
</body>
</html>
