<?php
session_start();
$username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>顾客菜单</title>
</head>
<body>
<div align="center">
    <h1 style="color: black;">&nbsp&nbsp&nbsp欢迎顾客<?php echo $username?>登录！</h1>
    <table border="6">
        <tr>
            <td><h4><a style="text-decoration: none" href="searchall1.php"><div style="color: black;">查询商品信息</div></a></h4></td>
        </tr>
        <tr>
            <td><h4><a style="text-decoration: none" href="gouwuche.php"><div style="color: black;">查看购物车信息</div></a></h4></td>
        </tr>
        <tr>
            <td><h4><a style="text-decoration: none" href="searchform.php"><div style="color: black;">查询订单信息</div></a></h4></td>
        </tr>
        <tr>
            <td><h4><a style="text-decoration: none" href="updateguke.php"><div style="color: black;">修改个人信息</div></a></h4></td>
        </tr>
        <tr>
            <td><h4><a style="text-decoration: none" href="updatepassword.php"><div style="color: black;">修改个人密码</div></a></h4></td>
        </tr>
        <tr>
            <td><h4><a style="text-decoration: none" href="searchguke.php"><div style="color: black;">查询个人信息</div></a></h4></td>
        </tr>
    </table>
</div>
</body>
</html>