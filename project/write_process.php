<?php
require_once 'config.php';
require_once 'session.php';
if (!isset($_SESSION["userid"])){
    header("location: login.php");
}
// 변수받아오기 
$title = $_POST['title'];
$content = $_POST['content'];

// 세션에서 아이디 꺼내와서 변수 선언해주기 
$userid = $_SESSION["userid"];
//  이스케이프 처리 (개행, 따옴표, 특수문자 등 방지)
$title = mysqli_real_escape_string($db_conn, $title);
$content = mysqli_real_escape_string($db_conn, $content);

// 빈값 체크
if (empty($title)) {
    echo "제목이 비어 있어요. 다시 입력해주세요.";
    exit();
}
if (empty($content)) {
    echo "내용이 비어 있어요. 다시 입력해주세요.";
    exit();
}

$sql = "INSERT INTO board_table (title, content, id) VALUES ('$title', '$content','$userid')";
$res = mysqli_query($db_conn,$sql);


if($res){
    header("Location:board.php");
    exit();
}
else {
    echo "<br><a href='write.php'>rewrite</a>";
}
?>