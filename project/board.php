<?php
require_once 'config.php';
require_once 'session.php';
if (!isset($_SESSION["userid"])){
    header("location: login.php");
}
?>

<?php
$sql = "SELECT * FROM board_table ORDER BY idx DESC" ;
$res = mysqli_query($db_conn, $sql);
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>board</title>

<style>
        body {
            background-color: azure;
            text-align: center;
        }
        table {
            margin: auto;
            border-collapse: collapse;
            width: 80%;
        }
        th, td {
            border: 1px solid gray;
            padding: 10px;
        }
 </style>      

</head>
<body>
<div style="text-align: right;">
  <a href="write.php" style="display: inline-block; margin-bottom: 20px; padding: 10px 20px; background:rgb(83, 149, 206); color: white; border-radius: 5px; text-decoration: none;">write</a>
</div>
<table>
<tr>
  <th>num</th>
  <th>title</th>
  <th>name</th>
  <th>time</th>
</tr>

<?php

while($row = mysqli_fetch_array($res)) {
    echo "<tr>";
    echo "<td>" .$row['idx'] . "</td>";
    echo "<td><a href='view.php?idx=" . $row['idx'] . "'>" . $row['title'] . "</a></td>";    echo "<td>". $row["id"] ."</td>";
    echo "<td>". $row["time"] ."</td>";
    echo "</tr>";
    } 
?>
</table>
</body>
</html>





