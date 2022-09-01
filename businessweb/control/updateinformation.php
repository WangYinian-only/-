<?php
session_start();
$phone = $_POST['phone'];
$email=$_POST['email'];
$username = $_SESSION['username'];

$conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
mysqli_query($conn,'set names utf8'); //告诉服务器，本页面的字符集是utf8
$sql="update guke set phone='$phone',email='$email' where username='$username'";
if($result=mysqli_query($conn,$sql))
{
    session_start();
    $_SESSION['key']=1;
    header('Location: ../html/updateguke.php');
    exit;
}
else{
    session_start();
    $_SESSION['key']=0;
    header('Location: ../html/updateguke.php');
    exit;
}
mysqli_close([$conn]);
?>