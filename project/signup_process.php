<?php
require_once 'config.php';
require_once 'session.php';

//post로 회원가입때 입력받은 사용자 변수받아오고
$name = $_POST['name'];
$userid = $_POST["id"];
$userpw = $_POST["password"];
// sql문 실행하기, 사용자가 입력한 id를 sql문으로 식별하려고 해 
$sql = "SELECT * FROM user_table WHERE id='$userid'";
// db핸들러로 실행
$res = mysqli_query($db_conn, $sql);
// var_dump($res);
$row = mysqli_fetch_array($res);
// 아이디 중복검사하기, 페치드 어레이는 가장 위의 행부터 뽑는다!! 
// 존재하는 행이 하나라도 있으면 존재하는 아이디가 있으므로 종료
if (mysqli_num_rows($res) > 0) {
    echo "이미 존재하는 아이디입니다";
    exit();
}
// id 컬럼을 가장 위의 행으로 했는데, id컬럼으로 pk처리 후 만약 존재하는 행이 없다면
// 해당 아이디는 존재하지 않으므로 거짓의 값을 가지므로 if문 통과못해서 내려옴
//해시함수처리하기
$hashpw = password_hash($userpw, PASSWORD_DEFAULT);
//일단 sql쿼리문 실시하기!! 위의 변수랑 다른 변수 사용하자 ㅎㅎ 당연!! 모든 컬럼을 채워줘야한다 >.<
$in_sql = "INSERT INTO user_table (id ,name, pass) VALUES ('$userid', '$name','$hashpw')";
$in_res = mysqli_query($db_conn, $in_sql);

if($in_res) {
    $_SESSION["userid"] = $userid;
    header("Location: index.php");
    exit();
}

else {  
    echo "회원가입실패!!!";
}
?>