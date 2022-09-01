<?php
    session_start();
if (isset($_SESSION['key'])) {
    $key = $_SESSION['key'];
    if($key==1)
    {
        echo "<script>alert('商品添加成功！')</script>";
        unset($_SESSION['key']);
    }
    if ($key==0)
    {
        echo "<script>alert('商品添加失败！')</script>";
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
    <title>添加酒水信息</title>
</head>
<body>
<form action="../control/add.php" method="post">
    <div align="center">
        <h1 style="color: black;">&nbsp&nbsp&nbsp欢迎进行酒水信息添加！</h1>
        <a href="menu.php"><div style="color: black;">返回主页</div></a>
        <br>
        <table border="6px">
            <tr>
                <td><h4><div style="color: black;">名称：</div></h4></td>
                <td><input type="text" name="name" required maxlength="40" placeholder="请输入名称"/></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">品牌：</div></h4></td>
                <td><input type="text" name="brand" id="brand" required placeholder="请输入品牌"></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">生产日期：</div></h4></td>
                <td><input type="text" name="birthday" required placeholder="请输入生产日期" onblur="checkBirthday(this.value)" ><span id="span3"></span></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">价格：</div></h4></td>
                <td><input type="number" name="price" id="price" required  placeholder="请输入价格"/></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">库存：</div></h4></td>
                <td><input type="number" name="stock" id="stock"required  placeholder="请输入库存"/></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">产地：</div></h4></td>
                <td><input type="text" name="place" required  placeholder="请输入产地"/></td>
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
<script type="text/javascript">
    function checkBirthday(str){
        var birthday = document.getElementById("birthday").value;
        var sp = document.getElementById("span3");
        var re = /^((19|20)[0-9]{2})((0[1-9])|(1[0-2]))((0[1-9])|((1|2)[0-9])|(3[0-1]))$/;
        if (re.test(str)) {
            sp.innerHTML = "格式正确"
        } else {
            sp.innerHTML = "输入格式有误"
        }
    }
</script>
</html>