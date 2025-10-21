<?php
session_start();
session_unset();   // 모든 세션 변수 제거
session_destroy(); // 세션 파기

header("Location: index.php");  // 첫화면으로 이동
exit();
