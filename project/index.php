<?php
require_once 'config.php';
require_once 'session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>

<style>
        body {
            background-color: azure;
            text-align: center;
        }
        .box {
            width: 300px;
            margin: 200px auto;
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.5);
        }
        a,li {
            display: block;
            text-align: center;
            margin-top: 15px;
            font-size: 16px;
            color: black;
            text-decoration: none;
        }

        ul {
        padding-left: 0;
        list-style: none;
         }
    </style>
</head>
<body>
<div class="box">
    <ul>
        <li><a href="board.php">Board</a></li>
        <li><a href="write.php">Write</a></li>
        <li><a href="mypage.php">MyPage</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>    
</body>
</html>
