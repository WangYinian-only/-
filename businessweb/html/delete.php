<?php
    session_start();
if (isset($_SESSION['key'])) {
    $key = $_SESSION['key'];
    if($key==1)
    {
        echo "<script>alert('商品删除成功！')</script>";
    }
    if ($key==0)
    {
        echo "<script>alert('商品删除失败！')</script>";
    }
}
else {

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>删除酒水信息</title>
</head>
<body>
<form action="../control/delete.php" method="post">
    <div align="center">
        <h1 style="color: black;">&nbsp&nbsp&nbsp欢迎进行酒水信息删除！</h1>
        <a href="menu.php"><div style="color: black;">返回主页</div></a>
        <br>
        <table border="6px">
            <tr>
                <td><h4><div style="color: black;">名称：</div></h4></td>
                <td><input type="text" name="name" required maxlength="40" placeholder="请输入名称"/></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">提&nbsp&nbsp&nbsp交</button>
                </td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>