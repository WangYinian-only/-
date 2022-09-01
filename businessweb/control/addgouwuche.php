<?php
session_start();
$username=$_SESSION['username'];
$goodsname=$_POST['goodsname'];

$conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
mysqli_query($conn,'set names utf8');
$sql="select * from goods where goodsname = '$goodsname'";
$result=mysqli_query($conn,$sql)or die("数据查询失败");
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
$sql1="insert into gouwuche(beizhu,birthday,brand,goodsname,guke,place,price,quantity) values('{$row['beizhu']}','{$row['birthday']}','{$row['brand']}','{$row['goodsname']}','$username','{$row['place']}','{$row['price']}','1')";

if($result1=mysqli_query($conn,$sql1))
{
    session_start();
    $_SESSION['key']=1;
    header('Location: ../html/searchall1.php');
    exit;
}
else{
//    session_start();
//    $_SESSION['key']=0;
//    header('Location: ../html/searchall1.php');
//    exit;
    echo mysqli_errno($conn);
}
?>



