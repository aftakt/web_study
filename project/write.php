<?php
require_once 'config.php';
require_once 'session.php';
if (!isset($_SESSION["userid"])){
    header("location: login.php");
}
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
    <h2>write</h2>
    <form action="write_process.php" method="post">
    <label for="title">title</label><br>
    <input type="text"id="title" name="title"><br><br><br>
    <label for="content">content</label><br>
    <textarea id="content" name="content" rows="10" cols="30"></textarea><br><br>
    <input type="submit" value="submit">


    </form>
</div>
</body>
</html>