<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
<style>
        body {
            background-color: azure;
        }
        .login-box {
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
   <div class="login-box">
    <h2>Login</h2>
    <form action="login_process.php" method="post">
        <label for="userid">ID</label><br>
        <input type="text" id="userid" name ="userid" required><br><br>
        <label for="password">PASSWORD</label><br>
        <input type="password" id="userpw"name ="userpw" required><br><br>
        <input type="submit" value="login">
        <input type="button" value="Signup" onclick="location.href='signup.php'"><br><br>
    </form>
    </div> 
</body>
</html>

<!-- 자바스크립트로 입력상호작용 구현하기 -->