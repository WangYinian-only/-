<?php
session_start();
$goodsname=$_POST['goodsname'];
$price=$_POST['price'];
$id=$_POST['id'];

$_SESSION['id']=$id;
$_SESSION['goodsname']=$goodsname;
$_SESSION['price']=$price;
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
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>提交订单</title>
</head>
<body>
<form action="../control/addform.php" method="post">
    <div align="center">
        <h1 style="color: black;">&nbsp&nbsp&nbsp欢迎进行订单提交！</h1>
        <a href="menu1.php"><div style="color: black;">返回主页</div></a>
        <br>
        <table border="6px">
            <tr>
                <td><h4><div style="color: black;">收件人名称：</div></h4></td>
                <td><input type="text" name="addressee" required maxlength="40" placeholder="请输入收件人名称"/></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">地址：</div></h4></td>
                <td><input type="text" name="address" id="brand" required placeholder="请输入地址"></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">电话：</div></h4></td>
                <td><input type="text" name="phone" required placeholder="请输入电话" ></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">数量：</div></h4></td>
                <td><input type="number" name="quantity" id="price" required  placeholder="请输入数量"/></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">备注：</div></h4></td>
                <td><textarea cols="30" rows="5" name="beizhu">
					</textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">提&nbsp&nbsp&nbsp交</button>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <button type="reset">清&nbsp&nbsp&nbsp空</button>
                </td>
            </tr>
        </table>
    </div>
</form>
</body>
</html>