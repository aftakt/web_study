<?php
require_once 'config.php';
require_once 'session.php';
if (!isset($_SESSION["userid"])){
    header("location: login.php");
}
// 인덱스값 받아와서 넣어주기
$idx =isset($_GET['idx']) && is_numeric($_GET['idx']) ? $_GET['idx'] : '' ;

if ($idx === '') {
    echo "잘못된 접근입니다.";
    exit();
}
// 쿼리문 실행하기
$sql = "SELECT * FROM board_table WHERE idx = '$idx'";
$res = mysqli_query($db_conn, $sql);
$row = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <style>
     body {
            background-color: azure;
            text-align: center;
            padding: 50px;
        }
        .box-tag {
            display: inline-block;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
            width: 400px;
        }
        .content {
            text-align: left;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="box-tag">
    <h3><?php echo $row['title']; ?></h3>
    <p><?php echo $row['content']; ?></p>
    <div>
    <a href="update.php?idx=<?php echo $row['idx']; ?>">update</a> |
    <a href="delete.php?idx=<?php echo $row['idx']; ?>">delete</a>
    </div>  

</body>
</html>