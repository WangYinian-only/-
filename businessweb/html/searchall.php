<?php
$conn=mysqli_connect("localhost","root","15531238359","businessweb") or die("数据库连接失败");
mysqli_query($conn,'set names utf8');
$sql="select * from goods";
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
        <title>酒水信息</title>
    </head>
    <body>
    <div align="center">
        <h1 style="color: black;">&nbsp&nbsp&nbsp查询结果如下！</h1>
        <a href="menu.php"><div style="color: black;">返回主页</div></a>
        <br><table border="1"><tr><td>名称</td><td>品牌</td><td>生产日期</td><td>价格</td><td>库存</td><td>产地</td><td>备注</td></tr>';
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
    echo "<tr><td> {$row['goodsname']}</td> "."<td>{$row['brand']} </td> "."<td> {$row['birthday']}</td> "."<td> {$row['price']}</td> "."<td> {$row['stock']}</td> "."<td> {$row['place']}</td> "."<td> {$row['beizhu']}</td> "."</tr>";
}
echo '</table></div></body></html>';
mysqli_close($conn);
?>