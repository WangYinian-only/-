<?php
session_start();
$oldpassword = $_POST['oldpassword'];
$newpassword=$_POST['newpassword'];

$username = $_SESSION['username'];

$conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
mysqli_query($conn,'set names utf8'); //告诉服务器，本页面的字符集是utf8
$sql="select password from guke where username='$username'";
$result=mysqli_query($conn,$sql)or die("数据查询失败");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
if(!(strncmp($oldpassword,$row['password'],6)))
{
    $sql1="update guke set password='$newpassword'where username='$username'";
    if($result1=mysqli_query($conn,$sql1))
    {
        session_start();
        $_SESSION['key']=1;
        header('Location: ../html/updatepassword.php');
        exit;
    }
    else{
        session_start();
        $_SESSION['key']=0;
        header('Location: ../html/updatepassword.php');
        exit;
    }
    mysqli_close([$conn]);
}
else{
    session_start();
    $_SESSION['key']=2;
    header('Location: ../html/updatepassword.php');
    exit;
}
mysqli_close([$conn]);
?>