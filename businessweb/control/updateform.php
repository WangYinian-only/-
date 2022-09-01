<?php
    $state = $_POST['state'];
    $id = $_POST['id'];
    $conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
    mysqli_query($conn,'set names utf8'); //告诉服务器，本页面的字符集是utf8
    $sql="update orderform set state='$state' where id='$id'";
    if($result=mysqli_query($conn,$sql))
    {
        session_start();
        $_SESSION['key']=1;
        header('Location: ../html/updateform.php');
        exit;
    }
    else{
        session_start();
        $_SESSION['key']=0;
        header('Location: ../html/updateform.php');
        exit;
    }
    mysqli_close([$conn]);
?>