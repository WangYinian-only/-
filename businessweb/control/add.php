<?php
$name=$_POST["name"];
$brand=$_POST["brand"];
$birthday=$_POST["birthday"];
$price=$_POST["price"];
$stock=$_POST["stock"];
$place=$_POST["place"];
$beizhu=$_POST["beizhu"];
$conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
mysqli_query($conn,'set names utf8'); //告诉服务器，本页面的字符集是utf8
$sql="insert into goods(goodsname,brand,birthday,price,stock,place,beizhu) values('$name','$brand','$birthday','$price','$stock','$place','$beizhu')";
if($result=mysqli_query($conn,$sql))
{
    session_start();
    $_SESSION['key']=1;
    header('Location: ../html/add.php');
    exit;
}
else{
    session_start();
    $_SESSION['key']=0;
    header('Location: ../html/add.php');
    exit;
}
mysqli_close([$conn]);
?>