<?php
    session_start();
    $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>管理员菜单</title>
</head>
<body>
<div align="center">
    <h1 style="color: black;">&nbsp&nbsp&nbsp欢迎管理员<?php echo $username?>登录！</h1>
    <table border="6">
        <tr>
            <td><h4><a style="text-decoration: none" href="add.php"><div style="color: black;">添加商品信息</div></a></h4></td>
        </tr>
        <tr>
            <td><h4><a style="text-decoration: none" href="delete.php"><div style="color: black;">删除商品信息</div></a></h4></td>
        </tr>
        <tr>
            <td><h4><a style="text-decoration: none" href="searchall.php?"><div style="color: black;">查询商品信息</div></a></h4></td>
        </tr>
        <tr>
            <td><h4><a style="text-decoration: none" href="updateform.php"><div style="color: black;">修改订单信息</div></a></h4></td>
        </tr>
    </table>
</div>
</body>
</html>