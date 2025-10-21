<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <style>
        body {
            background-color: azure;
        }
        .sign-box {
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
    <div class="sign-box">
        <h2>Signup</h2>
        <form action="signup_process.php" method="post">
            <label for="name">NAME:</label>
            <input type="text" id="name" name="name" required><br><br>
            <label for="name">ID:</label>
            <input type="text" id="id" name="id" required><br><br>
            <label for="name">PW:</label>
            <input type="password" id="password" name="password" required><br><br>
            <input type="submit" value="signup">
        </form>
    </div>
</body>
</html>

<!-- 비밀번호 검증 구현하기 -->