<?php

$juese=$_GET["juese"];
$username=$_GET["username"];
$password=$_GET["password"];
$conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
if($juese == '1')
{
    mysqli_query($conn,'set names utf8');
    $sql="select * from admin where username =$username and password =$password";
    $result=mysqli_query($conn,$sql)or die("数据查询失败");
    if(mysqli_fetch_assoc($result))
    {
        session_start();
        $_SESSION['username']=$username;
        header('Location: ../html/menu.php');
        exit;
    }
    else{
        $_SESSION['key']=0;
        header('Location: ../html/begin.php');
        exit;
    }
    mysqli_close([$conn]);
}
else{
    mysqli_query($conn,'set names utf8');
    $sql="select * from guke where username =$username and password =$password";
    $result=mysqli_query($conn,$sql)or die("数据查询失败");
    if(mysqli_fetch_assoc($result))
    {
        session_start();
        $_SESSION['username']=$username;
        header('Location: ../html/menu1.php');
        exit;
    }
    else{
        $_SESSION['key']=1;
        header('Location: ../html/begin.php');
        exit;
    }
    mysqli_close([$conn]);
}
/*
require_once '../DButil/connect.php';
$DB = new DBDA();
$DB->Connect();
*/
?>