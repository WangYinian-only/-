<?php
session_start();
$username = $_SESSION['username'];
$conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
mysqli_query($conn,'set names utf8');
$sql="select * from guke where username='$username'";
$result=mysqli_query($conn,$sql)or die("数据查询失败");
if(!$result)
{
    die('无法读取数据: ' . mysqli_error($conn));
}
echo '
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="utf-8">
        <title>个人信息</title>
    </head>
    <body>
    <div align="center">
        <h1 style="color: black;">&nbsp&nbsp&nbsp查询结果如下！</h1>
        <a href="menu1.php"><div style="color: black;">返回主页</div></a>
        <br><table border="1"><tr><td>账号</td><td>密码</td><td>手机号</td><td>邮箱</td></tr>';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo "<tr><td> {$row['username']}</td> "."<td>{$row['password']} </td> "."<td> {$row['phone']}</td> "."<td> {$row['email']}</td></tr>";
}
echo '</table></div></body></html>';
mysqli_close($conn);
?>