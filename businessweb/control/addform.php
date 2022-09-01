<?php
session_start();
$goodsname = $_SESSION['goodsname'];
$price = $_SESSION['price'];
$username = $_SESSION['username'];
$id = $_SESSION['id'];

$day=date("Y/m/d")." ".date("h:i:sa");
$addressee=$_POST["addressee"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$quantity=$_POST["quantity"];
$beizhu=$_POST["beizhu"];
$conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
mysqli_query($conn,'set names utf8'); //告诉服务器，本页面的字符集是utf8
$sql="insert into orderform(address,addressee,beizhu,day,goodsname,guke,phone,price,quantity,state) values('$address','$addressee','$beizhu','$day','$goodsname','$username','$phone','$price','$quantity','未发货')";
$sql1="delete from gouwuche where id='$id'";
if($result=mysqli_query($conn,$sql)&&$result1 = mysqli_query($conn,$sql1))
{
    session_start();
    $_SESSION['key']=1;
    header('Location: ../html/gouwuche.php');
    exit;
}
else{
//    session_start();
//    $_SESSION['key']=0;
//    header('Location: ../html/gouwuche.php');
//    exit;
    echo mysqli_errno($conn);
}
mysqli_close([$conn]);
?>