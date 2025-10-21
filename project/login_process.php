<?php
require_once 'config.php';
require_once 'session.php';
//변수받아오기
$userid = $_POST["userid"];
$userpw = $_POST["userpw"];

// sql문 실행해서 아이디 식별할 준비하기
$sql = "SELECT * FROM user_table WHERE id = '$userid'";
//쿼리문 실행하기: 결과는 연관배열로 나오겠지?
$res = mysqli_query($db_conn, $sql);
//pk처리를 한 아이디 식별의 결과가 0개 초과다? 
// => 연관배열을 뽑아서 하나의 로우로 저장

// 한마디로 아이디가 있냐없냐 검사하는 것이다!! 결과값이 있는지 보는 것 
if(mysqli_num_rows($res)>0) 
        //연관배열로 나온 여러 값들 중, 이제 비밀번호로 인증할 수 있도록 키값 뽑기
        // var_dump($res)
    // 결과가 있으면 컬럼을 뽑는 배열을 이용해 row에 담기
    $row = mysqli_fetch_array($res);
    // print_r($row);
    // 디비에 있는 컬럼(키이름)을 이용해서 변수선언하기
    // 디비에서 가져온 비밀번호를 디비패스에 담기
    $db_pass = $row['pass'];
    // 사용자한테 받은 비밀번호와 해시처리된 비밀번호를 비교하기
      if(password_verify($userpw, $db_pass)) {    
        $_SESSION["userid"] = $userid;
        header("Location: index.php");
        exit();
    }
// 실패하면 로그인패이지로
else {
    $_SESSION["login_failed"] = "실패";
    header("location:login.php");
    exit();
};
 ?>