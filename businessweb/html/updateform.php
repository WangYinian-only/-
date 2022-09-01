<?php
session_start();
if (isset($_SESSION['key'])) {
    $key = $_SESSION['key'];
    if ($key == 1) {
        echo "<script>alert('订单修改成功！')</script>";
        unset($_SESSION['key']);
    }
    if ($key == 0) {
        echo "<script>alert('订单修改失败！')</script>";
        unset($_SESSION['key']);
    }
} else {
}
$conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
mysqli_query($conn,'set names utf8');
$sql="select * from orderform";
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
        <title>修改订单信息</title>
    </head>
    <body>
    <div align="center">
        <h1 style="color: black;">&nbsp&nbsp&nbsp查询结果如下！</h1>
        <a href="menu.php"><div style="color: black;">返回主页</div></a>
        <br><table border="1"><tr><td>收件人</td><td>收货地址</td><td>电话</td><td>提交日期</td><td>商品名称</td><td>价格</td><td>数量</td><td>备注</td><td>状态</td></td></tr></tr>';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo "<form action=\"../control/updateform.php\" method=\"post\">"."<tr><td> {$row['addressee']}</td> "."<td>{$row['address']} </td> "."<td> {$row['phone']}</td> "."<td> {$row['day']}</td> "."<td> {$row['goodsname']}</td> "."<td> {$row['price']}</td> "."<td> {$row['quantity']}</td> "."<td> {$row['beizhu']}</td> "."<td><input style='width:100px;' type='text' name='state' value='{$row['state']}'></td> "."<td><input type='submit' value='修改'></td> "."</tr><input type='hidden' name='id' value='{$row['id']}'><form/>";
}
echo '</table></div></body></html>';
mysqli_close($conn);
?>