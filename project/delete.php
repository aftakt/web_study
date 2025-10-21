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
$sql = "DELETE FROM board_table WHERE idx = $idx AND id = '$userid'";
$res = mysqli_query($db_conn,$sql);

if ($res) {
    header("Location: board.php");
    exit();
} 
else {
    echo "삭제에 실패하였습니다!";
}