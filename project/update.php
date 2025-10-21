<?php
require_once 'config.php';
require_once 'session.php';

if (!isset($_SESSION["userid"])){
    header("location: login.php");
}
// 인덱스 값 받아오기: 겟으로 들어옴
$idx =isset($_GET['idx']) && is_numeric($_GET['idx']) ? $_GET['idx'] : '' ;


if ($idx === '') {
    echo "잘못된 접근입니다.";
    exit();
}

// 세션에 저장된 아이디 가져오기
$userid = $_SESSION['userid'];

// sql문 실행하기 
$sql = "SELECT * FROM board_table WHERE idx = $idx AND id = '$userid'" ; 
$res = mysqli_query($db_conn, $sql);
$row = mysqli_fetch_array($res);
?>

<!DOCTYPE html>     
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>write</title>
    <style>
      body {
            background-color: azure;
        } 
        
        .writing-box {
            width: 300px;
            margin: 200px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }

    </style>
</head>
<body>
    
<div class="writing-box">
    <h2>update</h2>
<form action="update_process.php" method="post">
    <input type="hidden" name="idx" value="<?= $row['idx'];?>">
    <label for="title">title</label><br>
    <input type="text"id="title" name="title" value="<?= $row['title'];?>"><br><br><br>
    <label for="content">content</label><br>
    <textarea id="content" name="content" rows="10" cols="30"><?= $row['content']; ?></textarea><br><br>
    <input type="submit" value="update">

</form>
</div>
</body>
</html>