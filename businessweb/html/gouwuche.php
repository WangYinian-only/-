<?php
session_start();
if (isset($_SESSION['key'])) {
    $key = $_SESSION['key'];
    if($key==1)
    {
        echo "<script>alert('订单提交成功！')</script>";
        unset($_SESSION['key']);
    }
    if ($key==0)
    {
        echo "<script>alert('订单提交失败！')</script>";
        unset($_SESSION['key']);
    }
}
else {

}
$username=$_SESSION['username'];
$conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
mysqli_query($conn,'set names utf8');
$sql="select * from gouwuche where guke = '$username'";
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
        <title>购物车信息</title>
    </head>
    <body>
    <div align="center">
        <h1 style="color: black;">&nbsp&nbsp&nbsp查询结果如下！</h1>
        <a href="menu1.php"><div style="color: black;">返回主页</div></a>
        <br><table border="1"><tr><td>名称</td><td>品牌</td><td>生产日期</td><td>价格</td><td>产地</td><td>备注</td></tr>';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo "<form action=\"../html/buy.php\" method=\"post\">"."<tr><td> {$row['goodsname']}</td> "."<td>{$row['brand']} </td> "."<td> {$row['birthday']}</td> "."<td> {$row['price']}</td> "."<td> {$row['place']}</td> "."<td> {$row['beizhu']}</td> "."<input type='hidden' name='id' value='{$row['id']}'><input type='hidden' name='goodsname' value='{$row['goodsname']}'><input type='hidden' name='price' value='{$row['price']}'><td><input type='submit' value='提交订单'></td></tr> "."<form/>";
}
echo '</table></div></body></html>';
mysqli_close($conn);
?>